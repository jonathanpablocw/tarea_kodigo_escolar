<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    // Aqui diremos que un turno tiene muchos estudiantes
    public function students()
    {
        return $this->hasMany(Student::class, 'shift_id');
    }

    // Vicnculamos con asistencias
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'shift_id');
    }
}
