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
    public function contact(){
        $categorie = \App\Category::get();
        $product = \App\product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(1)->get();
        //$products = \App\Category::findOrFail($product->category_id)->get();
        $las = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        return view('contact', compact('categorie', 'product','lasts','las'));
    }


    public function listCategories()
    {
        $categorie = \App\Category::get();
        $product = \App\product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(1)->get();
        //$products = \App\Category::findOrFail($product->category_id)->get();
        $las = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        return view('categoriesPage', compact('categorie', 'product','lasts','las'));
        
    }
      public function alcools()
    {
        $categorie = \App\Category::get();
        $perpage=3;
        
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(1)->paginate($perpage);
        $product = \App\product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(1)->get();
        $las = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();      
        //dd($las);
        
        return view('alcools', compact('categorie', 'products','lasts','las','product'));
    }
      public function softs()
    {
        $categorie = \App\Category::get();
        $product = \App\Product::get();
        $perpage=3;
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(4)->paginate($perpage);
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        //$count = count($products);
        $las = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        //dd($las);
        return view('softs', compact('product','categorie', 'products','lasts','las'));
    }
        public function packs()
    {
        $categorie = \App\Category::get();
        $perpage=3;
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(3)->paginate($perpage);
         $product = \App\product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(1)->get();
        $las = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        return view('packs', compact('product','categorie', 'products','lasts','las'));
    }
        public function divers()
    {
        $categorie = \App\Category::get();
        
        $perpage=3;
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(2)->paginate($perpage);
        $product = \App\product::get();
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(1)->get();
        $las = \App\Product::orderBy('created_at', 'ASC')->take(2)->get();
        //dd($product);
        return view('divers', compact('product','categorie', 'products','lasts','las'));
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
