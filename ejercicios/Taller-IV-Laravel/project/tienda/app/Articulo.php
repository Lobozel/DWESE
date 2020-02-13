<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable=["nombre", "categoria", "precio", "stock", "imagen"];

    public function scopeCategoria($query, $v){
        if($v=='%'){
            return $query->where('categoria','like',$v)
            ->orWhereNull('categoria');
        }else if($v==-1){
            return $query->whereNull('categoria');
        }else{
            return $query->where('categoria',$v);
        }
    }

    public function scopePrecio($query, $v){
        if($v=='%'){
            return $query->where('precio','like',$v)
            ->orWhereNull('precio');
        }else if($v==-1){
            return $query->whereNull('precio');
        }else{
            switch($v){
                case 1:
                    return $query->where('precio','<',10)
            ->orWhereNull('precio');
                break;
                case 2:
                    return $query->where('precio','>',10)
                    ->where('precio','<',50)
            ->orWhereNull('precio');
                break;
                case 3:
                    return $query->where('precio','>',50)
                    ->where('precio','<',100)
            ->orWhereNull('precio');
                break;
                case 4:
                    return $query->where('precio','>',100)
            ->orWhereNull('precio');
                break;
                default:
                return $query->where('precio',$v);
            }
        }
    }
}
