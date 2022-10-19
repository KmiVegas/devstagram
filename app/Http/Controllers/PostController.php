<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        //protege ruta para validar que no se ingrese sin datos de sesión
        $this->middleware('auth');
    }

    public function index()
    {
        //muestra info del usuario dd(auth()->user());
        return view('dashboard');
    }
}
