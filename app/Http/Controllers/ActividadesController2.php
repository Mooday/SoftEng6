<?php

namespace App\Http\Controllers;

use App\actividades2s;
use Illuminate\Http\Request;


class ActividadesController2 extends Controller
{
    private $objactividades;
    public function __construct()
    {
        
        $this->objactividades = new actividades2s();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $actividad=actividades2s::all()->where('estado', '=',1);
        return view('actividades.show2',compact('actividad'));
        
    }
    
    public function resusita()
    {
        $tiempo=1;
        $actividad=actividades2s::all()->where('estado', '=',0);
        return view('actividades.show2',compact('actividad','tiempo'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $cad=$this->objactividades->create([
            
            'actividad'=>$request->actividad,
            'Empresa'=>$request->empresa,
            'tipo_vinculacion'=>$request->tipo_vinculacion,
            'total_beneficiarios'=>$request->Total_Beneficiarios,
            'responsables'=>$request->responsables,
            'observaciones'=>$request->observaciones,
            'estado'=>1,
            
            ]);
        return redirect('/show2');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(actividades2 $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad=$this->objactividades->find($id);
        return view('actividades.editar2',compact('actividad'));
    }
    public function delete($id)
    {
        $actividad=$this->objactividades->find($id);
        $this->objactividades->where(['id'=>$id])->update([
            'estado'=>0,
        ]);
        return redirect('/show2');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->objactividades->where(['id'=>$id])->update([
            'actividad'=>$request->actividad,
            'Empresa'=>$request->Empresa,
            'total_beneficiarios'=>$request->	total_beneficiarios,
            'tipo_vinculacion'=>$request->tipo_vinculacion,
            'responsables'=>$request->responsables,
            'observaciones'=>$request->observaciones,
        ]);
        return redirect('/show2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $del=$this->objactividades->destroy($id);
        return redirect('/resusita2');
    }
}
