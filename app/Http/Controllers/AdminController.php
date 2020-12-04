<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\product_image;

class AdminController extends Controller
{
    public function admin() {
        $user = Auth::user();

        return view('admin', ['user' => $user]);
    }

    public function add_product() {
        return view('add-product');
    }

    public function insert_product(Request $request) {
        $data = $request->validate(
            [
                'productName' => 'required',
                'productBrand' => 'required',
                'productMaterial' => 'required',
                'productGender' => 'required',
                'productDesc' => 'required',
                'productPrice' => 'required'
            ]
        );

        $product = Product::create($data);

        foreach($request->input('filename') as $image) :
            $product_image = product_image::insert([
                ['productID' => $product->id, 'image' => $image]
            ]);
        endforeach;
    }
}
