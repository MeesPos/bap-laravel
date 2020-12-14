<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $product = Product::limit(10)->orderBy('created_at', 'ASC')->get();
        foreach ($product as $row) :
            $image = ProductImage::where('productID', $row['id'])->limit(1)->get();
        endforeach;

        return view('homepage', ['products' => $product, 'image' => $image]);
    }
}
