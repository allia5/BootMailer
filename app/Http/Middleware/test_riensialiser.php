<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class test_riensialiser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request,Closure $next)
    {
        $sqt=$request->jour-$request->jour;
       if(is_string($request->jour) and $sqt==0){
            return $next($request);
       }else{
return response()->json( ['error'=>'most be integer']);
       }
    }
}
