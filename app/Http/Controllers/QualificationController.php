<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QualificationController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $qualifications = Qualification::all();
            return view('components.qualifications.index', compact('qualifications'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            $students = Student::all();
            $subjects = Subject::all();
            return view('components.qualifications.create', compact('students', 'subjects'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Qualification::create([
                'student_id' => $request->input('student_id'),
                'subject_id' => $request->input('subject_id'),
                'score' => $request->input('score'),
            ]);

            return redirect()->route('qualifications.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $qualification = Qualification::find($id);

            if (!$qualification) {
                return redirect()->route('qualifications.index');
            }

            return view('components.qualifications.show', compact('qualification'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function edit(string $id)
    {
        if (Auth::check()) {
            $qualification = Qualification::find($id);
            $students = Student::all();
            $subjects = Subject::all();

            if (!$qualification) {
                return redirect()->route('qualifications.index');
            }

            return view('components.qualifications.edit', compact('qualification', 'students', 'subjects'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $qualification = Qualification::find($id);

            if (!$qualification) {
                return redirect()->route('qualifications.index');
            }

            $qualification->update([
                'student_id' => $request->input('student_id'),
                'subject_id' => $request->input('subject_id'),
                'score' => $request->input('score'),
            ]);

            return redirect()->route('qualifications.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $qualification = Qualification::find($id);

            if (!$qualification) {
                return redirect()->route('qualifications.index');
            }

            $qualification->delete();

            return redirect()->route('qualifications.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }



}
