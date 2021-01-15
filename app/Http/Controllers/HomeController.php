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

        return view('homepage', ['products' => $product]);
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $products = Product::query()
            ->where('productName', 'like', "%{$key}%")
            ->orWhere('productBrand', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        //get the recent 5 posts
        $recent_posts = Product::paginate(20);

        return view('search', [
            'key' => $key,
            'product' => $products,
            'products' => $recent_posts
        ]);
    }
}
