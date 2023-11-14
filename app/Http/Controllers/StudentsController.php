<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Section;
use App\Models\Shift;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $students = Student::all();
            return view('components.students.index', compact('students'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            $shifts = Shift::all();
            $grades = Grade::all();
            $sections = Section::all();
            return view('components.students.create', compact('shifts', 'grades', 'sections'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            // dd($request->all());
            $shiftId = $request->input('shift');
            $gradeId = $request->input('grade');
            $sectionId = $request->input('section');
    
            Student::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'age' => $request->input('age'),
                'email' => $request->input('email'),
                'date_of_birth' => $request->input('date_of_birth'),
                'address' => $request->input('address'),
                'shift_id' => $shiftId,
                'grade_id' => $gradeId,
                'section_id' => $sectionId,
            ]);
    
            return redirect()->route('students.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $student = Student::find($id);

            if (!$student) {
                return redirect()->route('students');
            }
            return view('components.students.show', compact('student'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }


    public function edit(string $id)
    {
        if (Auth::check()) {
            $student = Student::find($id);

            if (!$student) {
                return redirect()->route('students.index');
            }

            return view('components.students.edit', compact('student'));
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $student = Student::find($id);

            if (!$student) {
                return redirect()->route('students.index');
            }

            $student->update([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'age' => $request->input('age'),
                'email' => $request->input('email'),
                'date_of_birth' => $request->input('date_of_birth'),
                'address' => $request->input('address'),
            ]);

            return redirect()->route('students.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $student = Student::find($id);

            if (!$student) {
                return redirect()->route('students.index');
            }

            $student->delete();

            return redirect()->route('students.index');
        } else {
            // El usuario no ha iniciado sesión, enviamos de nuevo al inicio de sesión
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
}
