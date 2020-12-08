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
                'productPrice' => 'required|numeric'
                // 'filename[]' => 'required|image'
            ]
        );

        // dd($request);

        $product = Product::create($data);

        foreach($request->file('filename') as $image) :
            $file = $image->store('products', 'public');
            $image = $file;

            product_image::insert([
                ['productID' => $product->id, 'image' => $file]
            ]);
        endforeach;
    }

    public function all_products() {
        $products = Product::all();

        return view('all-products', ['products' => $products]);
    }

    public function delete_product($id) {
        Product::where('id', $id)->delete();
        product_image::where('productID', $id)->delete();

        return back();
    }

    public function change_product($id) {
        $product = Product::where('id', $id)->get();
        $images = product_image::where('productID', $id)->get();

        return view('change_product', ['product' => $product, 'images' => $images]);
    }
}
