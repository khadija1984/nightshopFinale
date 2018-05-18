<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieContoller extends Controller
{
       public function newCategorie() {
        
        $newCategorie = new Categorie();
        
        $newCategorie->titre = "Divers";
        $newCategorie->description= "lormepsum";
        
        $newCategorie->save();
    }
    
    
    public function listCategories()
    {
        $categorie = Categorie::all();
        return view('categories', ['categorie'=> $categorie]);
    }
}
