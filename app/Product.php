<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'category', 'created_at', 'updated_at'
    ];

    public function productsImage() 
    {
        return $this->hasMany(ProductsImage::class);
    }
}
