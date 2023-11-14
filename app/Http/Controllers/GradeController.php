<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $grades = Grade::all();
            return view('components.grades.index', compact('grades'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            return view('components.grades.create');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Grade::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('grades.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $grade = Grade::find($id);

            if (!$grade) {
                return redirect()->route('grades.index');
            }

            return view('components.grades.show', compact('grade'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function edit(string $id)
    {
        if (Auth::check()) {
            $grade = Grade::find($id);

            if (!$grade) {
                return redirect()->route('grades.index');
            }

            return view('components.grades.edit', compact('grade'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $grade = Grade::find($id);

            if (!$grade) {
                return redirect()->route('grades.index');
            }

            $grade->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('grades.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $grade = Grade::find($id);

            if (!$grade) {
                return redirect()->route('grades.index');
            }

            $grade->delete();

            return redirect()->route('grades.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
}
