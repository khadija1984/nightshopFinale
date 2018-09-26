<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CompteController extends Controller
{
    public function Compte()
    {
        $categorie = \App\Category::get();
        $perpage=3;
        
        //$currentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
        $products = \App\Product::whereCategory_id(1)->paginate($perpage);
        $product = \App\product::get();
        $lasts = \App\Product::orderBy('created_at', 'DESC')->take(1)->get();
        $las = \App\Product::orderBy('created_at', 'ASC')->take(2)->get(); 
        $user = \App\User::get();
        //dd($user);
        return view('compte', compact('user','products','product','las','lasts'));
    }
    public function update(Request $request){
        $user = \App\User::find(Auth::user()->id);
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
        return redirect()->back();
    }
}
