<?php

namespace App\Http\Resources\News;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\News\ArtNewsIndexResource;

class ArtNewsDetailResource extends ArtNewsIndexResource
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
            'description'=>$this->description,
            'user'=>new UserResource($this->user),
        ]);
    }
}