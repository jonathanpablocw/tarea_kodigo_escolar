<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Shift;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $attendances = Attendance::all();
            return view('components.attendances.index', compact('attendances'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function create()
    {
        if (Auth::check()) {
            $students = Student::all();
            $shifts = Shift::all();
            $grades = Grade::all();
            $sections = Section::all();
            return view('components.attendances.create', compact('students','shifts', 'grades', 'sections'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            Attendance::create([
                'shift_id' => $request->input('shift_id'),
                'grade_id' => $request->input('grade_id'),
                'section_id' => $request->input('section_id'),
                'student_id' => $request->input('student_id'),
                'date' => $request->input('date'),
                'status' => $request->input('status'),
                'observations' => $request->input('observations'),
            ]);

            return redirect()->route('attendances.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $attendance = Attendance::find($id);

            if (!$attendance) {
                return redirect()->route('attendances.index');
            }

            return view('components.attendances.show', compact('attendance'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function edit(string $id)
    {
        if (Auth::check()) {
            $students = Student::all();
            $shifts = Shift::all();
            $grades = Grade::all();
            $sections = Section::all();

            $attendance = Attendance::find($id);

            if (!$attendance) {
                return redirect()->route('attendances.index');
            }

            return view('components.attendances.edit', compact('attendance','students','shifts', 'grades', 'sections'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $attendance = Attendance::find($id);

            if (!$attendance) {
                return redirect()->route('attendances.index');
            }

            $attendance->update([
                'shift_id' => $request->input('shift_id'),
                'grade_id' => $request->input('grade_id'),
                'section_id' => $request->input('section_id'),
                'student_id' => $request->input('student_id'),
                'date' => $request->input('date'),
                'status' => $request->input('status'),
                'observations' => $request->input('observations'),
            ]);

            return redirect()->route('attendances.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $attendance = Attendance::find($id);

            if (!$attendance) {
                return redirect()->route('attendances.index');
            }

            $attendance->delete();

            return redirect()->route('attendances.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
}
