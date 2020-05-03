<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;
use App\Carrera;
use App\Profesor;
use App\NotaAsesor;
use App\Autoridad;
use Barryvdh\DomPDF\Facade as PDF;

use Auth;
use Carbon\Carbon;

class NotaAsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Método con el cual el estudiante accede a la solicitud de nota para profesor asesor
    public function index()
    {
        $estudiante = Estudiante::where('id', '=', Auth()->id())->first();
        $carrera = Carrera::join('estudiantes', 'estudiantes.id_carrera', '=', 'carreras.id')
        ->where('estudiantes.id', '=', Auth()->id())->first(['carreras.id', 'carreras.nombre']);
        $solicitudes_profesor = NotaAsesor::where('id_estudiante', Auth()->id())->orderBy('id', 'DESC')->get();
        $profesores = Profesor::all();
        if($carrera == NULL)
        {
            return view('Asesor/solicitud_profesor', compact('estudiante', 'solicitudes_profesor'));
        }
        return view('Asesor/solicitud_profesor', compact(['estudiante', 'carrera', 'profesores', 'solicitudes_profesor']));
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

    //Método que almacena la solicitud de nota para profesor asesor realizada por el estudiante
    public function store(Request $request)
    {
        $request = request()->except('_token');
        $nota_prof_asesor = NotaAsesor::create(['id_estudiante' => $request['id_estudiante'], 
        'id_profesor' => $request['id_profesor']]);
        $estudiante = Estudiante::where('id', '=', Auth()->id())->first();
        $carrera = Carrera::where('id', '=', $estudiante['id_carrera'])->first();
        return redirect('solicitud/asesor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NotaAsesor  $notaAsesor
     * @return \Illuminate\Http\Response
     */ 

    //Método con el cual el coordinador muestra los datos de una solicitud específica
    public function show($id)
    {
        $user = Auth::user();
        if($user->hasAnyRoles(['admin', 'coordinador']))
        {
            $nota_prof_asesor = NotaAsesor::where('id', '=', $id)->first();
            $estudiante = Estudiante::where('id', '=', $nota_prof_asesor['id_estudiante'])->first();
            $profesor = Profesor::where('id', '=', $nota_prof_asesor['id_profesor'])->first();
            $carrera = Carrera::where('id', $estudiante['id_carrera'])->first(['carreras.id', 'carreras.nombre']);
            return view('Asesor/nota_profesor', compact(['estudiante', 'profesor','carrera','nota_prof_asesor']));
        }else
        return view('blank');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NotaAsesor  $notaAsesor
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaAsesor $notaAsesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NotaAsesor  $notaAsesor
     * @return \Illuminate\Http\Response
     */ 

    //Método con el cual el coordinador actualiza y genera el documento PDF de una solicitud para profesor asesor
    public function update(Request $request)
    {
        $request = request()->except(['_token', '_method']);
        $nota_prof_asesor = NotaAsesor::where('id', '=', $request['id'])->first();
        $nota_prof_asesor->codigo = $request['codigo'];
        $nota_prof_asesor->save();
        $estudiante = Estudiante::where('id', $request['id_estudiante'])->first();
        $profesor = Profesor::where('id', '=', $request['id_profesor'])->first();
        $carrera = Carrera::where('id', $estudiante['id_carrera'])->first();
        $coordinador = Autoridad::where('cargo', 'Coordinador')->first();

        $date = Carbon::now()->locale('es_ES');
        $dia = $date->isoformat('D');
        $mes = $date->isoformat('MMMM');
        $año = $date->isoformat('Y'); 
        $fecha = $dia.' de '.$mes.' de '.$año;
        $pdf_asesor = PDF::loadview('Asesor.pdf_profesor', compact(['nota_prof_asesor', 'estudiante', 'profesor', 'carrera',
         'coordinador','fecha']));
        return $pdf_asesor->stream('Nota_Asesor_Profesor.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NotaAsesor  $notaAsesor
     * @return \Illuminate\Http\Response
     */

    //Método que utiliza el coordinador para eliminar una solicitud para profesor asesor
    public function destroy($id_nota_asesor)
    {
        $nota_a = NotaAsesor::find($id_nota_asesor);
        $nota_a->delete();
        return redirect('lista_notas');
    }

//Método que utiliza el coordinador para acceder a la lista de solicitudes para profesor asesor
    public function lista_notas()
    {
        $notas_asesor = NotaAsesor::orderby('created_at', 'DESC')->paginate(10);
        $estudiantes = Estudiante::all();
        return view('Asesor/lista_notas_profesor', compact(['notas_asesor', 'estudiantes']));
    }
}
