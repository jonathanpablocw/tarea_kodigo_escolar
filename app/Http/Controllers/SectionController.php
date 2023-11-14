<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $sections = Section::all();
            return view('components.sections.index', compact('sections'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            return view('components.sections.create');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Section::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('sections.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $section = Section::find($id);

            if (!$section) {
                return redirect()->route('sections.index');
            }

            return view('components.sections.show', compact('section'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function edit(string $id)
    {
        if (Auth::check()) {
            $section = Section::find($id);

            if (!$section) {
                return redirect()->route('sections.index');
            }

            return view('components.sections.edit', compact('section'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $section = Section::find($id);

            if (!$section) {
                return redirect()->route('sections.index');
            }

            $section->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('sections.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $section = Section::find($id);

            if (!$section) {
                return redirect()->route('sections.index');
            }

            $section->delete();

            return redirect()->route('sections.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
}
