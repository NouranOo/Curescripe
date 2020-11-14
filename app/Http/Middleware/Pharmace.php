<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;
use App\Models\User;
class Pharmace
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

      $a =  Session::get('curr');
      $user =  User::where('id',$a)->first();

     //   dd(Auth::check() );
        if($user && $user->userType_id == 3)
        {
            return $next($request);
        }
        return redirect('signin');
    }

    
}
