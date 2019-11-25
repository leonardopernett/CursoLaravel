@extends('plantilla.main')



@section('head')

    


@endsection


@section('content')

    <div class="row mt-5">
      <div class="col-md-5 mx-auto ">
          <table class="table table-striped">
             <tr>
                <th>id</th>
                <th>nombre</th>
                <th>seccion</th>
                <th>fecha</th>
                <th>pais</th>
                <th>editar</th>
                <th>delete</th>
                <th></th>
             </tr>

             <tbody>

            
              

                @foreach($productos as $producto)

                   <tr>
                     <td> {{ $producto->id}}</td>
                     <td> {{ $producto->nombre}}</td>
                     <td> {{ $producto->seccion}}</td>
                     <td> {{ $producto->fecha}}</td>
                     <td> {{ $producto->pais}}</td>
                     <td>
                      <a href="{{ route('productos.edit', $producto->id)}}" class="btn btn-warning">editar</a>
                     </td>

                     <td>
                     {!! Form::open(['route'=>['productos.destroy', $producto->id], 'method' =>'delete']) !!}
                       {!! Form::submit('eliminar',['class'=>'btn btn-danger'])!!}
                       {!! Form::close()!!}
                     </td>

                   <td>
                   <img src="/images/{{$producto->ruta}}" width="50px;" alt="iamgen">
                   </td>
                 
                   
                   </tr>
             

                @endforeach
             </tbody>
          </table>

               
      </div>
    </div>

@endsection