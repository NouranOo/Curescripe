<?php

namespace App\Http\Middleware;
use App\Models\User;
use Session;
use Auth;
use Closure;

class IsPharmace
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
      
   //     $adminid = Session::get('curr');
        //dd($adminid);
         if(Auth::user())
         {
          return $next($request);
         }
         else
         {
          return redirect('/signin');
         }
  

    }
}
