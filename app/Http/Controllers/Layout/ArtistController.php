<?php

namespace App\Http\Controllers\Layout;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArtistResource;
use App\Http\Resources\Art\ArtistArtResource;

class ArtistController extends Controller
{
    public function index(){
        $arts=Artist::orderBy('order','asc')->isActive()->paginate(request()->get('per-page', 12));
        return ArtistResource::collection($arts);
    }
    public function show(Artist $artist){
        return ArtistArtResource::collection($artist->arts()->with('artist')->isActive()->ordered()->get());
        // ->additional([
        //     'meta'=>$artist->name
        // ]);

    }
}