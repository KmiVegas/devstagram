<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        /*
            tomar todo lo que viene en el request
            $input = $request->all();
        */


        $imagen = $request->file('file');
        return response()->json(['imagen' => "Probando respuesta"]);
    }
}
