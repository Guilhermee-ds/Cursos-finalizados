<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' =>'fornecedor1',
                'status' =>'N',
                'cnpj'=> '',
            ],
            1 =>[
                'nome' =>'fornecedor2',
                'status' =>'S',
            ],
        ];

        $msg =  isset($fornecedores[0]['cnpj']) ? 'CNPJ informado': 'CNPJ não informado';
        echo $msg;

        return view('site.app.fornecedores.index',compact('fornecedores'));
    }
}
