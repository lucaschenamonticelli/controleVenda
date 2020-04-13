<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class VendaController extends Controller
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
        $venda = DB::select("
            SELECT 
                venda.id, 
                DATE_FORMAT(venda.data, '%d/%m/%Y') AS data, 
                forma_pagamento.nome AS formapgto
            FROM
                venda,
                forma_pagamento
            WHERE
                venda.formapagamento_id = forma_pagamento.id
            ORDER BY
                venda.data DESC
        ");
        return view('venda/index', ['venda' => $venda]);
    }

    public function detalhe($id){
        $venda = DB::select("
            SELECT
                produto.nome AS produto,
                DATE_FORMAT(venda.data, '%d/%m/%Y') AS data, 
                forma_pagamento.nome AS pagamento,
                produto_venda.quantidade,
                produto_venda.valor
            FROM
                produto,
                venda,
                forma_pagamento,
                produto_venda
            WHERE
                produto.id = produto_venda.produto_id AND
                venda.id = produto_venda.venda_id AND
                forma_pagamento.id = venda.formapagamento_id AND
                venda.id = $id
            ORDER BY produto.id
        ");
        return view('venda/detalhe', ['venda' => $venda]);
    }
}
