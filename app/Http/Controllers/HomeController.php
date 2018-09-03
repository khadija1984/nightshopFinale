<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;
use App\Mail\ContactFormSite;
class HomeController extends Controller
{
   function index()
    {
       
     $lasts = Product::orderBy('created_at', 'ASC')->take(1)->get();
     
     return view('home.main', ['lasts'=>$lasts]);
       
   }
  function contact(){
      return view('contact');
  }
   function postcontact(ContactForm $request){
      $message = \App\Message::create([
          'nom' => $request->nom,
          'email' => $request->email,
          'objet' => $request->objet,
          'content' => $request->content,  
      ]);
      
     // return new ContactFormSite($message);
      \Mail::to(env('CONTACT_SITE_EMAIL'))->send(new ContactFormSite($message))
      ;
      flash('Merci pour votre méssage, votre demande sera traitée dans 
              les plus brèfs délais !')->success();
      return redirect()->back();
  }
}
