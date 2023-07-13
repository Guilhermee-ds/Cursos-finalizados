<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use PhpParser\Builder\Function_;

class UsersController extends Controller
{

    public Function getMeProfile() 
    {
        $username = "Guilherme";
        return view('users', compact('username'));
    }
    

    public function getProfile(string $username) 
    {
       $args = ['a'=> '','b', 1, 2, 3];
       $whilezada = true;
       $colaboradores =['Guilheme', 'Rodrigo', 'Daniel'];

        return view('users', compact('username','args', 'whilezada','colaboradores'));

    }

    public function test(TestRequest $request)
    {
      //  return response()->json(['name' => 'Guilherme'],status:422);
      //return redirect(route('user-profile',['username' => 'Guilherme']));

    }
}
