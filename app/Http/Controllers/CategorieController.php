<?php

namespace App\Http\Controllers;

use App\Http\Providers\AppServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;



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
        $perpage=3;
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(1)->paginate($perpage);
       
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        //dd($products);
        
        return view('alcools', compact('categorie', 'products','lasts'));
    }
      public function softs()
    {
        $categorie = \App\Category::get();
        $perpage=3;
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(4)->paginate($perpage);
           
        
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        //$count = count($products);
       // dd($products);
        return view('softs', compact('categorie', 'products','lasts'));
    }
        public function packs()
    {
        $categorie = \App\Category::get();
        $perpage=3;
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(3)->paginate($perpage);
        
        return view('packs', compact('categorie', 'products'));
    }
        public function divers()
    {
        $categorie = \App\Category::get();
        
        $perpage=3;
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(2)->paginate($perpage);
  
        //dd($product);
        return view('divers', compact('categorie', 'products'));
    }
    
    
    
    
    public function filtre (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= 3;

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
    	eval("\$products=$requete;");
    	return view('alcools',compact('products','categories','brands','categorie','ordre','perpage'));
    }
     public function filtreSofts (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= 3;

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
    	eval("\$products=$requete;");
    	return view('softs',compact('products','categories','brands','categorie','ordre','perpage'));
    }
    public function filtrePacks (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= 3;

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
    	eval("\$products=$requete;");
    	return view('packs',compact('products','categories','brands','categorie','ordre','perpage'));
    }
    public function filtreDivers (Request $request, $categorie =null)
    {
        $categories = \App\Category::all();
    	$ordre= $request->ordre;
    	$perpage= 3;

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
    	eval("\$products=$requete;");
    	return view('divers',compact('products','categories','brands','categorie','ordre','perpage'));
    }
    public function search (Request $request) 
    {
       $categories = \App\Category::all();
       $product = \App\Product::where('name','%'.$request->q.'%');
         
         return view('alcools', compact('product'));
       
    }
  
}
