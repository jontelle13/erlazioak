<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helbidea extends Model
{
    use HasFactory;
    protected $table = 'helbideak';

    protected $fillable= ['helbidea','erabiltzailea_id'];

    public function erabiltzailea()
    {
        return $this->belongsTo(Erabiltzailea::class);
    }
}
