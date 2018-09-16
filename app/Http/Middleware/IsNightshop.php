<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\RedirectResponse;

class IsNightshop
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    
       /* //recuperer les roles des utilisateur
        $adminUsers = DB::table('users')->get();
        //dd($adminUsers);
         // vérifier si cet utilisateur  a le role d'admin
        $isAdmin = false;
        foreach($adminUsers as $roles)
        {
            if($roles->role == 'admin'){
                 $isAdmin = true;
            }
           
        }
        if( ! $isAdmin )
    {
        if ($request->ajax()) {
            return response('Unauthorized.', 401);
        } else {
            return redirect()->back(); //todo h peut-etre une fenetre modale pour dire acces refusé ici...
        }
    }*/
        
         $user = $request->user();
         //dd($user->role);
            if ($user && $user->role=='nightshop')
            {
                return $next($request);
            }
            return new RedirectResponse(url('/error1'));  
    }
    
}
