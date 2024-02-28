<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CrudMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // dd($request['groupe']);
        // $id = $request['groupe'];
        // if(!$id){
        //     return redirect('/stagiaires/?groupe='.$id);
        // }
        // return $next($request);
    }
}
