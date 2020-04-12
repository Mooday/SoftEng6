<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */

    //Método para acceder al perfil
    public function edit()
    {
        $id = Auth()->id();
        $carreras = Carrera::all();
        $datos_estudiante = Estudiante::where('id','=',$id)->get();
        return view('edit_profile',compact(['carreras','datos_estudiante']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */

    //Método que actualiza el perfil
    public function update(Request $request, Estudiante $estudiante)
    {

        $id = Auth()->id();
        $data_profile = request()->except(['_token','_method']);
        Estudiante::where('id','=',$id)->update($data_profile);
        $carreras = Carrera::all();
        $datos_estudiante = Estudiante::get()->where('id','=',$id);
        $mi_carrera = Carrera::join('estudiantes', 'carreras.id', '=', 'estudiantes.id_carrera')->get('carreras.nombre');
        return view('edit_profile',compact(['carreras','datos_estudiante', 'mi_carrera']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        //
    }
}
