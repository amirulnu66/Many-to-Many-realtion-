<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class ProductController extends Controller
{
    //

        //data insert
    public function create(Request $request)
    {
        $product = new Product();
        $product->name = 'xamio Readmi s2';
        $product->price = 12000;

        $product->save();

        $category = Category::find([1]);
        $product->categories()->attach($category);

        return 'Success';
    }

        // data show
    public function show($product)
    {
         $product=Product::where('id', $product)->first();
        return view('product.show', compact('product'));
    }
}
