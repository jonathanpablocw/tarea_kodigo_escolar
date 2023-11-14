<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $teachers = Teacher::all();
            return view('components.teachers.index', compact('teachers'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            return view('components.teachers.create');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Teacher::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'age' => $request->input('age'),
                'email' => $request->input('email'),
                'date_of_birth' => $request->input('date_of_birth'),
                'address' => $request->input('address'),
            ]);

            return redirect()->route('teachers.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $teacher = Teacher::find($id);

            if (!$teacher) {
                return redirect()->route('teachers.index');
            }

            return view('components.teachers.show', compact('teacher'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function edit(string $id)
    {
        if (Auth::check()) {
            $teacher = Teacher::find($id);

            if (!$teacher) {
                return redirect()->route('teachers.index');
            }

            return view('components.teachers.edit', compact('teacher'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $teacher = Teacher::find($id);

            if (!$teacher) {
                return redirect()->route('teachers.index');
            }

            $teacher->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'age' => $request->input('age'),
                'email' => $request->input('email'),
                'date_of_birth' => $request->input('date_of_birth'),
                'address' => $request->input('address'),
            ]);

            return redirect()->route('teachers.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $teacher = Teacher::find($id);

            if (!$teacher) {
                return redirect()->route('teachers.index');
            }

            $teacher->delete();

            return redirect()->route('teachers.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
}
