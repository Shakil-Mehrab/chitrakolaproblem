<?php

namespace App\Http\Controllers\Layouts;

use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Mail\ArtBuyerInformarion;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Mail;
class BuyersController extends Controller
{
    public function view()
    {
        $categories = Buyer::orderBy('id','desc')->get();
        return view('layouts.buyers.view', compact('categories'));
    }

    public function add()
    {
        $levels = Buyer::where('parent_id', 0)->get();
        return view('layouts.buyers.create', compact('levels'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $category = new Buyer;
        $category->code = $data['code'];
        $category->art_name = $data['art_name'];
        $category->name = $data['name'];
        $category->email = $data['email'];
        $category->phone = $data['phone'];
        $category->address = $data['address'];
        $category->save();
        Mail::to('chitrakolagallery@gmail.com')->send(new ArtBuyerInformarion($category));
    }


    public function deleteCategory($id = null)
    {
        Buyer::where('id', $id)->delete();
        Alert::Success('Deleted', 'Success Message');
        return redirect()->back()->with('flash_message_error', 'Buyer Deleted');
    }
}