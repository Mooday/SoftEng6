<?php

namespace App\Http\Controllers;

use App\Fechassustentaciones;
use App\Estudiante;
use App\Carrera;
use App\Anteproyecto;
use App\Profesor;
use App\Http\Controllers\DB;
use App\Fechassustentaciones_profesors;
use Illuminate\Http\Request;

class Fechassustentaciones_profesorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $notas= Fechassustentaciones_profesors::paginate(10);
        $dataanteproyecto = Fechassustentaciones::select('fechassustentaciones_profesors.updated_at','fechassustentaciones_profesors.id','anteproyectos.Nombre_estudiante1', 'anteproyectos.Nombre_anteproyecto', 'fechassustentaciones_profesors.id_jurado1', 'fechassustentaciones_profesors.id_jurado2', 'Fechassustentaciones.sustentationdate')
                ->join('fechassustentaciones_profesors', 'fechassustentaciones_profesors.id_fechassustentaciones', '=', 'Fechassustentaciones.id')
                ->join('anteproyectos', 'fechassustentaciones.id_anteproyecto', '=', 'anteproyectos.id')
                ->whereNotNull('fechassustentaciones_profesors.hora')
                ->orderBy('updated_at', 'desc')
                ->get();
        //dd($dataanteproyecto->toArray());
        $profesores= Profesor::where('status', '=', '1')->get(); 
        return view('notas.notaimprimir',compact('notas', 'dataanteproyecto','profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //dd('Prueba de ventana de jurado para sustentaciones');
        $pendientes= Fechassustentaciones_profesors::whereNull('hora')->get();
        //dd($pendientes->toArray());
        $sustentaciones= Fechassustentaciones::all();
       // $estudiantes = Estudiante::all();
        //$carreras = Carrera::all();
        $anteproyectos =  Anteproyecto::all();
        if($pendientes->isEmpty()){
            //$mensaje = "No existen solicitudes de fechas actualmente";
            session()->flash('success', ' No hay solicitudes de jurado');
            return view('notas.notajurado',compact('pendientes', 'sustentaciones', 'anteproyectos'));
        }
        else {
            return view('notas.notajurado', compact('pendientes', 'sustentaciones', 'anteproyectos'));
        }
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
     * @param  \App\Fechassustentaciones_profesors  $fechassustentaciones_profesors
     * @return \Illuminate\Http\Response
     */
    public function show(Fechassustentaciones_profesors $fechassustentaciones_profesors)
    {
        //
        //dd('prueba de muestra de lista de notas');
        return view('notas.notaimprimir');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fechassustentaciones_profesors  $fechassustentaciones_profesors
     * @return \Illuminate\Http\Response
     */
    public function edit(Fechassustentaciones_profesors $fechassustentaciones_profesors, $id)
    {
        //
        //dd($id);
        $editjurado=Fechassustentaciones_profesors::findOrFail($id);
        $profesores= Profesor::where('status', '=', '1')->get();
        //$sustentaciones= Fechassustentaciones::all();
        $nombre = Fechassustentaciones::select('anteproyectos.Nombre_estudiante1')
                ->join('fechassustentaciones_profesors', 'fechassustentaciones_profesors.id_fechassustentaciones', '=', 'Fechassustentaciones.id')
                ->join('anteproyectos', 'fechassustentaciones.id_anteproyecto', '=', 'anteproyectos.id')
                ->where('fechassustentaciones.id','=', $id)
                ->get();
        //dd($nombre->toArray());
        
        return view('notas.asignarjurado', compact('profesores', 'nombre', 'editjurado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fechassustentaciones_profesors  $fechassustentaciones_profesors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fechassustentaciones_profesors $fechassustentaciones_profesors, $id)
    {
        //Actualización del registro
        $actjurado=Fechassustentaciones_profesors::findOrFail($id);
        $actjurado->id_jurado1=$request->id_jurado1;
        $actjurado->id_jurado2=$request->id_jurado2;
        $actjurado->hora=$request->hora;
        $actjurado->codnota=$request->codnota;
        $actjurado->save();

        $request->session()->flash('success', 'Jurado ha sido asignado');
        return redirect('notas/imprimirnota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fechassustentaciones_profesors  $fechassustentaciones_profesors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fechassustentaciones_profesors $fechassustentaciones_profesors)
    {
        //
    }
}
