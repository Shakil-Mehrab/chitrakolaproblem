<?php

namespace App\Http\Controllers\Layouts;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class SlideController extends Controller
{

    public function view()
    {
        $categories = Slide::orderBy('id','desc')->get();
        return view('layouts.slides.view', compact('categories'));
    }

    public function add()
    {
        return view('layouts.slides.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $category = new Slide;
        // $category->heading = $data['heading'];
        // $category->sub_heading = $data['sub_heading'];
        if ($request->hasfile('image')) {
            echo $img_tmp = $request->file('image');
            if ($img_tmp->isValid()) {
                //image path code
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = rand(111, 99999) . '.' . $extension;
                $img_path = 'uploads/slides/' . $filename;
                //image resize
                Image::make($img_tmp)->save($img_path);
                $category->image = $filename;
            }
        }
        $category->save();
        return redirect('/admin/view/slides')->with('flash_message_success', 'Slide Added Successfully!!');
    }

    public function edit($id = null)
    {
        $categoryDetails = Slide::where('id', $id)->first();
        return view('layouts.slides.edit')->with(compact('categoryDetails'));
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
                $img_path = 'uploads/slides/' . $filename;
                //image resize
                Image::make($img_tmp)->save($img_path);
            }
        } else {
            $filename = $data['current_image'];
        }
        Slide::where(['id' => $id])->update(['image' => $filename
        ]);
        return redirect('/admin/view/slides')->with('flash_message_success', 'Slide Updated Successfully!!!');
    }

    public function deleteCategory($id = null)
    {
        $productImage = Slide::where('id', $id)->first();
        $image_path = 'uploads/slides/';
        if (file_exists($image_path . $productImage->image)) {
            unlink($image_path . $productImage->image);
        }
        Slide::where('id', $id)->delete();
        Alert::Success('Deleted', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Category Deleted');
    }
}