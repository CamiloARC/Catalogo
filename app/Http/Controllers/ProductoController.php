<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Talla;
use App\Models\Marca;
use Carbon\Carbon;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.producto.index.layout', [
            'productos' => Producto::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tallas = Talla::all();
        $marcas = Marca::all();
        $hoy = Carbon::today()->format('Y-m-d');
        return view('modulos.producto.create.layout', [
            "tallas" => $tallas,
            "marcas" => $marcas,
            "hoy" => $hoy,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nombre' => ['required','string'],
            'talla' => ['required'],
            'marca' => ['required'],
            'observaciones' => ['required'],
            'cantidadInventario' => ['required','numeric'],
            'fechaEmbarque' => ['required','date'],
        ],[
            'nombre.required' => 'El campo nombre es requerido.',
            'talla.required' => 'El campo talla es requerido.',
            'marca.required' => 'El campo marca es requerido.',
            'observaciones.required' => 'El campo observaciones es requerido.',
            'cantidadInventario.required' => 'El campo cantidad es requerido.',
            'fechaEmbarque.required' => 'El campo fecha de embarque es requerido.',
        ]);
        $nuevoProducto = new Producto;
        $nuevoProducto->nombre = $request->input('nombre');
        $nuevoProducto->talla_id = $request->input('talla');
        $nuevoProducto->marca_id = $request->input('marca');
        $nuevoProducto->observaciones = $request->input('observaciones');
        $nuevoProducto->cantidad_inventario = $request->input('cantidadInventario');
        $nuevoProducto->fecha_embarque = $request->input('fechaEmbarque');

        $nuevoProducto->save();
        return redirect(route('producto.index'));
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
        $tallas = Talla::all();
        $marcas = Marca::all();
        $hoy = Carbon::today()->format('Y-m-d');
        $producto = Producto::findOrFail($id);
        
        return view('modulos.producto.edit.layout', [
            "tallas" => $tallas,
            "marcas" => $marcas,
            "hoy" => $hoy,
            "producto" => $producto
        ]);
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
        $validated = $request->validate([
            'nombre' => ['required','string'],
            'talla' => ['required'],
            'marca' => ['required'],
            'observaciones' => ['required'],
            'cantidadInventario' => ['required','numeric'],
            'fechaEmbarque' => ['required','date'],
        ],[
            'nombre.required' => 'El campo nombre es requerido.',
            'talla.required' => 'El campo talla es requerido.',
            'marca.required' => 'El campo marca es requerido.',
            'observaciones.required' => 'El campo observaciones es requerido.',
            'cantidadInventario.required' => 'El campo cantidad es requerido.',
            'fechaEmbarque.required' => 'El campo fecha de embarque es requerido.',
        ]);

        $producto = Producto::findOrFail($id);
        
        $producto->nombre = $request->input('nombre');
        $producto->talla_id = $request->input('talla');
        $producto->marca_id = $request->input('marca');
        $producto->observaciones = $request->input('observaciones');
        $producto->cantidad_inventario = $request->input('cantidadInventario');
        $producto->fecha_embarque = $request->input('fechaEmbarque');

        $producto->save();

        return redirect(route('producto.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrfail($id);
        $producto->delete();
        return redirect(route('producto.index'));
    }
}
