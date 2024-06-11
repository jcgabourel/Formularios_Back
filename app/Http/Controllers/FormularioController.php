<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    //
    public function index ()
    {
        return Formulario::all() ;

    }

    public function show ($Formulario)
    {
        return Formulario::find($Formulario);
       
    }

    public function create (Request $request)
    {
       
        $Formulario = new Formulario;
 
        $Formulario->Nombre = $request->Nombre;
        $Formulario->Clave = $request->Clave;
        $Formulario->CabeceraDocto = $request->CabeceraDocto;
        $Formulario->Linea1 = $request->Linea1;
        $Formulario->Linea2 = $request->Linea2;
        $Formulario->Linea3 = $request->Linea3;
        $Formulario->Activado = $request->Activado;
        $Formulario->Tipo = $request->Tipo;      
        $Formulario->save();
       
    }





 
}
