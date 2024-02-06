<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable =[
        'nom',
        'descripcion',
        'data_inici',
        'data_final'
    ];
}
