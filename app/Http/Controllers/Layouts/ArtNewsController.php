<?php

namespace App\Http\Controllers\Layouts;

use App\Models\ArtNews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ArtNewsController extends Controller
{
    public function view()
    {
        $categories = ArtNews::orderBy('id','desc')->with('user')->get();
        return view('layouts.artNews.view', compact('categories'));
    }

    public function add()
    {
        return view('layouts.artNews.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        // echo ;


        $category = new ArtNews;
        $category->heading = $data['heading'];
        $category->user_id = auth()->user()->id;
        $category->description = $data['description'];
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/news/' . $filename;
                //image resize
                Image::make($img_tmp)->save($img_path);
                $category->image = $filename;
            }
        }
        $category->save();
        return redirect('/admin/view/news')->with('flash_message_success', 'Art News Added Successfully!!');
    }

    public function edit($id = null)
    {
        $categoryDetails = ArtNews::where('id', $id)->first();
        return view('layouts.artNews.edit')->with(compact('categoryDetails'));
    }

    public function updateCategory(Request $request, $id = null)
    {
        $data = $request->all();
        // dd($data['description']);
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/news/' . $filename;
                //image resize
                Image::make($img_tmp)->save($img_path);
            }
        } else {
            $filename = $data['current_image'];
        }
        ArtNews::where('id', $id)->update([
            'heading' => $data['heading'], 'user_id' => auth()->user()->id, 'description' => $data['description'], 'image' => $filename
        ]);
        return redirect('/admin/view/news')->with('flash_message_success', 'Art News Updated Successfully!!!');
    }

    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        ArtNews::where('id', $data['id'])->update(['status' => $data['status']]);
    }
    public function updateFeatured(Request $request, $id = null)
    {
        $data = $request->all();
        ArtNews::where('id', $data['id'])->update(['featured' => $data['status']]);
    }
    public function deleteCategory($id = null)
    {
        $productImage = ArtNews::where('id', $id)->first();
        $image_path = 'uploads/news/';
        if (file_exists($image_path . $productImage->image)) {
            unlink($image_path . $productImage->image);
        }
        ArtNews::where('id', $id)->delete();
        Alert::Success('Deleted', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Art Deleted');
    }
}