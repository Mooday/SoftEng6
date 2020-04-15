<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\registro_evento;
use Illuminate\Http\Request;

class registro_eventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $registro_eventos = registro_evento::where('Tipo_registro', 'LIKE', "%$keyword%")
                ->orWhere('Recursos_utilizados', 'LIKE', "%$keyword%")
                ->orWhere('Direccion_de_necesidades', 'LIKE', "%$keyword%")
                ->orWhere('Responsable', 'LIKE', "%$keyword%")
                ->orWhere('Correo', 'LIKE', "%$keyword%")
                ->orWhere('Telefono', 'LIKE', "%$keyword%")
                ->orWhere('Fecha_de_Inicio', 'LIKE', "%$keyword%")
                ->orWhere('Fecha_de_fin', 'LIKE', "%$keyword%")
                ->orWhere('Nombre_de_Actividad', 'LIKE', "%$keyword%")
                ->orWhere('Dirigido_a', 'LIKE', "%$keyword%")
                ->orWhere('Costo_de_Servicio', 'LIKE', "%$keyword%")
                ->orWhere('Tipo_de_Actividad', 'LIKE', "%$keyword%")
                ->orWhere('Tipo_de_Evento', 'LIKE', "%$keyword%")
                ->orWhere('Total_de_horas', 'LIKE', "%$keyword%")
                ->orWhere('Numero_de_participantes', 'LIKE', "%$keyword%")
                ->orWhere('Descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $registro_eventos = registro_evento::latest()->paginate($perPage);
        }

        return view('registro_eventos.index', compact('registro_eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('registro_eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        registro_evento::create($requestData);

        return redirect('registro_eventos')->with('flash_message', 'registro_evento added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $registro_evento = registro_evento::findOrFail($id);

        return view('registro_eventos.show', compact('registro_evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $registro_evento = registro_evento::findOrFail($id);

        return view('registro_eventos.edit', compact('registro_evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $registro_evento = registro_evento::findOrFail($id);
        $registro_evento->update($requestData);

        return redirect('registro_eventos')->with('flash_message', 'registro_evento updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        registro_evento::destroy($id);

        return redirect('registro_eventos')->with('flash_message', 'registro_evento deleted!');
    }
}
