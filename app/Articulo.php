<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Cliente;
class Articulo extends Model
{
 
    use SoftDeletes;


    public function cliente(){

        return $this->belongsTo(Cliente::class);
    }
 
}
