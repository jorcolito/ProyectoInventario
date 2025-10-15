<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){

        //una clase tiene muchos productos
        return $this->hasMany(products::class);
    }
}
