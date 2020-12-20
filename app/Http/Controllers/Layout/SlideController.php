<?php

namespace App\Http\Controllers\Layout;

use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SlideResource;

class SlideController extends Controller
{
    public function index(){
        $slides=Slide::ordered()->get();
        return SlideResource::collection($slides);
    }
}