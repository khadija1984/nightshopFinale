<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    function index(){
        $panier = \Cart::content();
        
        return view('panier', compact('panier'));
    }
    
    function add($id, $qte=1){
        $product = \App\Product::where('id',$id)->firstOrFail();
        //calculer prix hors taxe
        $prixVente = $product->prixVente();
        $prixht = round($prixVente/(1 + config('cart.tax')/100 ), 2 );
       //$prixtva = round($prixhtva*(1 + config('cart.tax')/100));
         //dd($product);
        \Cart::add( $product->id,$product->name, $qte, $prixht, ['size'=>'M']);
        
        return redirect()->route('panier');
        
    }
    function findItem($id)
    {
    	$items = \Cart::search(function($cartitem, $rowId) use ($id) {

    		return $cartitem->id === intval($id);
    	});

    	return $items->first();
    }

        function addOne($id)
    {
    	$product = \App\Product::findOrFail($id);

    	\Cart::add($product->id, $product->name, 1 , $product->prixVente(),['size' => 'large']);

    	$item = $this->findItem($id);

    	$prix = $item->price * $item->qty;

    	return \Response::json([
    		'totalht' => \Cart::subtotal(),
    		'total' => \Cart::total(),
    		'tax' => \Cart::tax(),
    		'prix' => $prix ,
    		'id' => $id
    	]);
    	
    }


    function subOne($id)
    {
    	$item = $this->findItem($id);

	    $newItem = \Cart::update($item->rowId, intval($item->qty -1) );

	    $prix = $newItem->price * $newItem->qty;

	    return \Response::json(['totalht' => \Cart::subtotal(),'total'=>\Cart::total(),'prix'=> $prix ,'id'=>$id,'tax'=>\Cart::tax()]);
    }
    function delete($id)
    {
    	$item =  $this->findItem($id);
        //dd($item);
    	\Cart::remove($item->rowId);

    	// flash ....
    	return redirect()->back();
    }
    function addProduct()
    {
        $panier = \Cart::content();
        dd('$panier');
        return view('panier', compact('panier'));
    }
}
