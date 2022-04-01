<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerdurasController extends Controller
{
    public function index(){
        return view('verduras')
        ->with('verduras', array('Papa', 'Zapallo', 'Lechuga'));
    }

    

    public function eliminar(){
        return view('eliminarVerdura');
    }

    public function agregar(){
        return view('agregarVerdura');
    }

    public function guardarFormulario(Request $request){
        //logica de codigo
        $data = $request;

        return 'Nombre Verdura:'.$request->input("precio");
    }

}
