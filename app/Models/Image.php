<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //Relación polimórfica

    public function imageable(){
        return $this-> morphTo(); //Nos devuelve una relación polimórfica 
    }
}
