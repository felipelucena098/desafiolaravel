<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactoryController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }
    public function contact() {
        return view('contact');
    }
}
