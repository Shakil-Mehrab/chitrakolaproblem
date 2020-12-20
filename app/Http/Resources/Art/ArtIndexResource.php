<?php

namespace App\Http\Resources\Art;

use Illuminate\Support\Str;
use App\Http\Resources\ArtistResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtIndexResource extends JsonResource
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
            'name'=>$this->name,
            'image'=>url('/uploads/arts/'.$this->image),
            'created_at'=>$this->created_at->toFormattedDateString(),
        ];
    }
}
