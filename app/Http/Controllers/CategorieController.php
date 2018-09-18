<?php

namespace App\Http\Controllers;

use App\Http\Providers\AppServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    
   
       public function newCategorie() {
        
        $newCategorie = new Categorie();
        
        $newCategorie->titre = "Divers";
        $newCategorie->description= "lormepsum";
        
        $newCategorie->save();
    }
    
    
    public function listCategories()
    {
        $categorie = \App\Category::get();
        $product = \App\Product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(1)->get();
        //$products = \App\Category::findOrFail($product->category_id)->get();
       
        return view('categories', compact('categorie', 'product','lasts'));
        
    }
      public function alcools()
    {
        $categorie = \App\Category::get();
        $product = \App\Product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        //dd($product);
        return view('alcools', compact('categorie', 'product','lasts'));
    }
      public function softs()
    {
        $categorie = \App\Category::get();
        
        $product = \App\Product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        //dd($product);
        return view('softs', compact('categorie', 'product','lasts'));
    }
        public function packs()
    {
        $categorie = \App\Category::get();
        $product = \App\Product::get();
  
        //dd($product);
        return view('packs', compact('categorie', 'product'));
    }
        public function divers()
    {
        $categorie = \App\Category::get();
        
        $product = \App\Product::get();
  
        //dd($product);
        return view('divers', compact('categorie', 'product'));
    }
    
    public function filtre (Request $request, $product=null)
    {
        $categorie = \App\Category::get();
        $product = \App\Product::get();
        $ordre = $request->ordre;
        $perpage = $request->perpage;
        
        
        
        return view('alcools', compact('categorie', 'product','ordre', 'perpage' ));
    }
  
}
