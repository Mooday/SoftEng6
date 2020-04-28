<?php

namespace App\Http\Controllers;

use App\actividades;
use Illuminate\Http\Request;


class ActividadesController extends Controller
{
    private $objactividades;
    public function __construct()
    {
        
        $this->objactividades = new actividades();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $actividad=actividades::all()->where('estado', '=',1);
        return view('actividades.show',compact('actividad'));
        
    }
    
    public function resusita()
    {
        $tiempo=1;
        $actividad=actividades::all()->where('estado', '=',0);
        return view('actividades.show',compact('actividad','tiempo'));
        
    }
     public function buscaactividad(Request $request)
    {
       
        $actividad=actividades::all()->where('estado', '=',1)->Where('actividad','=',$request->sactividad);
        return view('actividades.show',compact('actividad'));
        
    }
      public function  restaurar($id)
    {
        $tiempo=1;
        $actividad=$this->objactividades->find($id);
        $this->objactividades->where(['id'=>$id])->update([
            'estado'=>1,
        ]);
        return redirect('/resusita');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
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
            'modalidad'=>$request->modalidad,
            'fecha_ejecucion'=>$request->fecha_ejecucion,
            'total_hr'=>$request->total_hr,
            'nu_participantes'=>$request->nu_participantes,
            'responsables'=>$request->responsables,
            'observaciones'=>$request->observaciones,
            'estado'=>1,
            
            ]);
        return redirect('/show');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(actividades $actividades)
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
        return view('actividades.editar',compact('actividad'));
    }
    public function delete($id)
    {
        $actividad=$this->objactividades->find($id);
        $this->objactividades->where(['id'=>$id])->update([
            'estado'=>0,
        ]);
        return redirect('/show');
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
            'modalidad'=>$request->modalidad,
            'fecha_ejecucion'=>$request->fecha_ejecucion,
            'total_hr'=>$request->total_hr,
            'nu_participantes'=>$request->nu_participantes,
            'responsables'=>$request->responsables,
            'observaciones'=>$request->observaciones,
        ]);
        return redirect('/show');
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
        return redirect('/resusita');
    }
}
