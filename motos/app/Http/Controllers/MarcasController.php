<?php

namespace App\Http\Controllers;

use App\Models\marca;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    public function index(){
        $marcas = marca::all();

        return view('marcas', compact('marcas'));
    }

    public function item($id) {

        $marca = marca::find($id);

        return view('marcas-item', compact('marca'));
    }
}

