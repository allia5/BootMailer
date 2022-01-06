<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\test_mail;

class test_email
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
            $obj_test_email = new test_mail();
           if($obj_test_email->exist_email($request->email) ==true and $obj_test_email->formul_of_email($request->email) == true ){
                  
              return $next($request);
              
           }else{
                  
                  return 'dailed';
           }
           
       
    }
}
