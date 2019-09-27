<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    // creating 1:M
    public function saveProduct($id) {
        $brand = Brand::find($id);

        $product = new Product();
        $product->name = 'iPhone X';
        $product->slug = 'iphone-x';
        $product->price = '899.99';
        $product->qty = 10;
        $product->description = 'Some description';
        
        $brand->products()->save($product);
    }

    // filtering 1:M
    public function getProductPriceMoreThan500($id) {
        $brand = Brand::find($id);

        $products = $brand->products()
            ->where('price', '>', '500')
            ->orderBy('name', 'asc')
            ->get();

        return $product;
    }

    // deleting 1:M
    public function deleteProduct($id) {
        $brand = Brand::find(1);
        $brand->products()->delete();
    }
}
