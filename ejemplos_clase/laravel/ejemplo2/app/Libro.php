<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable=["titulo", "sinopsis", "pvp", "stock", "isbn"];
}
