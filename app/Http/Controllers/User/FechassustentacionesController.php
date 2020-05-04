<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Estudiante;
use App\Fechassustentaciones;
use App\Anteproyecto;
use App\Carrera;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
        $user = Auth::user();
        $estudiante = Estudiante::where ('id', $user->id)->first();
        $carrera = Carrera::where ('id', $estudiante->id_carrera)->first();
        $proyectosbd =  Anteproyecto::where('cedula_est1', $estudiante->cedula)->get();
        $proyectos = $proyectosbd->unique();
        //dd ($proyectos);

       if ($estudiante) {
           if ($proyectos){
             return view('contents.user.fechassustentacion', compact ('estudiante', 'proyectos', 'carrera'));

           }
           else {
            $titulo = "No has registrado tu anteproyecto";
            return view('contents.user.mensajes', compact('titulo'));
           }



        }
       else {
            $titulo = "No existe un estudiante creado para tu id de usuario, registra tu ante proyecto";
            return view('contents.user.mensajes', compact('titulo'));
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
        $user = Auth::user();
        $estudiante = Estudiante::where ('cedula', $request->cedu)->first();

       // dd($estudiante->id, $iduser);

        $carrera = Carrera::where ('id', $estudiante->id_carrera)->first();
        if ($estudiante) {
            $fechasustentacion = Fechassustentaciones::create([
                'iduser'=> $estudiante->id,
                'id_anteproyecto' => $request->idproyecto,
                'id_carrera' => $carrera->id,
                'estate' => 'Pendiente',
                'active' => TRUE
                ]
            );
            return redirect()->route('user.fechassustentaciones.index')->with('status', "Se ha guardado la solicitud correctamente");

        }
        else {
            $titulo = "No existe un estudiante creado para tu id de usuario";
                    return view('contents.user.mensajes', compact('titulo'));

        }


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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fechassustentaciones $fechassustentaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fechassustentaciones  $fechassustentaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fechassustentaciones $fechassustentaciones)
    {
        //
    }

    public function mostrarfechassustentacionactivas()
    {
        $user = Auth::user();
        $estudiante = Estudiante::where ('id', $user->id)->first();
        $carreras = Carrera::where ('id', $estudiante->id_carrera)->get();
        $proyectos = Anteproyecto::where ('id_user', $estudiante->id)->get();
        if ($estudiante) {
            $fechassustentaciones= Fechassustentaciones::where('iduser', $estudiante->id)->get();
            if ($fechassustentaciones) {
                //dd ($fechassustentaciones, $proyectos, $carreras);
                return view('contents.user.informefechassustentacionactivas', compact('fechassustentaciones', 'proyectos', 'carreras'));

            }
            else
                {
                    $titulo = "Mostrar Fechas de Sustentación activas";
                    return view('contents.user.mensajes', compact('titulo'));


                }
        }
        else {
            $titulo = "No existe un estudiante creado para tu id de usuario";
                    return view('contents.user.mensajes', compact('titulo'));

        }





    }
}
