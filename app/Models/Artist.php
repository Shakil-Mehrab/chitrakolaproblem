<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Traits\isActive;
use App\Models\Traits\isOrderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
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
     * categories
     *
     * @return void
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}