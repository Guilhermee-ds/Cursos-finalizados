<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadingController extends Controller
{
    public function getLoadingPage()
    {

        return view('welcome');
    }


    public function getAboutPage()
    {
        return view('about');

    }


}


