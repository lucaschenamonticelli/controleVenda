<?php

namespace App\Http\Controllers;

/* use App\Http\Controllers\Controller; */
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $produto = DB::table('produto')->get();
        /* foreach ($produto as $key => $value) {
            echo $value->nome . "<br>";
        } */
        return view('produto/index', ['produto' => $produto]);
    }

    public function cadastro($id = null){
        return view('produto/cadastro');
    }
}
