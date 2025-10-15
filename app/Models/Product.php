<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_code',
        'name',
        'cost',
        'price',
        'stock',
        'category_id' //FK
    ]; 


    public function category(){

        //un producto pertenece a UNA categoria
        return $this->belongsTo(category::class);
    }
}
