<?php

namespace App\Http\Controllers\Layout;

use App\Models\ArtNews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\News\ArtNewsDetailResource;
use App\Http\Resources\News\ArtNewsIndexResource;

class ArtNewsController extends Controller
{
    public function index(){
        $news = ArtNews::ordered()->isActive()->paginate(9);
        return ArtNewsIndexResource::collection($news);
    }
    public function show(ArtNews $news){
        $news->load([
            'user'
            ]);
        return new ArtNewsDetailResource($news);
    }
}