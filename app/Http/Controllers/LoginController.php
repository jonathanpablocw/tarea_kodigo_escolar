<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('components.auth.login');
    }

    // Método para procesar el inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // El usuario ha iniciado sesión correctamente
            return redirect()->route('students.index');
        }

        // Si ponen los datos incorrectos, entonces mostramos de neuvo el login
        return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
    }

    // Funciona para cerrar la sesion del usuario
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
