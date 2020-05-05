<?php

namespace App\Http\Controllers\Admin;

use App\Anuncio;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
/*use Intervention\Image\Facades\Image;*/

use Illuminate\Support\Facades\Gate;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use DB;
use Image;


class AnunciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios= Anuncio::all();
        return view('contents.admin.anuncios.anuncios_list', compact('anuncios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.admin.anuncios.anuncios_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        /*$date=Carbon::createFromFormat('d-m-Y', '29-3-2020');*/

        $this->validate($request,[
            'title'=>'max:255',
            'type'=>'max:255',
            'description'=>'max:255',
            'start_date'=>'max:255',
            'end_date'=>'max:255',
            'image'=>'max:5000',
        ]);


        /*$start_date=Carbon::createFromFormat('d/m/Y', $request['start_date']);
        $end_date=Carbon::createFromFormat('d/m/Y', $request['end_date']);*/


        if($request->hasFile('image')) {

            $image = $request->file('image');

            $filename = time() . '.' . $image->getClientOriginalExtension();

            Image::make($image)->save(public_path('uploads/anuncios/' . $filename));

        }

        Anuncio::create([
            'title'=>$request['title'],
            'type'=>$request['type'],
            'description'=>$request['description'],
            'start_date'=>$request['start_date'],
            'end_date'=>$request['end_date'],
            'image'=>$filename,
        ]);

        return redirect('/admin/anuncio')->with('status','Nuevo Anuncio creado correctamente!.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show(Anuncio $anuncio)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function edit(Anuncio $anuncio)
    {
        if(Gate::denies('manage-users')){
            return redirect(route('admin.anuncio.index'));
        }

        return view('contents.admin.anuncios.anuncios_edit')->with([
            'anuncios'=>$anuncio,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anuncio $anuncio)
    {

        if($request->hasFile('image')) {

            $image = $request->file('image');

            $filename = time() . '.' . $image->getClientOriginalExtension();

            $file = public_path('uploads/anuncios/' . $anuncio->image);

            if(File::exists($file)) {
                unlink($file);
            }

            Image::make($image)->save(public_path('uploads/anuncios/' . $filename));

            $anuncio->image = $filename;

        }


        if(isset($request->title)){
            $anuncio->title = $request->title;
        }
        if(isset($request->type)) {
            $anuncio->type = $request->type;
        }
        if(isset($request->description)) {
            $anuncio->description = $request->description;
        }
        if(isset($request->start_date)){
            $anuncio->start_date = $request->start_date;
        }
        if(isset($request->end_date)){
            $anuncio->end_date = $request->end_date;
        }

        $anuncio->save();

        return redirect('/admin/anuncio')->with('status','El anuncio fue actualizado correctamente!.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Anuncio $anuncio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anuncio $anuncio)
    {

        $dump = Anuncio::find($anuncio)->first;

        if($dump->image !== 'default_anuncio.jpg'){

            $file = public_path('uploads/anuncios/' . $dump->image);

            if(File::exists($file)){
                unlink($file);
            }
        }

        $dump->delete();

        return redirect('/admin/anuncio')->with('status','El Anuncio fue eliminado correctamente!.');
    }
}
