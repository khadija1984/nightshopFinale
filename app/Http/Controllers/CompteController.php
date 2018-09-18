<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CompteController extends Controller
{
    public function Compte()
    {
         
        $user = \App\User::get();
        //dd($user);
        return view('compte', compact('user'));
    }
}
