<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_image';

    protected $fillable = ['id', 'productID', 'image'];

    public function product() {
        return $this->belongsTo(ProductImage::class, 'id', 'productID');
    }
}
