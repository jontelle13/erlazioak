<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaia extends Model
{
    protected $table='Gaiak';

    use HasFactory;

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
