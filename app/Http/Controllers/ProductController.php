<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // retrieving 1:M
    public function getBrand($id) {
        $product = Product::find($id);

        return $product->brand;
    }

    // retrieving 1:M property
    public function getBrandId($id) {
        $product = Product::find($id);

        return $product->brand->id;
    }
}
