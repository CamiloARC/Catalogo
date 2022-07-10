<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\Marca;

class OpenDashboard extends Controller
{
    /**
     * Provision a new web server.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $cantidadMarcas = Marca::all()->count();
        return view('dashboard', [
            'cantidadMarcas' => $cantidadMarcas
        ]);
    }
}