<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeRelative($query){
        return $query->inRandomOrder()->take(4);
    }
}
