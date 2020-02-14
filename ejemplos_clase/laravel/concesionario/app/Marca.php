<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Coche;

class Marca extends Model
{
    protected $fillable=['nombre','logo','pais'];
    //vamos con las relaciones es 1:N es decir en una marca
    //tendremos muchos coches, en marcas pondremos
    public function coches(){
        return $this->hasMany(Coche::class);
    }

    public function scopePais($query, $v){
        if($v=='%'){
            return $query->where('pais','like' ,$v)
            ->orWhereNull('pais');
        }
        if($v==-1){
            return $query->whereNull('pais');
        }
        if(!isset($v)){
            return $query->where('pais','like' ,'%')
            ->orWhereNull('pais');
        }
        return $query->where('pais', $v);
    }
}
