<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use \App\Http\Middleware\IsAdmin;
use Illuminate\Pagination\Paginator;

class NightshopController extends Controller
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
        return view('dashbordNightshop', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function showCategories()
    {
        $category = \App\Category::get();
        //dd($user);
        //return view('dashbordAdmin', compact('user'));
        return view('categoryNightshop', compact('category'));
    }
    public function showProduits()
    {
        $product = \App\Product::get()->paginate($perpage);
        $perpage=3;
        //dd($user);
        //return view('dashbordAdmin', compact('user'));
        return view('productNightshop', compact('product'));
    }

 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
      public function createCategory(Request $request){
        $category = new \App\Category();
        $category->name=request('name');
        $category->slug=request('slug');
        $category->image=request('image');
        
        //dd($category);
           $category->save();
           return redirect()->route('showCategories');
    }
}
