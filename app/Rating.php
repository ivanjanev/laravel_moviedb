<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
     protected $fillable = [
         'rating',
         'user_id',
         'movie_id'
     ];

     public function movie()
     {
         return $this->belongsTo(Movie::class);
     }
}
