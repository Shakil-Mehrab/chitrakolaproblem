<?php

namespace App\Http\Controllers\Layouts;

use App\Models\Art;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use RealRashid\SweetAlert\Facades\Alert;

class ArtController extends Controller
{
    public function view()
    {
        $categories = Art::orderBy('id','desc')->with('artist','category')->get();
        return view('layouts.arts.view', compact('categories'));
    }

    public function add()
    {
        $categories = Category::orderBy('name','asc')->get();
        $artists = Artist::orderBy('name', 'asc')->get();
        return view('layouts.arts.create', compact('categories', 'artists'));
    }

    public function store(Request $request)
    {
        $this->validate([
            'image'=>'required'
            ]);
        // dd($request->all());
        $data = $request->all();
        $category = new Art;
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->code = $data['code'];
        $category->artist_id = $data['artist_id'];
        $category->price = $data['price'];
        $category->size = $data['size'];
        $category->year = $data['year'];
        $category->media = $data['media'];
        $category->order = $data['order'];
        $category->category_id = $data['category_id'];
        $category->description = $data['description'];
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/arts/' . $filename;
                //image resize
                Image::make($img_tmp)->save($img_path);
                $category->image = $filename;
            }
        }
        $category->save();
        return redirect('/admin/view/arts')->with('flash_message_success', 'Art Added Successfully!!');
    }

    public function edit($id = null)
    {
        $categories = Category::orderBy('name','asc')->get();
        $artists = Artist::orderBy('name', 'asc')->get();
        $categoryDetails = Art::where('id', $id)->first();
        return view('layouts.arts.edit')->with(compact('categories', 'artists', 'categoryDetails'));
    }

    public function updateCategory(Request $request, $id = null)
    {
        $request->validate([
            'image'=>'required'
            ]);
        dd($request->file);
        $data = $request->all();
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $img_tmp->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/arts/' . $filename;
                //image resize
                Image::make($img_tmp)->save($img_path);
            }
        } else {
            $filename = $data['current_image'];
        }
        Art::where('id', $id)->update([
            'name' => $data['name'], 'slug' => $data['slug'], 'code' => $data['code'], 'category_id' => $data['category_id'],'size' => $data['size'],'year' => $data['year'],'media' => $data['media'],'order' => $data['order'],
            'artist_id' => $data['artist_id'], 'price' => $data['price'], 'description' => $data['description'], 'image' => $filename
        ]);
        return redirect('/admin/view/arts')->with('flash_message_success', 'Art Updated Successfully!!!');
    }

    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Art::where('id', $data['id'])->update(['status' => $data['status']]);
    }
    public function updateFeatured(Request $request, $id = null)
    {
        $data = $request->all();
        Art::where('id', $data['id'])->update(['featured' => $data['status']]);
    }
    public function deleteCategory($id = null)
    {
        $productImage = Art::where('id', $id)->first();
        $image_path = 'uploads/arts/';
        if (file_exists($image_path . $productImage->image)) {
            unlink($image_path . $productImage->image);
        }
        Art::where('id', $id)->delete();
        Alert::Success('Deleted', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Art Deleted');
    }

}