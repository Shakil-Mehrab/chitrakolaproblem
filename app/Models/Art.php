<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Traits\isActive;
use App\Models\Traits\isOrderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Art extends Model
{
    use HasFactory,isActive,isOrderable;

    /**
     * category
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
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


}