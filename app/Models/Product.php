<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productName',
        'productBrand',
        'productDesc',
        'productGender',
        'productPrice',
        'productMaterial'
    ];

    public function images() {
        return $this->hasMany(ProductImage::class, 'productID', 'id');
    }

    public function getFirstImage() {
        return $this->images->first()->image;
    }
}
