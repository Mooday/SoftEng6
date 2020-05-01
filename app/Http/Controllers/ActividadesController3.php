<?php

namespace App\Http\Controllers;

use App\actividades3s;
use Illuminate\Http\Request;


class ActividadesController3 extends Controller
{
    private $objactividades;
    public function __construct()
    {
        
        $this->objactividades = new actividades3s();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $actividad=actividades3s::all()->where('estado', '=',1);
        return view('actividades.show3',compact('actividad'));
        
    }
    
    public function resusita3()
    {
        $tiempo=1;
        $actividad=actividades3s::all()->where('estado', '=',0);
        return view('actividades.show3',compact('actividad','tiempo'));
        
    }
    public function buscaactividad3(Request $request)
    {
       
        $actividad=actividades3s::all()->where('estado', '=',1)->Where('actividad','=',$request->sactividad);
        return view('actividades.show3',compact('actividad'));
        
    }
      public function  restaurar3($id)
    {
        $tiempo=1;
        $actividad=$this->objactividades->find($id);
        $this->objactividades->where(['id'=>$id])->update([
            'estado'=>1,
        ]);
        return redirect('/resusita3');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create3');
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
            'fecha_ejecucion'=>$request->fecha_ejecucion,
            'total_hr'=>$request->total_hr,
            'nu_participantes'=>$request->nu_participantes,
            'responsables'=>$request->responsables,
            'observaciones'=>$request->observaciones,
            'estado'=>1,
            
            ]);
        return redirect('/show3');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(actividades3 $actividades)
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
        return view('actividades.editar3',compact('actividad'));
    }
    public function delete($id)
    {
        $actividad=$this->objactividades->find($id);
        $this->objactividades->where(['id'=>$id])->update([
            'estado'=>0,
        ]);
        return redirect('/show3');
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
            'fecha_ejecucion'=>$request->fecha_ejecucion,
            'total_hr'=>$request->total_hr,
            'nu_participantes'=>$request->nu_participantes,
            'responsables'=>$request->responsables,
            'observaciones'=>$request->observaciones,
            'estado'=>1,
        ]);
        return redirect('/show3');
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
        return redirect('/resusita3');
    }
}
