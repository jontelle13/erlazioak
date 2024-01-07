<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erabiltzailea extends Model
{
    use HasFactory;

    protected $table = 'erabiltzaileak';
    protected $fillable = ['izena', 'abizena', 'adina','email','jaiotze_data','generoa'];

    public function helbidea()
    {
        return $this->belongsTo(Helbidea::class, 'helbidea');
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
