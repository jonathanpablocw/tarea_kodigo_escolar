<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Aqui diremos ue una seccion tiene muchos estudiantes
    public function students()
    {
        return $this->hasMany(Student::class, 'section_id');
    }

    // Vincular con asistencias
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'section_id');
    }
}
