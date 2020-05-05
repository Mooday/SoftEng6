<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Fechassustentaciones;
use App\Estudiante;
use App\Carrera;
use App\Anteproyecto;
use App\Fechassustentaciones_profesors;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FechassustentacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $fechassustentacion= Fechassustentaciones::where('estate', "!=", 'Asignada')->get();
        $estudiante = Estudiante::all();
        $carreras = Carrera::all();
        $proyectos =  Anteproyecto::all();
        if($fechassustentacion->isEmpty()){
            // has no records
            $titulo = "No existen solicitudes de fechas actualmente";
            return view('contents.admin.mensajes', compact('titulo'));
        }
        else {
            return view('contents.admin.fechassustentacion.mostrarfechassustentacion', compact('fechassustentacion', 'carreras', 'proyectos'));
        }

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
     * @param  \App\Fechassustentaciones  $fechassustentaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Fechassustentaciones $fechassustentaciones)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fechassustentaciones  $fechassustentaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Fechassustentaciones $fechassustentaciones)
    {
        //

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fechassustentaciones  $fechassustentaciones
     * @param  \App\Fechassustentaciones_profesors $fechassustentacion_profesors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        If ($request->status == 'Asignada') {
            DB::table('fechassustentaciones')->where('id', $id)->update([
                'estate' => $request->status,
                'sustentationdate' => $request->presentacion
              ]);
            
            DB::table('fechassustentaciones_profesors')->insert([
                'id_fechassustentaciones' =>$id
            ]);
        }
        else{
            DB::table('fechassustentaciones')->where('id', $id)->update([
                'estate' => $request->status
              ]);

        }

        return redirect()->route('admin.fechassustentaciones.index')->with('status', "Se ha modificado la fecha correctamente");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fechassustentaciones  $fechassustentaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fechassustentacion = Fechassustentaciones::find($id);
        $fechassustentacion->delete();
        return redirect()->route('admin.fechassustentaciones.index');
    }


    public function mostrarfechassustentacionactivas()
    {
        $fechassustentacion= Fechassustentaciones::where('estate', 'Asignada')->get();
        $carreras = Carrera::all();
        $proyectos =  Anteproyecto::all();
        if($fechassustentacion->isEmpty()){
            // has no records
            $titulo = "No existen solicitudes de fechas actualmente";
            return view('contents.admin.mensajes', compact('titulo'));
        }
        else {
        return view('contents.admin.fechassustentacion.informefechassustentacionactivas', compact('fechassustentacion', 'carreras', 'proyectos'));
        }
    }
}
