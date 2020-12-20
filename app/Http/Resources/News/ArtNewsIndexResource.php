<?php

namespace App\Http\Resources\News;

use Illuminate\Support\Str;
use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtNewsIndexResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'heading'=>$this->heading,
            'short_description' =>  Str::limit(strip_tags($this->description), 200,'...'),
            'image'=>url('/uploads/news/'.$this->image),
            'created_at'=>$this->created_at->toFormattedDateString(),
        ];
    }
}