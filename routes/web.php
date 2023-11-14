<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QualificationController;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

// Mostrar el Formulario de Login
Route::get('/', [LoginController::class, 'index'])->name('home');
// Ruta para hacer el inicio de sesión
Route::post('/login', [LoginController::class, 'login'])->name('loginUser');
// Para cerrar la sesion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// MOstrar formulario de Registro
Route::get('/register', [RegistrationController::class, 'create'])->name('register');
// Procesar datos de REgistro
Route::post('/register', [RegistrationController::class, 'store']);

// Rutas para gestionar los estudiantes
Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentsController::class, 'create'])->name('students.create');
Route::post('/students', [StudentsController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentsController::class, 'show'])->name('students.show');
Route::get('/students/{id}/edit', [StudentsController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentsController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');


// Rutas para gestionar las materias
Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
Route::get('/subject/create', [SubjectController::class, 'create'])->name('subject.create');
Route::post('/subject', [SubjectController::class, 'store'])->name('subject.store');
Route::get('/subject/{id}', [SubjectController::class, 'show'])->name('subject.show');
Route::get('/subject/{id}/edit', [SubjectController::class, 'edit'])->name('subject.edit');
Route::put('/subject/{id}', [SubjectController::class, 'update'])->name('subject.update');
Route::delete('/subject/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');


// Rutas para gestionar los profesores
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{id}', [TeacherController::class, 'show'])->name('teachers.show');
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');

// Rutas para gestionar las calificaciones
Route::get('/qualifications', [QualificationController::class, 'index'])->name('qualifications.index');
Route::get('/qualifications/create', [QualificationController::class, 'create'])->name('qualifications.create');
Route::post('/qualifications', [QualificationController::class, 'store'])->name('qualifications.store');
Route::get('/qualifications/{id}', [QualificationController::class, 'show'])->name('qualifications.show');
Route::get('/qualifications/{id}/edit', [QualificationController::class, 'edit'])->name('qualifications.edit');
Route::put('/qualifications/{id}', [QualificationController::class, 'update'])->name('qualifications.update');
Route::delete('/qualifications/{id}', [QualificationController::class, 'destroy'])->name('qualifications.destroy');

// Rutas para gestionar los turnos
Route::get('/shifts', [ShiftController::class, 'index'])->name('shifts.index');
Route::get('/shifts/create', [ShiftController::class, 'create'])->name('shifts.create');
Route::post('/shifts', [ShiftController::class, 'store'])->name('shifts.store');
Route::get('/shifts/{id}', [ShiftController::class, 'show'])->name('shifts.show');
Route::get('/shifts/{id}/edit', [ShiftController::class, 'edit'])->name('shifts.edit');
Route::put('/shifts/{id}', [ShiftController::class, 'update'])->name('shifts.update');
Route::delete('/shifts/{id}', [ShiftController::class, 'destroy'])->name('shifts.destroy');

// Rutas para gestionar los grads
Route::get('/grades', [GradeController::class, 'index'])->name('grades.index');
Route::get('/grades/create', [GradeController::class, 'create'])->name('grades.create');
Route::post('/grades', [GradeController::class, 'store'])->name('grades.store');
Route::get('/grades/{id}', [GradeController::class, 'show'])->name('grades.show');
Route::get('/grades/{id}/edit', [GradeController::class, 'edit'])->name('grades.edit');
Route::put('/grades/{id}', [GradeController::class, 'update'])->name('grades.update');
Route::delete('/grades/{id}', [GradeController::class, 'destroy'])->name('grades.destroy');

// Rutas para gestionar las secciones
Route::get('/sections', [SectionController::class, 'index'])->name('sections.index');
Route::get('/sections/create', [SectionController::class, 'create'])->name('sections.create');
Route::post('/sections', [SectionController::class, 'store'])->name('sections.store');
Route::get('/sections/{id}', [SectionController::class, 'show'])->name('sections.show');
Route::get('/sections/{id}/edit', [SectionController::class, 'edit'])->name('sections.edit');
Route::put('/sections/{id}', [SectionController::class, 'update'])->name('sections.update');
Route::delete('/sections/{id}', [SectionController::class, 'destroy'])->name('sections.destroy');

// Rutas para gestionar la asistencia
Route::get('/attendances', [AttendanceController::class, 'index'])->name('attendances.index');
Route::get('/attendances/create', [AttendanceController::class, 'create'])->name('attendances.create');
Route::post('/attendances', [AttendanceController::class, 'store'])->name('attendances.store');
Route::get('/attendances/{id}', [AttendanceController::class, 'show'])->name('attendances.show');
Route::get('/attendances/{id}/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');
Route::put('/attendances/{id}', [AttendanceController::class, 'update'])->name('attendances.update');
Route::delete('/attendances/{id}', [AttendanceController::class, 'destroy'])->name('attendances.destroy');


