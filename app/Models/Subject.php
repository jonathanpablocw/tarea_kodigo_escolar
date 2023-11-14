<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    // Relación con calificaciones
    public function qualifications()
    {
        return $this->hasMany(Qualification::class, 'subject_id');
    }
}

