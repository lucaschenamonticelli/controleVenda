<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct(Request $request)
    {
        $_SESSION['usuarioLogado'] = '';
    }

    public function index(){
        return view('login', ['erro' => '']);
    }

    public function logar(Request $request){
        if ($request['email'] && $request['senha']) {
            $user = User::where("email", "=", $request['email'])
            ->where("senha", "=", sha1($request['senha']))
            ->first();
            if ($user) {
                $_SESSION['usuarioLogado'] = sha1($request['senha']);
                return redirect('/vendas');
            } else {
                return view('login', ['erro' => 'Usuário e/ou senha incorreto!']);
            }
        } else {
            return view('login', ['erro' => 'Dados inválidos!']);
        }
    }

    public function sair(){
        unset($_SESSION['usuarioLogado']);
        return redirect('/');
    }
}
