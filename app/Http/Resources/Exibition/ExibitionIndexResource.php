<?php

namespace App\Http\Resources\Exibition;

use App\Http\Resources\ArtistResource;
use App\Http\Resources\Art\ArtIndexResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ExibitionIndexResource extends JsonResource
{
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'status'=>$this->status,
            'slug'=>$this->slug,
            'image'=>url('uploads/categories/'.$this->image),
            'artist'=>new ArtistResource($this->artist),
        ];
    }
}