<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = 'estudiantes';
    protected $fillable =[
        'codigo',
        'nombres',
        'apellidos',
        'created_at',
        'updated_at'
    ];
}
