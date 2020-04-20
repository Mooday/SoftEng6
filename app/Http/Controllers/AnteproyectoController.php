<?php

namespace App\Http\Controllers;

use App\anteproyecto;
use Illuminate\Http\Request;
use App\Profesor;
use App\Carrera;
use App\tipoanteproyecto;
use App\Estado;

class AnteproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoantess=tipoanteproyecto::all();
        $carreras=Carrera::all();
        $profesores=Profesor::all();
        $estadoss=estado::all();
        return view('hola', compact(['tipoantess','carreras','profesores','estadoss']));
        //return $carreras;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request=request()->except('_token');
        $registro=anteproyecto::create(['id_user'=>Auth()->id(),'Nombre_anteproyecto'=>$request['Nombre_anteproyecto'],'Tipo_Anteproyecto'=>$request['Tipo_Anteproyecto'],'Nombre_estudiante1'=>$request['Nombre_estudiante1'], 'Cedula_est1'=>$request['Cedula_est1'],'Nombre_estudiante2'=>$request['Nombre_estudiante2'],'Cedula_est2'=>$request['Cedula_est2'],'Asesor'=>$request['Asesor'], 'Asesor_empresa'=>$request['Asesor_empresa'], 'Nombre_empresa'=>$request['Nombre_empresa'],'Carrera'=>$request['carrera']]);
        return redirect('/registroestudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\anteproyecto  $anteproyecto
     * @return \Illuminate\Http\Response
     */
    public function show(anteproyecto $anteproyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\anteproyecto  $anteproyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(anteproyecto $anteproyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\anteproyecto  $anteproyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anteproyecto $anteproyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\anteproyecto  $anteproyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(anteproyecto $anteproyecto)
    {
        //
    }
}
