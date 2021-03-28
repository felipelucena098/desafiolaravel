<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class FactoryController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function contact() {
        return view('contact');
    }

    public function cars() {
        return view('cars');
    }

    public function maintenances() {
        return view('maintenances');
    }
}
