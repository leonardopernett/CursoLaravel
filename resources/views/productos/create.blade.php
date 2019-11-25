@extends('plantilla.main')



@section('head')

    


@endsection


@section('content')

    <div class="row mt-5">
      <div class="col-md-5 mx-auto ">
         <div class="card">
         <div class="card-header">
            Insert Product
         </div>

         @if(count($errors))
                  <div class="col-md-10">
                     @foreach($errors->all() as $error)
                      <div class="text-danger">
                          {{$error}}
                      </div>
                     @endforeach
                  </div>
               @endif


             <div class="card-body">
               {!! Form::open(['route'=>'productos.store','method'=>'post' , 'files'=>true])!!}
                   @csrf
                   <div class="form-group">
                     <input type="file" class="form-control" name="file" placeholder="nombre"> 
                   </div>

                   <div class="form-group">
                     <input type="text" class="form-control" name="nombre" placeholder="nombre"> 
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" name="seccion" placeholder="seccion"> 
                   </div>
                   <div class="form-group">
                     <input type="number" class="form-control" name="precio" placeholder="precio"> 
                   </div>
                   <div class="form-group">
                     <input type="date" class="form-control" name="fecha" placeholder="fecha"> 
                   </div>
                   <div class="form-group">
                     <input type="text" class="form-control" name="pais" placeholder="pais"> 
                   </div>
                   <input type="submit" value="enviar" class="btn btn-primary">
                {!! Form::close() !!}
             </div>
         </div>
      </div>
    </div>

@endsection