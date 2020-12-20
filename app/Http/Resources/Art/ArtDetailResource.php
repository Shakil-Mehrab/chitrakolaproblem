<?php

namespace App\Http\Resources\Art;

use App\Http\Resources\Art\ArtIndexResource;

class ArtDetailResource extends ArtIndexResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return array_merge(parent::toArray($request), [
            'code'=>$this->code,
            'size'=>$this->size,
            'media'=>$this->media,
            'year'=>$this->year,
            'price'=>$this->price,
            'description'=>$this->description,
            'created_at_humans' => $this->created_at->diffForHumans(),
            'artist_name'=>$this->artist->name,
        ]);
    }
}