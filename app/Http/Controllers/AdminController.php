<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use \App\Http\Middleware\IsAdmin;
use App\Notifications;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Validator;
use Image;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $user = \App\User::get();
        //dd($user);
        return view('dashbordAdmin', compact('user'));
    }
      public function ficheUser($id)
    {
        $user = \App\User::where('id',$id)->get();
        
        //dd($user);
        return view('ficheUser', compact('user','id'));
    }
    
    public function showUsers()
    {
        $user = \App\User::get();
        //dd($user);
        //return view('dashbordAdmin', compact('user'));
        return view('users', compact('user'));
    }
    public function showCategories()
    {
        $category = \App\Category::get();
        //dd($user);
        //return view('dashbordAdmin', compact('user'));
        return view('category', compact('category'));
    }
    public function showProduits()
    {
        $product = \App\Product::get();
        //dd($user);
        //return view('dashbordAdmin', compact('user'));
        return view('product', compact('product'));
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyUser($id)
    {
       $item = \App\User::find($id);
       $item->delete();
       //dd($user);
         //notify()->flash('deleted','error', ['text' => 'Word Deleted Succesfully']);
        return redirect()->route('showUsers');
    }
    public function destroyCategory($id)
    {
       $item = \App\Category::find($id);
       $item->delete();
       //dd($user);
         //notify()->flash('deleted','error', ['text' => 'Word Deleted Succesfully']);
        return redirect()->route('showCategories');
    }
      public function destroyProduct($id)
    {
       $item = \App\Product::find($id);
       $item->delete();
       //dd($user);
         //notify()->flash('deleted','error', ['text' => 'Word Deleted Succesfully']);
        return redirect()->route('showProduits');
    }
    public function createUser(Request $request){
        $user = new \App\User();
        $user->username=request('username');
        $user->role=request('role');
        $user->email=request('email');
        $user->password = bcrypt(request('password'));
        //dd($user);
           $user->save();
           return redirect()->route('showUsers');
    }
   
    public function updateUser(Request $request, $id){
        $user = \App\User::find($id);
        $this->validate($request, [
            'username'=>'required',
            'role'=>'required',
            'email'=>'required'
        ]);
        $input = $request->all();
        $user->fill($input)->save();
        //Session::flash('flash_message', 'user successfumy added');
               // $user->username=$request->input('username');
                 //$user->role=$request->input('role');
                 //$user->email=$request->input('email');
               //$user->validate();
        //dd($request);
        return redirect()->route('showUsers');
    }
    
    
    
    
     public function createProduct(Request $request){
        $product = new \App\Product();
        $product->name=request('name');
        $product->slug=request('slug');
        $product->description=request('description');
        $product->prix=request('prix');
        $product->qte=request('quantité');
        $product->image=request('image');
        $product->category_id=request('category_id');
        //dd($product);
           $product->save();
           return redirect()->route('showProduits');
    }
     public function createCategory(Request $request){
         $this->validate(request(), [
             'name'=>'required', 
             'slug'=>'required',
             'image'=>'required|image|mimes:jpg,jpeg,gif,png'
         ]);
        $category = new \App\Category();
        $category->name=request('name'); 
        $category->slug=request('slug'); 
        $category->image=$request->file('image');
         //dd($img);
              
         if($request->hasFile('image')){
           $name = $request->file('image')->getClientOriginalName();
           //dd($name);
           //TO DO RESIZE IMAGE AND PATH TO CHANGE
           //$imagesize = Image::make($request->file('image'))->resize(300,170)->stream();
           $category->image = $request->image->move(public_path('assets\images'), $name, $imagesize);
        }
           //dd($request->image);
         $category->save();
         return redirect()->route('showCategories');
    }
   
}
