<?php

namespace App\Exports;

use App\Fechassustentaciones;
use App\Estudiante;
use App\Carrera;
use App\Anteproyecto;
use App\Fechassustentaciones_profesors;

//use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FechassustentacionExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $fechassustentacion= Fechassustentaciones::where('estate', 'Asignada')->get();
        $carreras = Carrera::all();
        $proyectos =  Anteproyecto::all();
        return view('contents.admin.fechassustentacion.informefechassustentacionactivas', [
            'fechassustentacion' => $fechassustentacion,
            'carreras' => $carreras,
            'proyectos' => $proyectos
        ]);
    }

   public function headings(): array
    {
        return [
            'Identificación',
            'Nombre Estudiante 1',
            'Nombre Estudiante 2',
            'Proyecto',
            'Carrera',
            'Fecha Solicitud',
            'Fecha Última modificación',
            'Estado Actual',
            'Fecha Sustentación',

        ];
    }


}
