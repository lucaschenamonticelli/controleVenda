<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('logado');
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
        return view('venda/detalhe', ['venda' => $venda, 'id' => $id]);
    }

    public function gerarPdf($id){
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

        $pdf = PDF::loadView('venda/download', ['venda' => $venda]);
        return $pdf->setPaper('a4')->download('relatorio.pdf');
    }
}
