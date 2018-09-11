<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaiementController extends Controller
{
    function checkoutStripe(Request $request){
        
        $total = \Cart::total();
        try{
            Stripe::setApiKey(env('STRIPE-SECRET-KEY'));

            $customer = Customer::create([
                'email' => $request->stripeEmail,
                'source'=>$request->stripeToken
            ]);
              $charge = Charge::create([
                  'customer'=>$customer->id,
                  'amount'=>$total*100 ,
                  'currency'=> 'eur'
              ]);
          //sauvegarde...BD
              $panier = $this->saveTransacion($charge, 'Stripe');
        } catch(Exception $e) {
          
          return $e->getMessage();
        } 
        return view('panier.paiement', compact('charge','panier'));
    }
    function saveTransacion($charge, $type){
        
        $total = \Cart::total();
        $cart = \Cart::content();
        
        $panier = \App\Panier::create([
            'user_id' => \Auth::user()->id,
            'total' => $total,
        ]);
        foreach ($cart as $line){
            
            \App\Line::create([
                
                'product_id'=>$line->id,
                'panier_id'=>$panier->id,
                'prix'=>$line->price,
                'qte'=>$line->qty,
            ]);
            
            //mise a jour stocks
            $product= \App\Product::find($line->id);
            $product->qte = $product->qte - $line->qty;
            $product->save();
 
        }
        \App\Paiement::create([
                
                'panier_id'=>$panier->id,
                'data'=> json_encode($charge),
                'type'=>$type,
                
            ]);
        \Cart::destroy();
        return $panier;
    }
}
