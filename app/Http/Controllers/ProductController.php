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
        $product = Product::where('id', $id)->get();
        $images = ProductImage::where('productID', $id)->limit(1)->get();

        return view('productDetails', ['product' => $product, 'images' => $images]);
    }

    public function all_products()
    {
        $product = Product::paginate(20);
        $images = ProductImage::all();

        return view('our-products', ['product' => $product, 'images' => $images]);
    }
}
