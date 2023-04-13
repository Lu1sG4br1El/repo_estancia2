<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Response;

class soloadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) //: Response
    {
        if(auth::user()->fullacces=='yes'):
            return $next($request);
        endif;
            return redirect('user');
        
/*      
        if(auth::user()->fullacces=='yes'):
            return $next($request);
        endif;
            return redirect('user');
            
        if(auth::user()->fullacces=='yes'):
            return $next($request);
        endif;
            return redirect('taller');

        if(auth::user()->fullacces=='no'):
            return $next($request);
        endif;
            return redirect('consultarT');*/
    }
}
