<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Product;
use App\Product_image;

class IndexController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        $products = Product::with('product_images')->get();

        return view('hello')->with(['products' => $products]);
    }

    public function getSupport(): View
    {
        return view('contact');
    }

    public function getProduct ($id){
        $product = Product::select(['id', 'name', 'price', 'description'])->where('id', $id)->with('product_images')->first();

        return view('product')->with(['product' => $product]);
    }
}
