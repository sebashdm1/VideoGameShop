<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $fillable = ['videogamename','consoletype','description','image_url','price'];

    public function url(){
        return $this->id ? 'games.update':'games.store';
    }

    public function  method(){
        return $this->id ? 'PUT' : 'POST';
    }























}
