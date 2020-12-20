<?php

namespace App\Models;

use App\Models\Art;
use App\Models\Artist;
use App\Models\Traits\isActive;
use App\Models\Traits\isOrderable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory,isActive,isOrderable;

    /**
     * arts
     *
     * @return void
     */
    public function arts()
    {
        return $this->hasMany(Art::class);
    }

    /**
     * artist
     *
     * @return void
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    // public function scopeIsActive(Builder $builder)
    // {
    //     return $builder->where('status', 1);
    // }
}