<?php

namespace App\Http\Controllers\Layouts;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class ArtistsController extends Controller
{
    public function view()
    {
        $categories = Artist::orderBy('order','asc')->with('categories','arts')->get();
        return view('layouts.artists.view', compact('categories'));
    }

    public function add()
    {

        return view('layouts.artists.create');
    }

    public function store(Request $request)
    {
        dd($request->file('image'));
        $data = $request->all();
        $category = new Artist;
        $category->name = $data['name'];
        $category->designation = $data['designation'];
        $category->phone = $data['phone'];
        $category->mail = $data['mail'];
        $category->order = $data['order'];
        // $category->description = $data['description'];
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/artists/' . $filename;
                //image resize
                Image::make($img_tmp)->resize(200,200)->save($img_path);
                $category->image = $filename;
            }
        }
        $category->save();
        return redirect('/admin/view/artists')->with('flash_message_success', 'Artist Added Successfully!!');
    }

    public function edit($id = null)
    {
        $categoryDetails = Artist::where('id', $id)->first();
        return view('layouts.artists.edit')->with(compact('categoryDetails'));
    }

    public function updateCategory(Request $request, $id = null)
    {
        $data = $request->all();
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/artists/' . $filename;
                //image resize
                Image::make($img_tmp)->resize(200,200)->save($img_path);
            }
        } else {
            $filename = $data['current_image'];
        }
        Artist::where(['id' => $id])->update([
            'name' => $data['name'], 'phone' => $data['phone'], 'mail' => $data['mail'],'order' => $data['order'],
            'designation' => $data['designation'], 'image' => $filename
        ]);
        return redirect('/admin/view/artists')->with('flash_message_success', 'Artist Updated Successfully!!!');
    }

    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Artist::where('id', $data['id'])->update(['status' => $data['status']]);
    }

    public function deleteCategory($id = null)
    {
        $productImage = Artist::where('id', $id)->first();
        $image_path = 'uploads/artists/';
        if (file_exists($image_path . $productImage->image)) {
            unlink($image_path . $productImage->image);
        }
        Artist::where('id', $id)->delete();
        Alert::Success('Deleted', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Artist Deleted');
    }
}