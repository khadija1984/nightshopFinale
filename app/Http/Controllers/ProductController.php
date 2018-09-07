<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   function  index($slug)
   	{
            $product = \App\Product::where('slug',$slug)->firstOrFail();

            $related = \App\Category::findOrFail($product->category_id)->products()->orderByRaw('RAND()')->take(4)->get();

            return view('produits.produit',compact('product','related'));
   	}
}
