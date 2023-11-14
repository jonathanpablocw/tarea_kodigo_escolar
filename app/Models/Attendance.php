<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift_id',
        'grade_id',
        'section_id',
        'student_id',
        'date',
        'status',
        'observations',
    ];

    // Con esto vamos a vincular con Shift
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

    // Con esto vamos a vincular con Grade
    public function grade()
    {
        return $this->belongsTo(Grade::class, 'grade_id');
    }

    // Con esto vamos a vincular con Section
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // Con esto vamos a vincular con Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
