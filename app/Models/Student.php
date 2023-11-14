<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'email',
        'date_of_birth',
        'address',
        'shift_id',
        'grade_id',
        'section_id',
    ];

    // Con esto podremos decir que estudinte esta en un grado
    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    // Con esto podremos decir que estudinte esta en un secion
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // Con esto podremos decir que estudinte esta en un turno
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

    // Vinculamos con asistencias
    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }
}
