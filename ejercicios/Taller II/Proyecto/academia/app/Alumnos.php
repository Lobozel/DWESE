<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable=["nombre", "apellidos", "email", "direccion", "telefono"];
}
