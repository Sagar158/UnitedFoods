<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'products';

    public $guarded = [];

    public static $status = ['available' => 'Available','out_of_stock' => 'Out of Stock'];
    public static $units = ['kg' => 'KG','litre' => 'Litre','dozen' => 'Dozen'];
    public static $categories = [1 => 'Palm Dates', 2 => 'Rice', 3 => 'Mangoes'];
    public static $discount_units = ['percentage' => '%','fixed' => 'Fixed'];
    public function primaryImage(){
        return $this->hasOne(ProductImages::class,'product_id')->where('primary',1);
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class,'product_id');
    }
    public function relatedProducts()
    {
        return $this->hasMany(Products::class, 'category_id', 'category_id')->where('id', '!=', $this->id)->orderBy('id','desc')->limit(6);
    }
}
