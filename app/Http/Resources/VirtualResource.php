<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VirtualResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'heading'=>$this->heading,
            'description'=>$this->description,
            'link'=>$this->link,
        ];
    }
}
