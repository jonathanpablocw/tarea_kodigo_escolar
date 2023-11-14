<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'subject_id', 'score'];

    // Con esto vamos a vincular con Student
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}
