<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\estudiantes; //Modelo


class ListaController extends Controller
{
    public function index(Request $request)
    {
   //$estudiante= estudiantes::all();
    //return $estudiante;
    //return view ('VistaEstudiantes', compact('estudiante'))
    $texto=trim($request->get ('texto'));
    $estudiante=DB::table ('estudiantes')->select('Matricula','Nombre','Direccion')
    ->where ('matricula','=',$texto)->paginate(10);
    return view ('VistaEstudiantes',compact('estudiante'));
}

}
