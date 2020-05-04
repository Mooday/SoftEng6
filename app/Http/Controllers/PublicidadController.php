<?php

namespace App\Http\Controllers;

use App\Anuncio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PublicidadController extends Controller
{
    public function index()
    {
        $today=date('Y-m-d');
        /*dd($today);*/
        /*$anuncios= Anuncio::where('start_date', '>=', date('Y-m-d'))
            ->where('end_date', '<=', date('Y-m-d'))
            ->get();*/

        /*$anuncios=Anuncio::select('*')
            ->whereStartDate(date('Y-m-d'), '>=')
            ->whereEndDate(date('Y-m-d'), '<=')
            ->get();*/

        $anuncios=Anuncio::select('*')
            ->whereDate('start_date','<=',date('Y-m-d'))
            ->whereDate('end_date', '>=',date('Y-m-d'))
            ->get();

        /*dd($anuncios);*/
        return view('testing', compact('anuncios'));
    }
}
