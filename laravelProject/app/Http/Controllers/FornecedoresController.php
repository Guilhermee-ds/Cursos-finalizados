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
            ],
            1 =>[
                'nome' =>'fornecedor2',
                'status' =>'S',
                'cnpj'=> '11.111.000',
            ],
        ];


        return view('site.app.fornecedores.index',compact('fornecedores'));
    }
}
