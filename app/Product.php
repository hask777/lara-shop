<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function scopeRelative($query){
        return $query->inRandomOrder()->take(4);
    }
}
