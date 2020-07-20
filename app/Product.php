<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    public $fillable = ['name','category_id','description','image_url','price','stock','slug'];

    public function url(){
        return $this->id ? 'products.update':'products.store';
    }

    public function  method(){
        return $this->id ? 'PUT' : 'POST';
    }
}
