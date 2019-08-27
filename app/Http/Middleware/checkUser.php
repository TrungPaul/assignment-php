<?php

namespace App\Http\Middleware;

use Closure;

class checkUser
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
        $user = $request ->user();
        
        // kiểm tra xem user có active hay k 
        if($user->roles !=1) {
            return abort(403, 'Không có quyền admin!');
        }     
        return $next($request);
    }
}
