<?php

namespace App\Http\Controllers\Layouts;

use App\Models\Virtual;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class VirtualExibitioonController extends Controller
{
    public function view()
    {
        $categories = Virtual::all();
        return view('layouts.virtuals.view', compact('categories'));
    }

    public function add()
    {
        return view('layouts.virtuals.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $category = new Virtual;
        $category->heading = $data['heading'];
        $category->type = $data['type'];
        $category->link = $data['link'];
        $category->save();
        return redirect('/admin/view/virtuals')->with('flash_message_success', '3D Exhibition Added Successfully!!');
    }

    public function edit($id = null)
    {
        $categoryDetails = Virtual::where('id', $id)->first();
        return view('layouts.virtuals.edit')->with(compact('categoryDetails'));
    }

    public function updateCategory(Request $request, $id = null)
    {
        $data = $request->all();
        Virtual::where(['id' => $id])->update([
            'heading' => $data['heading'], 'link' => $data['link'], 'type' => $data['type']
        ]);
        return redirect('/admin/view/virtuals')->with('flash_message_success', '3D Exhibition Updated Successfully!!!');
    }

    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Virtual::where('id', $data['id'])->update(['status' => $data['status']]);
    }

    public function deleteCategory($id = null)
    {
        Virtual::where('id', $id)->delete();
        Alert::Success('Deleted', 'Success Message');
        return redirect()->back()->with('flash_message_error', '3D Exhibition Deleted');
    }
}
