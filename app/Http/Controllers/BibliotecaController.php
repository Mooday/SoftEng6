<?php

namespace App\Http\Controllers;

use App\NotaBiblioteca;
use App\anteproyecto;
use App\NotaAsesor;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tesina=DB::table('anteproyectos')->select('id','Nombre_estudiante1','Cedula_est1','Nombre_estudiante2','Cedula_est2','Carrera','Nombre_anteproyecto','Tipo_Anteproyecto')->where('Estado','=','Finalizado')->get();
        return view('Biblioteca/biblioteca', compact('tesina'));
    }


    public function exportar(Request $request){
        $codigos=DB::table('nota_asesors')->select('codigo')->get();
        $materias['anteproyecto']=anteproyecto::whereIn('id',$request->input('tesina'))->get();   
        $pdf= PDF::loadView('Biblioteca.pdf_biblioteca',compact('materias','codigos')); 
        $this->objNotaBiblioteca->whereIn('id',$request->input('tesina'))->update([
            'Estado'=>'Entregado'
        ]); 
        return $pdf->download('Nota-Biblioteca.pdf');
    } 

    private $objNotaBiblioteca;
    public function __construct()
    {
        $this->objNotaBiblioteca = new NotaBiblioteca();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
