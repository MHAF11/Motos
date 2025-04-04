<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisesController extends Controller
{
    public function index(){
        return view('paises');
    }
}
