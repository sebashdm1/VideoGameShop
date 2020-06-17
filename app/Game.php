<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $fillable = ['videogamename','consoletype','description','image_url','price'];

}
