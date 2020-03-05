<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=['apellidos','nombre','mail','perfil'];

    public function clientes(){
        return $this->belongsToMany("App\Alojamiento")
        ->withPivot('fecha_in')->withPivot('fecha_out')
        ->withTimestamps();
    }

    public function scopeApellidos($query, $v){
        switch($v){
            case '%':
                return $query;
            break;
            case 1:
                return $query->where('apellidos','>=','A%')
                ->where('apellidos','<=','F%');
            break;
            case 2:
                return $query->where('apellidos','>=','G%')
                ->where('apellidos','<=','L%');
            break;
            case 3:
                return $query->where('apellidos','>=','M%')
                ->where('apellidos','<=','Q%');
            break;
            case 4:
                return $query->where('apellidos','>=','R%')
                ->where('apellidos','<=','V%');
            break;
            case 5:
                return $query->where('apellidos','>=','W%')
                ->where('apellidos','<=','Z%');
            break;
        }
    }
}
