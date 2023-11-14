<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Esto ayudara a decir que un grado tiene muchos estudiantes
    public function students()
    {
        return $this->hasMany(Student::class, 'grade_id');
    }

    // Vinculamos con asistencias
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'grade_id');
    }
}
