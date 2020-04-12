<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;
use App\Carrera;
use App\Profesor;
use App\Empresa;
use App\Autoridad;
use Barryvdh\DomPDF\Facade as PDF;

use Carbon\Carbon;

class RegistroController extends Controller
{
    //Método que utiliza el estudiante para ver el listado de profesores
    public function profesores()
    { 
        $profesores = Profesor::paginate(10);
        return view('Asesor/lista_profesores',compact('profesores'));
    }


//Método que devuelve el profesor elegido a la vista de solicitud de profesor asesor
    public function mostrar_profesor_est($id_prof)
    {
        $profesor= Profesor::where('id', '=', $id_prof)->first();
        $estudiante = Estudiante::where('id', '=', Auth()->id())->first();
        $carrera = Carrera::join('estudiantes', 'estudiantes.id_carrera', '=', 'carreras.id')->where('estudiantes.id', '=', Auth()->id())->first(['carreras.id', 'carreras.nombre']);
        return view('Asesor/solicitud_profesor', compact(['profesor', 'estudiante', 'carrera']));
    } 


    //Método que accede a la solicitud para asesor de empresa
    public function solicitud_empresa()
    {
        $estudiante = Estudiante::where('id', '=', Auth()->id())->first();
        $carrera = Carrera::join('estudiantes', 'estudiantes.id_carrera', '=', 'carreras.id')->where('carreras.id', '=', $estudiante['id_carrera'])->first(['carreras.id', 'carreras.nombre']);
        return view('Asesor/solicitud_empresa', compact(['estudiante', 'carrera']));
    }

    //Método con el cual el estudiante crea la solicitud para asesor de empresa
    public function guardar_empresa()
    {
        $request = request()->except('_token');
        $estudiante = Estudiante::where('id', '=', Auth()->id())->first();
        $carrera = Carrera::join('estudiantes', 'estudiantes.id_carrera', '=', 'carreras.id')->where('carreras.id', '=', $estudiante['id_carrera'])->first(['carreras.id', 'carreras.nombre']);
        $nota_emp_asesor = Empresa::create(['id_estudiante' => $request['id_estudiante'], 'nombre_asesor' => $request['nombre_asesor'], 'apellido_asesor' => $request['apellido_asesor'], 'nombre_empresa' => $request['nombre_empresa']]);
        $id_last = Empresa::max('id');
        $nota_emp_asesor = Empresa::where('id', $id_last)->first();
        return view('Asesor/solicitud_empresa', compact(['estudiante', 'carrera', 'nota_emp_asesor']));
    }


    //Método con el que el coordinador accede a la lista de solicitudes para asesor de empresa
    public function lista_empresas()
    {
        $estudiantes = Estudiante::all();
        $notas_empresa = Empresa::orderby('created_at', 'DESC')->paginate(10);
        return view('Asesor/lista_notas_empresa', compact('notas_empresa', 'estudiantes'));
    }


    //Método con el que el coordinador muestra los datos de una solicitud específica
    public function registro_empresa($id)
    {
        $nota_emp_asesor = Empresa::where('id', '=', $id)->first();
        $estudiante = Estudiante::where('id', '=', $nota_emp_asesor['id_estudiante'])->first();
        $carrera = carrera::where('id', '=', $estudiante['id_carrera'])->first();
        return view('Asesor/nota_empresa', compact(['nota_emp_asesor', 'estudiante', 'carrera']));
    }


    //Método con el cual el coordinador actualiza y genera el documento PDF de una solicitud para asesor de empresa
    public function carta_empresa()
    {
        $request = request()->except(['_token', '_method']);
        $nota_emp_asesor = Empresa::where('id', '=', $request['id'])->first();
        $nota_emp_asesor['codigo'] = $request['codigo'];
        $nota_emp_asesor->save();
        $estudiante = Estudiante::where('id', '=', $nota_emp_asesor['id_estudiante'])->first();
        $carrera = Carrera::where('id', '=', $estudiante['id_carrera'])->first();
        $coordinador = Autoridad::where('cargo', '=', 'Coordinador')->first();

        $date = Carbon::now()->locale('es_ES');
        $dia = $date->isoformat('D');
        $mes = $date->isoformat('MMMM');
        $año = $date->isoformat('Y'); 

        $pdf_empresa = PDF::loadview('Asesor/pdf_empresa', compact(['nota_emp_asesor', 'estudiante', 'carrera', 'coordinador', 'dia', 'mes', 'año']));
        return $pdf_empresa->stream('Nota_Asesor_Empresa.pdf');
    }

    //Método que utiliza el coordinador para eliminar una solicitud de asesor de empresa
    public function borrar_nota_empresa($id_nota_empresa)
    {
        $nota_empresa = Empresa::find($id_nota_empresa);
        $nota_empresa->delete();
        return redirect('lista_empresas');
    }
}
