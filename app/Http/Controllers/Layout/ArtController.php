<?php

namespace App\Http\Controllers\Layout;

use App\Models\Art;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Art\ArtIndexResource;
use App\Http\Resources\Art\ArtDetailResource;

class ArtController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(){
        $arts = Art::orderBy('order','asc')
                    ->isActive()
                    ->paginate(request('per-page', 12));

        return ArtIndexResource::collection($arts);
    }

    /**
     * show
     *
     * @param  mixed $art
     * @return void
     */
    public function show(Art $art){
        $art->load([
            'artist'
            ]);
        return new ArtDetailResource($art);
    }
}