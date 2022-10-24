<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        //protege ruta para validar que no se ingrese sin datos de sesión
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        //muestra info del usuario: dd(auth()->user());
        return view('dashboard', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
