<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    public function calificaciones(){

        return $this->morphToMany("App\Calificaciones","calificacion");
    }
}
