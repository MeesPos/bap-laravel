<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function admin()
    {
        $user = Auth::user();

        return view('admin', ['user' => $user]);
    }

    public function add_product()
    {
        return view('add-product');
    }

    public function insert_product(Request $request)
    {
        $data = $request->validate(
            [
                'productName' => 'required',
                'productBrand' => 'required',
                'productMaterial' => 'required',
                'productGender' => 'required',
                'productDesc' => 'required',
                'productPrice' => 'required|numeric',
                'visible' => 'required'
            ]
        );

        $product = Product::create($data);

        foreach ($request->file('filename') as $image) :
            $file = $image->store('products', 'public');
            $image = $file;

            ProductImage::insert([
                ['productID' => $product->id, 'image' => $file]
            ]);
        endforeach;

        return redirect()->route('all_products');
    }

    public function all_products()
    {
        $products = Product::all();
        $images = ProductImage::all();

        return view('all-products', ['products' => $products, 'image' => $images]);
    }

    public function delete_product($id)
    {

        $image = ProductImage::where('productID', $id)->get();

        foreach ($image as $row) :
            Storage::disk('public')->delete($row['image']);
        endforeach;

        ProductImage::where('productID', $id)->delete();
        Product::where('id', $id)->delete();

        return back();
    }

    public function change_product($id)
    {
        $product = Product::where('id', $id)->get();
        $images = ProductImage::where('productID', $id)->get();

        return view('change_product', ['product' => $product, 'images' => $images]);
    }

    public function delete_image($id)
    {
        $image = ProductImage::where('id', $id)->get();
        ProductImage::where('id', $id)->delete();

        foreach ($image as $row) :
            Storage::disk('public')->delete($row['image']);
        endforeach;

        return back();
    }

    public function update_product($id, Request $request)
    {
        $data = $request->validate(
            [
                'productName' => 'required',
                'productBrand' => 'required',
                'productMaterial' => 'required',
                'productGender' => 'required',
                'productDesc' => 'required',
                'productPrice' => 'required|numeric',
                'visible' => 'required'
            ]
        );

        Product::where('id', $id)->update($data);

        if ($request->file('filename')) :
            foreach ($request->file('filename') as $image) :
                $file = $image->store('products', 'public');
                $image = $file;

                ProductImage::insert([
                    ['productID' => $id, 'image' => $file]
                ]);
            endforeach;
        endif;

        return redirect()->route('all_products');
    }
}
