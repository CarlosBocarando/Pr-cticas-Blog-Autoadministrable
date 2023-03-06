<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        //Relación de uno a muchos, respecto a Post
        public function posts() {
            return $this->hasMany(Post::class);
        }
}