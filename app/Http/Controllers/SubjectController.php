<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $subjects = Subject::all();
            return view('components.subject.index', compact('subjects'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
    
    public function create()
    {
        if (Auth::check()) {
            return view('components.subject.create');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
    

    public function store(Request $request)
    {
        if (Auth::check()) {
            Subject::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('subject.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function show(string $id)
    {
        if (Auth::check()) {
            $subject = Subject::find($id);

            if (!$subject) {
                return redirect()->route('subjects.index');
            }

            return view('components.subject.show', compact('subject'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function edit(string $id)
    {
        if (Auth::check()) {
            $subject = Subject::find($id);

            if (!$subject) {
                return redirect()->route('subject.index');
            }

            return view('components.subject.edit', compact('subject'));
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function update(Request $request, string $id)
    {
        if (Auth::check()) {
            $subject = Subject::find($id);

            if (!$subject) {
                return redirect()->route('subject.index');
            }

            $subject->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            return redirect()->route('subject.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }

    public function destroy(string $id)
    {
        if (Auth::check()) {
            $subject = Subject::find($id);

            if (!$subject) {
                return redirect()->route('subject.index');
            }

            $subject->delete();

            return redirect()->route('subject.index');
        } else {
            return redirect()->route('home')->with('error', 'Datos incorrectos. Inténtalo de nuevo.');
        }
    }
}
