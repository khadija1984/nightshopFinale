<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    function index(){
        $panier = \Cart::content();
        
        return view('panier', compact('panier'));
    }
}
