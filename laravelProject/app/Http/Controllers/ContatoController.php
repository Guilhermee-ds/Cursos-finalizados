<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class ContatoController extends Controller
{
    public function contato() {

        var_dump($_GET);
        return view('site.contato');
    }
}
