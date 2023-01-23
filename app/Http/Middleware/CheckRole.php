<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
   
    public function handle(Request $request, Closure $next, ...$roles)
    {
      
           if(in_array($request->user()->kelas, $roles)){
              return $next($request);
           }

        return redirect('/home')->with('Pesan', 'Maaf Anda Bukan Admin');
       
    }
    

}
