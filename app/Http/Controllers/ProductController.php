<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   function  index($id)
   	{
            
            $product = \App\Product::where('id',$id)->firstOrFail();
           
            $related = \App\Category::findOrFail($product->category_id)->products()->orderByRaw('RAND()')->take(4)->get();
           
            return view('index',compact('product','related'));
          
   	}
   
 
}
