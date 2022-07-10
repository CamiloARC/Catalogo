<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Producto;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modulos.marca.index.layout', [
            'marcas' => Marca::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modulos.marca.create.layout', [
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
        $validated = $request->validate([
            'nombre' => ['required','string'],
            'referencia' => ['required','numeric'],
        ],[
            'nombre.required' => 'El campo nombre es requerido.',
            'referencia.required' => 'El campo referencia es requerido.',
        ]);
        $nuevaMarca = new Marca;
        $nuevaMarca->nombre = $request->input('nombre');
        $nuevaMarca->referencia = $request->input('referencia');
  
        $nuevaMarca->save();
        return redirect(route('marca.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Marca::findOrFail($id);
        return view('modulos.marca.edit.layout', [
            'marca' => $marca
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
            'referencia' => ['required','numeric'],
        ],[
            'nombre.required' => 'El campo nombre es requerido.',
            'referencia.required' => 'El campo referencia es requerido.',
        ]);

        $marca = Marca::findOrFail($id);

        $marca->nombre = $request->get('nombre');
        $marca->referencia = $request->get('referencia');

        $marca->save();

        return redirect(route('marca.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca = Marca::findOrfail($id);
        $productosAsociados = Producto::where('marca_id',$marca->id)->get()->count();
        if($productosAsociados > 0)
        {
            $message = ['msg' => 'No se puede eliminar la marca debido a que tiene productos asociados'];
            return redirect(route('marca.index'))->withErrors($message);
        } 
        else{
            $message = ['success' => 'El registro se elimino correctamente. '];
            $marca->delete();
            return redirect(route('marca.index'))->with($message);
        }       
        
    }
}
