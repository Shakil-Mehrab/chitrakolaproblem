<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait isOrderable
{
    public function scopeOrdered(Builder $builder,$order='desc')
    {
        return $builder->orderBy('id',$order);
    }
}
