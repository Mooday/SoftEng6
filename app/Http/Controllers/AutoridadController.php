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
        // Vista para crear una nueva autoridad
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

            $request->session()->flash('success', $request['nombre'] . ' ' . $request['apellido'] . ' ha sido creado!');
            return redirect('autoridades');
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
    public function edit($id)
    {
        // Vista para editar autoridades
        $editautoridad=Autoridad::findOrFail($id);
        return view('Autoridad/autoridad_edit', compact('editautoridad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autoridad  $autoridad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualización del registro
        $actautoridad=Autoridad::findOrFail($id);
        $actautoridad->nombre=$request->nombre;
        $actautoridad->apellido=$request->apellido;
        $actautoridad->cargo=$request->cargo;
        $actautoridad->status=$request->status;
        $actautoridad->save();

        $request->session()->flash('success', $request['nombre'] . ' ' . $request['apellido'] . ' ha sido modificado');
        return redirect('autoridades');
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
