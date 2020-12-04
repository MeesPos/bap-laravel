<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

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
        $request->validate(
            [
                'productTitle' => 'required',
                'productMerk' => 'required',
                'productMateriaal' => 'required',
                'productGender' => 'required',
                'productDesc' => 'required',
                'productPrijs' => 'required'
            ]
        );

        
    }
}
