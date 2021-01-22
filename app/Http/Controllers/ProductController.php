<?php

namespace App\Http\Controllers;

use ftp;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function details($id, $name)
    {
        $product = Product::visible()->where('id', $id)->get();
        $images = ProductImage::where('productID', $id)->limit(1)->get();

        return view('productDetails', ['product' => $product, 'images' => $images]);
    }

    public function all_products()
    {
        $product = Product::visible()->paginate(20);

        return view('our-products', ['product' => $product]);
    }
}
