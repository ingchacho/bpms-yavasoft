<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'pais_id', 'nombrepais', 'nombredepto', 'estado'
     ];
}