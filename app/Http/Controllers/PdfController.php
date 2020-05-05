<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Autoridad;
use App\Anteproyecto;
use App\Fechassustentaciones;
use App\Fechassustentaciones_profesors;
use App\Profesor;
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

    function jurado($id)
    {
         
        $data=Fechassustentaciones_profesors::where('id',$id)->first();
        $profesor1=Profesor::where('id', $data->id_jurado1)->first();
        $profesor2=Profesor::where('id', $data->id_jurado2)->first();
        $coordina=Autoridad::where('status',1)
                ->where('cargo', '=', 'Coordinador')
                ->get();
        $anteproyecto = Fechassustentaciones::select('anteproyectos.Nombre_estudiante1','anteproyectos.Carrera','anteproyectos.Nombre_anteproyecto','Fechassustentaciones.sustentationdate')
                ->join('fechassustentaciones_profesors', 'fechassustentaciones_profesors.id_fechassustentaciones', '=', 'Fechassustentaciones.id')
                ->join('anteproyectos', 'fechassustentaciones.id_anteproyecto', '=', 'anteproyectos.id')
                ->where('fechassustentaciones_profesors.id', '=', $id)
                ->get();
        //dd(($coordina)->toarray());
        
        $date = Carbon::now()->locale('es_ES');
        $dia = $date->isoformat('D');
        $mes = $date->isoformat('MMMM');
        $año = $date->isoformat('Y'); 
        $fecha = $dia.' de '.$mes.' de '.$año;
        $pdf1 = \PDF::loadview('notas.pdf_jurado1',compact('profesor1','profesor2','coordina','data','fecha','anteproyecto'));
        foreach($anteproyecto as $ante)
        return $pdf1->download('NotaJurado-'.$ante->Nombre_estudiante1.'.pdf');
    }
}
