<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [
            'fornecedor1',
            'fornecedor2',
            'fornecedor3',
            'fornecedor4',
            'fornecedor5',
            'fornecedor6',
            'fornecedor7',
            'fornecedor8',
            'fornecedor9',
            'fornecedor10'
        ];

        return view('site.app.fornecedores.index',compact('fornecedores'));
    }
}
