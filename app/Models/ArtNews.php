<?php

namespace App\Models;

use App\Models\Traits\isActive;
use App\Models\Traits\isOrderable;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtNews extends Model
{
    use HasFactory,isActive,isOrderable;

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}