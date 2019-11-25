@extends('plantilla.main')



@section('head')

    


@endsection


@section('content')

    <div class="row mt-5">
      <div class="col-md-5 mx-auto ">
         <div class="card">
         <div class="card-header">
           editar
         </div>
             <div class="card-body">
             {!! Form::model($producto,['route'=>['productos.update', $producto->id], 'method'=>'PUT']) !!}
                   @csrf
                   <div class="form-group">
                     <input type="text" class="form-control" name="nombre" value="{{$producto->nombre}}" placeholder="nombre"> 
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" name="seccion" value="{{$producto->seccion}}" placeholder="seccion"> 
                   </div>
                   <div class="form-group">
                     <input type="number" class="form-control" name="precio" value="{{$producto->precio}}" placeholder="precio"> 
                   </div>
                   <div class="form-group">
                     <input type="date" class="form-control" name="fecha" value="{{$producto->fecha}}" placeholder="fecha"> 
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" name="pais" value="{{$producto->pais}}" placeholder="pais"> 
                   </div>
                   <input type="submit" value="update" class="btn btn-primary">
               {!! Form::close() !!}
             </div>
         </div>
      </div>
    </div>

@endsection