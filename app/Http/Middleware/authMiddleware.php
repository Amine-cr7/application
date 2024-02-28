<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class authMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $login = DB::select('select * from login where email = ? and password = ?',[$request['email'],$request['password']]);
        if(count($login) == 1){
            $request->merge(['auth' => true]);
            return $next($request);
        }
        return redirect('login')->with('message',"error login" );
    }
}