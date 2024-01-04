<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Erabiltzailea extends Model
{
    protected $table = 'erabiltzaileak';
    protected $fillable = ['izena', 'abizena'];

    use HasFactory;
    public function helbidea()
    {
        return $this->hasOne(Helbidea::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}