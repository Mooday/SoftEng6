<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //
         $profesores = Profesor::paginate(10);
         return view('Profesor/profesor_lista',compact('profesores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Vista para crear una nueva autoridad
        return view('Profesor/profesor_crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Profesor::create([
            'nombre'=>$request['nombre'],
            'apellido'=>$request['apellido'],
            'status'=>$request['status'],
            ]);

            $request->session()->flash('success', $request['nombre'] . ' ' . $request['apellido'] . ' ha sido creado!');
            return redirect('profesores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Vista para editar autoridades
        $editprofesor=Profesor::findOrFail($id);
        return view('Profesor/profesor_edit', compact('editprofesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualización del registro
        $actprofesor=Profesor::findOrFail($id);
        $actprofesor->nombre=$request->nombre;
        $actprofesor->apellido=$request->apellido;
        $actprofesor->status=$request->status;
        $actprofesor->save();

        $request->session()->flash('success', $request['nombre'] . ' ' . $request['apellido'] . ' ha sido modificado');
        return redirect('profesores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
