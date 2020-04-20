<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Autoridad;
use App\anteproyecto;
use Carbon\Carbon;

class PdfController extends Controller
{
    //
    function imprimir($id)
    {
        $coordina=Autoridad::where('cargo','Coordinador')->first();
        $vicedeca=Autoridad::where('cargo','Vicedecana Académica')->first();
        $antes=anteproyecto::where('id',$id)->first();

        $date = Carbon::now()->locale('es_ES');
        $dia = $date->isoformat('D');
        $mes = $date->isoformat('MMMM');
        $año = $date->isoformat('Y'); 
        $fecha = $dia.' de '.$mes.' de '.$año;
        $pdf = \PDF::loadview('pdf', compact('antes','coordina','vicedeca','fecha'));
        return $pdf->stream('anteproyecto.pdf');
        
    }
}
