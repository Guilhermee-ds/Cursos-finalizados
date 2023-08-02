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
                'cnpj'=> '0',
                'dddd'=>'11', //SP
                'telefone'=>'0000-000',
            ],
            1 =>[
                'nome' =>'fornecedor2',
                'status' =>'S',
                'cnpj'=> null,
                'ddd' => '85',//CE
                'telefone'=>'0000-000',
            ],
            2 =>[
                'nome' =>'fornecedor 4',
                'status' =>'S',
                'cnpj'=> null,
                'ddd' => '32', // MG
                'telefone'=>'0000-000',
            ],
        ];


        return view('site.app.fornecedores.index',compact('fornecedores'));
    }
}
