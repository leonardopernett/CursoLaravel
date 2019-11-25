<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Http\Requests\ProductoStoreRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos = Producto::all();
       return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductoStoreRequest $request)
    {
    
        // $this->validate($request, [
        //     'nombre'  => 'required',
        //     'seccion' => 'required'
        // ]);

        // $productos = new Producto;
        // $productos->nombre = $request->nombre;
        // $productos->seccion = $request->seccion;
        // $productos->precio = $request->precio;
        // $productos->fecha = $request->fecha;
        // $productos->pais = $request->pais;
     
        // $productos->save(); 

          $entrada = $request->all();
          
          if($request->file('file')){
                $image = $request->file('file');
                $nombre = $image->getClientOriginalName();
                $image->move('images', $nombre);
                $entrada['ruta'] = $nombre;
          }

            Producto::create($entrada); 
            return view('productos.create')->with('flash','producto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto =  Producto::find($id);

         return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->seccion = $request->seccion;
        $producto->fecha = $request->fecha;
        $producto->pais = $request->pais;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect()->route('productos.edit',$producto->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto =  Producto::find($id);
        $producto->delete();

        return back();
    }
}
