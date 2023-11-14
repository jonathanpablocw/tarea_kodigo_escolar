<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShiftController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $shifts = Shift::all();
            return view('components.shifts.index', compact('shifts'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            return view('components.shifts.create');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Shift::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('shifts.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $shift = Shift::find($id);

            if (!$shift) {
                return redirect()->route('shifts.index');
            }

            return view('components.shifts.show', compact('shift'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function edit(string $id)
    {
        if (Auth::check()) {
            $shift = Shift::find($id);

            if (!$shift) {
                return redirect()->route('shifts.index');
            }

            return view('components.shifts.edit', compact('shift'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $shift = Shift::find($id);

            if (!$shift) {
                return redirect()->route('shifts.index');
            }

            $shift->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('shifts.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $shift = Shift::find($id);

            if (!$shift) {
                return redirect()->route('shifts.index');
            }

            $shift->delete();

            return redirect()->route('shifts.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
}
