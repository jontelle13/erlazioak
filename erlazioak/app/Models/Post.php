<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable=['post','erabiltzailea_id'];

    public function erabiltzailea()
    {
        return $this->belongsTo(Erabiltzailea::class);
    }

    public function gaiak()
    {
        return $this->belongsToMany(Gaia::class);
    }
}

