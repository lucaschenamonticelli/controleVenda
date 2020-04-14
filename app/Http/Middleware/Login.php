<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Login
{
    public function handle(Request $request, Closure $next)
    {
        $_SESSION['usuarioLogado'] = '';
        
        return $next($request);
    }
}