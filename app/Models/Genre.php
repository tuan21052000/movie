<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
	public $timestamps = false;
    use HasFactory;
    public function movie_genre(){
        return $this->belongsTo(Movie::class); //the loai chi co 1 phim
    }
}
