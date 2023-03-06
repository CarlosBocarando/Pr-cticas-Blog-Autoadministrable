<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Relación de uno a muchos pero de forma inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relación de uno a muchos pero de forma inversa

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relación muchos a muchos

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno polimórfica
    public function image(){
        return $this-> morphOne(Image::class, 'imageable');
    }
}