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

        return view('packs', compact('categorie', 'product'));
    }
        public function divers()
    {
        $categorie = \App\Category::get();
        
        $product = \App\Product::get();
  
        //dd($product);
        return view('divers', compact('categorie', 'product'));
    }
    
    
    
    
    public function filtre (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= $request->perpage;

    	if($categorie == null )

    		$requete = "App\Product::";
    	else
    		$requete ="App\Category::where('slug','".$categorie."')->first()
    		->products()->";
    	switch ($ordre) {
    		case 'new':
    			$requete .= "orderBy('created_at','ASC')";
    			break;

    		case 'ASC':
                $requete .= "orderBy('name','ASC')";
                break;

            case 'DESC':
                $requete .= "orderBy('name','DESC')";
                break;

            case 'prix-desc':
                $query = "DB::raw('CAST(prix AS DECIMAL(10,2))')";
                $requete .= "orderBy($query, 'DESC')"; 

                break;

            case 'prix-asc':
                $requete .= "orderBy('prix', 'ASC')";
                break;

    		default:
    			$requete .= "orderBy('created_at','ASC')";
    			break;
    	}

    	$requete.="->paginate($perpage)";
    	eval("\$product=$requete;");
    	return view('alcools',compact('product','categories','brands','categorie','ordre','perpage'));
    }
     public function filtreSofts (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= $request->perpage;

    	if($categorie == null )

    		$requete = "App\Product::";
    	else
    		$requete ="App\Category::where('slug','".$categorie."')->first()
    		->products()->";
    	switch ($ordre) {
    		case 'new':
    			$requete .= "orderBy('created_at','ASC')";
    			break;

    		case 'ASC':
                $requete .= "orderBy('name','ASC')";
                break;

            case 'DESC':
                $requete .= "orderBy('name','DESC')";
                break;

            case 'prix-desc':
                $query = "DB::raw('CAST(prix AS DECIMAL(10,2))')";
                $requete .= "orderBy($query, 'DESC')"; 

                break;

            case 'prix-asc':
                $requete .= "orderBy('prix', 'ASC')";
                break;

    		default:
    			$requete .= "orderBy('created_at','ASC')";
    			break;
    	}

    	$requete.="->paginate($perpage)";
    	eval("\$product=$requete;");
    	return view('softs',compact('product','categories','brands','categorie','ordre','perpage'));
    }
    public function filtrePacks (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= $request->perpage;

    	if($categorie == null )

    		$requete = "App\Product::";
    	else
    		$requete ="App\Category::where('slug','".$categorie."')->first()
    		->products()->";
    	switch ($ordre) {
    		case 'new':
    			$requete .= "orderBy('created_at','ASC')";
    			break;

    		case 'ASC':
                $requete .= "orderBy('name','ASC')";
                break;

            case 'DESC':
                $requete .= "orderBy('name','DESC')";
                break;

            case 'prix-desc':
                $query = "DB::raw('CAST(prix AS DECIMAL(10,2))')";
                $requete .= "orderBy($query, 'DESC')"; 

                break;

            case 'prix-asc':
                $requete .= "orderBy('prix', 'ASC')";
                break;

    		default:
    			$requete .= "orderBy('created_at','ASC')";
    			break;
    	}

    	$requete.="->paginate($perpage)";
    	eval("\$product=$requete;");
    	return view('packs',compact('product','categories','brands','categorie','ordre','perpage'));
    }
    public function filtreDivers (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= $request->perpage;

    	if($categorie == null )

    		$requete = "App\Product::";
    	else
    		$requete ="App\Category::where('slug','".$categorie."')->first()
    		->products()->";
    	switch ($ordre) {
    		case 'new':
    			$requete .= "orderBy('created_at','ASC')";
    			break;

    		case 'ASC':
                $requete .= "orderBy('name','ASC')";
                break;

            case 'DESC':
                $requete .= "orderBy('name','DESC')";
                break;

            case 'prix-desc':
                $query = "DB::raw('CAST(prix AS DECIMAL(10,2))')";
                $requete .= "orderBy($query, 'DESC')"; 

                break;

            case 'prix-asc':
                $requete .= "orderBy('prix', 'ASC')";
                break;

    		default:
    			$requete .= "orderBy('created_at','ASC')";
    			break;
    	}

    	$requete.="->paginate($perpage)";
    	eval("\$product=$requete;");
    	return view('divers',compact('product','categories','brands','categorie','ordre','perpage'));
    }
    public function search ($param) {
        
    }
  
}
