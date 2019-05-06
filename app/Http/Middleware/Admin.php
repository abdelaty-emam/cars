<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin {
        protected $guard = 'admin';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next = null, $guard = null) {
        if (Auth::guard($guard)->check()) {
            return redirect('/cars');
            
        } 

           

        else {
            return redirect('admin/login');
        } 
        return $next($request);
    }

}
