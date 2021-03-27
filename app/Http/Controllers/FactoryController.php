<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class FactoryController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function login() {
        return view('login');
    }

    public function registers() {        
        return view('registers');
    }

    public function create(Request $request) {  

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $usuario = new Usuario;

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->save();

        return redirect('/');
    
    }

    public function contact() {
        return view('contact');
    }
}
