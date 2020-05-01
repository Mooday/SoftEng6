<?php

namespace App\Http\Controllers;

use App\solicitud6creditos;
use Illuminate\Http\Request;
use App;
use App\Carrera;
use Auth;
use App\Estudiante;

class Solicitud6creditosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            $ver =App\Solicitud6creditos::all()->sortByDesc("created_at");;
 

        
       
        $user=Estudiante::where('id',Auth::user()->id)->first();
        
        $carrera = Carrera::join('estudiantes', 'estudiantes.id_carrera', '=', 'carreras.id')->where('estudiantes.id', '=', Auth()->id())->first(['carreras.id', 'carreras.nombre']);
       
        return view('creditos/lista_creditos',compact('ver', 'user', 'carrera'));
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
        $solicitud6creditosagregar=new solicitud6creditos;
        $solicitud6creditosagregar->nombre=$request->nombre;
        $solicitud6creditosagregar->cedula=$request->cedula;
        $solicitud6creditosagregar->carrera=$request->carrera;
        $solicitud6creditosagregar->email=$request->email;
        $solicitud6creditosagregar->telefono=$request->telefono;
        $solicitud6creditosagregar->estatus="entregar creditos";
        $solicitud6creditosagregar->id_user=Auth::user()->id;
        $solicitud6creditosagregar->save();
        return back()->with('agregar', 'Agregado Correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\solicitud6creditos  $solicitud6creditos
     * @return \Illuminate\Http\Response
     */
    public function show(solicitud6creditos $solicitud6creditos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\solicitud6creditos  $solicitud6creditos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud6creditosactualizar=App\solicitud6creditos::findOrFail($id);
           return view('creditos/editarcreditos', compact('solicitud6creditosactualizar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\solicitud6creditos  $solicitud6creditos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitud6creditosupdate=App\solicitud6creditos::findOrFail($id);
        $solicitud6creditosupdate->nombre=$request->nombre;
        $solicitud6creditosupdate->cedula=$request->cedula;
        $solicitud6creditosupdate->carrera=$request->carrera;
        $solicitud6creditosupdate->email=$request->email;
        $solicitud6creditosupdate->telefono=$request->telefono;
        $solicitud6creditosupdate->estatus=$request->estatus;
        $solicitud6creditosupdate->save();
        return back()->with('update', 'Actualizada Correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\solicitud6creditos  $solicitud6creditos
     * @return \Illuminate\Http\Response
     */
    public function destroy(solicitud6creditos $solicitud6creditos)
    {
        //
    }
}
