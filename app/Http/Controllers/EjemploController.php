<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Articulo;
use App\Cliente;

class EjemploController extends Controller
{
     
    
    public function index(){

    //    $articulos = Articulo::all();
    //    return view('welcome', compact('articulos'));

    $articulos = Articulo::all();
    return view('welcome', compact('articulos'));
        
    }


    public function store(Request $request){

          
        $articulo = new Articulo;
        $articulo->nombre ="carro";
        $articulo->precio =34;
        $articulo->pais ="chile";
        $articulo->observaciones ="ninguna";
        $articulo->seccion ="vehiculo";
        $articulo->save();

        
        return "datos insertados";
    }

    public function update(){
         
        // $articulo = Articulo::find(7);
        // $articulo->nombre ="carro";
        // $articulo->save();
        
        Articulo::where('seccion','plastico')->where('pais','colombia')->update(['precio'=>24]);
        return "datos actualizados";
    }


    public function delete(){
         
       $articulo = Articulo::find(7);

       $articulo->delete();

       return"borrado";
      
    }


    // borrado papeleria de reciclaje
    public function softdelete(){
        $articulo = Articulo::find(2);
        $articulo->delete();
        return"enviado a la papeleria de reciclaje";
       
    }



    public function buscar(){
      $articulos =  Articulo::withTrashed()
                ->where('id', 2)
                ->get();
            return view('welcome', compact('articulos'));
    }



    public function restore(){
        $articulos =  Articulo::withTrashed()
                  ->where('id', 2)
                  ->restore();
  
              return "restaurado de la papeleria de reciclaje";
      }
  


    public function cliente($id){

        return Cliente::find($id)->articulo;

    }

    public function articulo($id){

        return Articulo::find($id)->cliente->nombre;

    }
    

    public function articulos($id){

        $articulos = Cliente::find($id)->articulos;

        foreach ($articulos as $key => $articulo) {
             echo $articulo->nombre  . "<br>";
        }

       
    }


    public function perfil($id){


        $cliente = Cliente::find($id);
       foreach ($cliente->perfils as $key => $perfil) {
           

             return $perfil->nombre;
       } 

    }


    public function calificaciones(){

        $cliente = Cliente::find(1);

        foreach ($cliente->calificaciones as $key => $calificar) {
             
           return  $calificar->calificacion;
        }
    }


    
}


    
