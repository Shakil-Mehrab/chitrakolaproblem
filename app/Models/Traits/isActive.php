<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait isActive
{
    public function scopeIsActive(Builder $builder)
    {
        return $builder->where('status',1);
    }
}
