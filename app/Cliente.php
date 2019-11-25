<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;
use App\Perfil;
use App\calificaciones;
class Cliente extends Model
{
     


    protected $fillable = ['nombre','apellido'];

    public function articulo(){
        return $this->hasOne(Articulo::class);
    }


    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }

    public function perfils(){

        return $this->belongsToMany(Perfil::class);
    }


    public function calificaciones(){

        return $this->morphToMany("App\Calificaciones","calificacion");
    }
}
