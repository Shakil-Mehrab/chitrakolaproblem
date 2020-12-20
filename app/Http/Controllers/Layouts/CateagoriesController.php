<?php

namespace App\Http\Controllers\Layouts;

use Image;
use App\Models\Artist;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class CateagoriesController extends Controller
{
    public function view()
    {
        $categories = Category::orderBy('id','desc')->with('artist','arts')->get();
        return view('layouts.categories.view', compact('categories'));
    }

    public function add()
    {
        $artists = Artist::orderBy('name', 'asc')->get();
        return view('layouts.categories.create', compact('artists'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $category = new Category;
        $category->name = $data['category_name'];
        $category->slug = $data['category_slug'];
        $category->artist_id = $data['artist_id'];
        $category->description = $data['category_description'];
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/categories/' . $filename;
                //image resize
                Image::make($img_tmp)->resize(375,190)->save($img_path);
                $category->image = $filename;
            }
        }
        $category->save();
        return redirect('/admin/view/categories')->with('flash_message_success', 'Category Added Successfully!!');
    }

    public function edit($id = null)
    {
        $artists = Artist::orderBy('name', 'asc')->get();
        $categoryDetails = Category::where('id', $id)->first();
        return view('layouts.categories.edit')->with(compact('artists', 'categoryDetails'));
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
                $img_path = 'uploads/categories/' . $filename;

                //image resize
                Image::make($img_tmp)->resize(375,190)->save($img_path);
            }
        } else {
            $filename = $data['current_image'];
        }
        Category::where(['id' => $id])->update([
            'name' => $data['category_name'],'slug' => $data['slug'],'artist_id' => $data['artist_id'], 'description' => $data['category_description'], 'image' => $filename
        ]);
        return redirect('/admin/view/categories')->with('flash_message_success', 'Category Updated Successfully!!!');
    }

    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Category::where('id', $data['id'])->update(['status' => $data['status']]);
    }

    public function deleteCategory($id = null)
    {
        $productImage = Category::where('id', $id)->first();
        $image_path = 'uploads/categories/';
        if (file_exists($image_path . $productImage->image)) {
            unlink($image_path . $productImage->image);
        }
        Category::where('id', $id)->delete();
        Alert::Success('Deleted', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Category Deleted');
    }
}
