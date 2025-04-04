<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MotosController extends Controller
{
    public function index(){
        return view('motos');
    }
}
