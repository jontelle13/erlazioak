<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaia extends Model
{
    protected $table='gaiak';

    protected $fillable=['gaia'];

    use HasFactory;

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_gaia', 'gaia_id', 'post_id');
    }
}
