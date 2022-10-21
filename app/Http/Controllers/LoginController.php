<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        //validar campos requeridos
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //validamos que los datos ingresados son reales
        if (!auth()->attempt($request->only('email', 'password'), $request->remenber)) {
            //mensaje en una sesión, se usa en el formulario
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        return redirect()->route('posts.index');
    }
}
