<?php

namespace App\Http\Controllers;

use App\NotaBiblioteca;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tesina=DB::table('anteproyectos')->select('id','Nombre_estudiante1','Cedula_est1','Nombre_estudiante2','Cedula_est2','Carrera','Nombre_anteproyecto')->where('Estado','=','Finalizado')->get();
        return view('Biblioteca/biblioteca', compact('tesina'));
    }


    public function exportar(){
        
        $materias= DB::table('anteproyectos')->select('id','Nombre_estudiante1','Cedula_est1','Carrera','Nombre_anteproyecto')->where('Tipo_Anteproyecto','=','MATERIAS DE MAESTRÍA CON OPCIÓN A TÉSIS')->where('Estado','=','Finalizado')->get();
        $tesis= DB::table('anteproyectos')->select('id','Nombre_estudiante1','Cedula_est1','Carrera','Nombre_anteproyecto')->where('Tipo_Anteproyecto','=','TÉSIS Y TEÓRICOS PRÁCTICOS')->where('Estado','=','Finalizado')->get();        
        $pdf= PDF::loadView('Biblioteca.pdf_biblioteca',compact('materias','tesis'));   
        return $pdf->download('Nota-Biblioteca.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
