<?php

namespace App\Http\Resources;

use App\Http\Resources\ArtResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ArtCollection extends ResourceCollection
{
    public $collects = ArtResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection
        ];
    }
}