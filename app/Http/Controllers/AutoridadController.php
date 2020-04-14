<?php

namespace App\Http\Controllers;

use App\Autoridad;
use Illuminate\Http\Request;

class AutoridadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autoridades = Autoridad::paginate(10);
        return view('Autoridad/autoridad_lista',compact('autoridades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Autoridad/autoridad_crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Autoridad::create([
            'nombre'=>$request['nombre'],
            'apellido'=>$request['apellido'],
            'cargo'=>$request['cargo'],
            'status'=>$request['status'],
            ]);

        return redirect('autoridades')->with('status','Nuevo Anuncio creado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autoridad  $autoridad
     * @return \Illuminate\Http\Response
     */
    public function show(Autoridad $autoridad)
    {
        //
        return 'Formulario para mostrar autoridades';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autoridad  $autoridad
     * @return \Illuminate\Http\Response
     */
    public function edit(Autoridad $autoridad)
    {
        //
        return 'Formulario para editar autoridades';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autoridad  $autoridad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autoridad $autoridad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autoridad  $autoridad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autoridad $autoridad)
    {
        //
    }
}
