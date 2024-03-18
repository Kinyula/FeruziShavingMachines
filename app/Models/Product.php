<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['product_category_id', 'product_name', 'product_image'];

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function price(){
        return $this->hasOne(Price::class);
    }
}
