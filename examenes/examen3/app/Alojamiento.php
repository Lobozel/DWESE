<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    protected $fillable=['nombre','provincia','foto','descripcion','telefono','hab'];

    public function clientes(){
        return $this->belongsToMany("App\Cliente")
        ->withPivot('fecha_in')->withPivot('fecha_out')
        ->withTimestamps();
    }
    public function scopeProvincias($query, $v){
        return $query->where('provincia','like',"%$v%");
    }
}
