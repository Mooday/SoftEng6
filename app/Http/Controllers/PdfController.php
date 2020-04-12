<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Autoridad;

class PdfController extends Controller
{
    //
    function imprimir()
    {
        $cargos=Autoridad::all('cargo');
        $pdf = \PDF::loadview('pdf', compact('cargos'));
        return $pdf->download('primerpdf.pdf');
    }
}
