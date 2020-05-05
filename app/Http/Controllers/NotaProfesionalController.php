<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Autoridad;
use App\anteproyecto;
use Carbon\Carbon;

class NotaProfesionalController extends Controller
{
    //
    function imprimir($id)
    {
        $coordinad=Autoridad::where('cargo','Coordinador')->first();
        $vicedecan=Autoridad::where('cargo','Vicedecana Académica')->first();
        $antess=anteproyecto::where('id',$id)->first();

        $date = Carbon::now()->locale('es_ES');
        $dia = $date->isoformat('D');
        $mes = $date->isoformat('MMMM');
        $año = $date->isoformat('Y'); 
        $fechas = $dia.' de '.$mes.' de '.$año;
        $pdf = \PDF::loadview('pdfProfesional', compact('antess','coordinad','vicedecan','fechas'));
        return $pdf->stream('anteproyecto1.pdf');
        
    }
}
