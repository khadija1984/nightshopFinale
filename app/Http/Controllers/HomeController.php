<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Promotion;
use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;
use App\Mail\ContactFormSite;
class HomeController extends Controller
{
   function index()
    {
       
       //$Product=\App\product::get();
        $lasts = product::orderBy('created_at', 'ASC')->take(2)->get();
        $product = \App\product::get();
        
     return view('home.main',compact('lasts','product'));
       
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
  function footerLasts()
    {
      
        $lasts = \App\Product::orderBy('created_at', 'ASC')->take(1)->get();
       
        //$promotions = \App\Promotion::orderBy('created_at','ASC')
          //  ->where('started_at','<=',\Carbon\Carbon::now())
            //->where('finished_at','>=',\Carbon\Carbon::now())
            //->take(4)->get();
       
        return view('footer',['lasts' => $lasts]);
       
   }
    function error()
    {
       
        
     return view('error');
       
   }
   function error1()
    {
       
        
     return view('error1');
       
   }
  
}
