<?php

namespace App\Http\Resources\Art;

use App\Http\Resources\Art\ArtIndexResource;

class ArtistArtResource extends ArtIndexResource
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
            'artist' => $this->artist->name
        ]);
    }
}