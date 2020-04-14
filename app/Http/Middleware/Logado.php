<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Logado
{
    public function handle(Request $request, Closure $next)
    {
        /* if(isset($_SESSION['usuarioLogado'])){
            if($_SESSION['usuarioLogado'] == ''){
                return redirect('/login');
            }else{
                return redirect('/vendas');
            }
        }else{
            exit('caiu aqui a jeba');
            return redirect('/login');
        } */

        return $next($request);
    }
}