<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use App\Promotion;
use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;
use App\Mail\ContactFormSite;
use Midnite81\GeoLocation\Contracts\Services\GeoLocation;





class HomeController extends Controller
{
   function show(GeoLocation $geo, Request $request)
    {
         //$request->ip()
         $ipLocation = $geo->getCity('213.49.177.117');
         $latitude = $ipLocation->getLatitude();
         $longitude = $ipLocation->getLongitude();
         //dd($latitude);
         $users= \App\user::whererole('nightshop')->get();
         $tab = json_decode($users, true);
         //dd($tab);
         
        $product=  \App\Product::get();
        $lasts = product::orderBy('created_at', 'ASC')->take(1)->get();
        $las = product::orderBy('created_at', 'ASC')->take(2)->get();
        $promo = \App\Promotion::get();
 
     return view('welcome', compact('las','product','promo','lasts','latitude','longitude','users','tab'));
       
    }
   
  public function index(GeoLocation $geo, Request $request) 
{
    $ipLocation = $geo->getCity($request->ip());
    
    // if you do $geo->get($request->ip()), the default precision is now city

    // $ipLocation is an IpLocation Object
    
    echo $ipLocation->ipAddress; // e.g. 127.0.0.1
    
    echo $ipLocation->getAddressString(); // e.g. London, United Kingdom
    
    // the object has a toJson() and toArray() method on it 
    // so you can die and dump an array.
    dd($ipLocation->toArray()); 

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
  public function search (Request $request) 
    {
       $categories = \App\Category::all();
       $product = \App\Product::where('name','%'.$request->q.'%')
         ->orwhere('description','%'.$request->q.'%');
       
       return view('alcools',compact('product'));
    }

}
