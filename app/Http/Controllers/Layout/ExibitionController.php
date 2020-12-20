<?php

namespace App\Http\Controllers\Layout;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Art\ExibitionArtResource;
use App\Http\Resources\Exibition\ExibitionIndexResource;

class ExibitionController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(){
        $arts=Category::with('artist')->ordered()->isActive()->paginate(request()->get('per-page', 16));
        return ExibitionIndexResource::collection($arts);
    }

    /**
     * upcommingIndex
     *
     * @return void
     */
    public function upcommingIndex(){
        $arts = Category::with('artist')
                    ->ordered()
                    ->where('status',0)
                    ->get();

        return ExibitionIndexResource::collection(
            $arts
        );
    }

    /**
     * show
     *
     * @param  mixed $category
     * @return void
     */
    public function show(Category $category){
        // $category->load([
        //     'arts'
        // ]);
        return ExibitionArtResource::collection(
            $category->arts()->with('category')->isActive()->orderBy('order','asc')->get()
        );
        // ->additional([
        //     'meta'=>$exibition->name
        //    ]);
    }
}