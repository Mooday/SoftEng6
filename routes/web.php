<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Solicitud6creditosController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('registroestudiante', function(){
    //return view ('hola');
//});
Route::get('imprimir-pdf/{id}/pdf','PdfController@imprimir')->name('imprimir');

Route::resource('registroestudiante','AnteproyectoController');

Route::resource('anteproyectosregistrados', 'EjemploController');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function (){

    Route::resource('/users', 'UsersController', ['except'=>['create', 'store']]);

    Route::resource('/fechassustentaciones', 'FechassustentacionesController', ['except'=>['create', 'store']]);

    Route::resource('/anuncio', 'AnunciosController');

});

Route::get('publicidad', 'PublicidadController@index');

Route::namespace('User')->prefix('user')->name('user.')->middleware('can:is-user')->group(function () {
    Route::resource('/fechassustentaciones', 'FechassustentacionesController', ['except' => ['destroy']]);
});

Route::get('/mostrarfechassustentacionactivas', 'Admin\FechassustentacionesController@mostrarfechassustentacionactivas')->name('informefechassustentacion');
Route::get('/mostrarfechassustentacionactivasestudiante', 'User\FechassustentacionesController@mostrarfechassustentacionactivas')->name('informefechassustentacionestudiante');



Route::get('/testing', function(){
   return view('testing');
});

Route::get('/biblioteca','BibliotecaController@index');//Coordinador accede a anteproyectos finalizados
Route::post('/Nota a Biblioteca','BibliotecaController@exportar')->name('Nota_a_Biblioteca');//Ruta para descargar el pdf

Route::resource('profile', 'EstudianteController');//Estudiante accede a la vista del perfil de estudiante
Route::resource('solicitud/asesor','NotaAsesorController');//Manejo de solicitudes de profesor asesor


Route::get('solicitud/empresa', 'RegistroController@solicitud_empresa');//Estudiante ingresa a la solicitud de empresa
route::get('listado_profesores', 'RegistroController@profesores');//Estudiante accede a la lista de profesores
Route::get('asesor_prof/{id}', 'RegistroController@mostrar_profesor_est');//Estudiante devuelve el profesor elegido a la solicitud
Route::post('guardar/empresa', 'RegistroController@guardar_empresa');//Estudiante guarda solicitud de asesor de empresa

Route::get('lista_notas','NotaAsesorController@lista_notas')->middleware('can:manage-users');//Coordinador accede a las solicitudes de profesor asesor
Route::get('lista_empresas', 'RegistroController@lista_empresas')->middleware('can:manage-users');//Coordinador muestra la lista de solicitudes de empresa
Route::get('asesor_emp/{id}', 'RegistroController@registro_empresa')->middleware('can:manage-users');//Coordinador elige el registro de la solicitud de empresa
Route::post('empresapdf', 'RegistroController@carta_empresa')->middleware('can:manage-users');//Coordinador actualiza y muestra PDF de solicitud de asesor de empresa
Route::get('borrar_nota_empresa/{id}', 'RegistroController@borrar_nota_empresa')->middleware('can:manage-users');//Coordinador borra solicitud de asesor de empresa

Route::get('lista_creditos','Solicitud6creditosController@index')->name('creditos/lista_creditos');//muestra la pagina de solicitud de 6 creditos
Route::post('lista_creditos/guardar','Solicitud6creditosController@store')->name('store');//gurdar solicitud de 6 creditos
Route::get('lista_creditos/editar/{id}','Solicitud6creditosController@edit')->name('editar');//muestra la vista editar solicitud 6 creditos
Route::put('lista_creditos/update/{id}','Solicitud6creditosController@update')->name('update');//actualizar solicitud 6 creditos
//Rutas Autoridades
Route::get('autoridades', 'AutoridadController@index');//Muestra la lista de autoridades
Route::get('autoridades/registrar-autoridad', 'AutoridadController@create');//Formulario para crear autoridades
Route::post('autoridades/agregar', 'AutoridadController@store');//agregar autoridades
Route::get('autoridades/editar/{id}', 'AutoridadController@edit');//Editar autoridades
Route::patch('autoridades/{id}', 'AutoridadController@update');//Actualizar autoridades
//Rutas Profesores
Route::get('profesores', 'ProfesorController@index');//Muestra la lista de profesores
Route::get('profesores/registrar-profesor', 'ProfesorController@create');//Formulario para crear profesores
Route::post('profesores/agregar', 'ProfesorController@store');//agregar profesores
Route::get('profesores/editar/{id}', 'ProfesorController@edit');//Editar profesores
Route::patch('profesores/{id}', 'ProfesorController@update');//Actualizar profesores

Route::resource('registro_eventos', 'registro_eventosController');//Muestra los Eventos Ocurridos



// rutas de actividades de extencion
Route::resource('actividad','ActividadesController');
Route::get('/show','ActividadesController@index');
Route::get('/resusita','ActividadesController@resusita')->name('resusita');
Route::get('/todo','ActividadesController@index')->name('todo');

Route::post('almacenaactividad', 'ActividadesController@store');
route::get('/editaractividad/{id}', 'ActividadesController@edit')->name('editaractividad');
route::put('/updateactividad/{id}', 'ActividadesController@update')->name('updateactividad');
route::get('/eliminaactividad/{id}', 'ActividadesController@delete')->name('eliminaactividad');
route::get('/eliminasiempre/{id}', 'ActividadesController@destroy')->name('eliminasiempre');

route::get('/restaurar/{id}', 'ActividadesController@restaurar')->name('restaurar');
Route::post('buscaactividad', 'ActividadesController@buscaactividad');
//actividades 2
Route::resource('actividad2','ActividadesController2');
Route::get('/show2','ActividadesController2@index');
Route::get('/resusita2','ActividadesController2@resusita2')->name('resusita2');
Route::get('/todo2','ActividadesController2@index')->name('todo2');

Route::post('almacenaactividad2', 'ActividadesController2@store');
route::get('/editaractividad2/{id}', 'ActividadesController2@edit')->name('editaractividad2');
route::put('/updateactividad2/{id}', 'ActividadesController2@update')->name('updateactividad2');
route::get('/eliminaactividad2/{id}', 'ActividadesController2@delete')->name('eliminaactividad2');
route::get('/eliminasiempre2/{id}', 'ActividadesController2@destroy')->name('eliminasiempre2');

route::get('/restaurar2/{id}', 'ActividadesController2@restaurar2')->name('restaurar2');
Route::post('buscaactividad2', 'ActividadesController2@buscaactividad2');
//actividades 3
Route::resource('actividad3','ActividadesController3');
Route::get('/show3','ActividadesController3@index');
Route::get('/resusita3','ActividadesController3@resusita3')->name('resusita3');
Route::get('/todo3','ActividadesController3@index')->name('todo3');

Route::post('almacenaactividad3', 'ActividadesController3@store');
route::get('/editaractividad3/{id}', 'ActividadesController3@edit')->name('editaractividad3');
route::put('/updateactividad3/{id}', 'ActividadesController3@update')->name('updateactividad3');
route::get('/eliminaactividad3/{id}', 'ActividadesController3@delete')->name('eliminaactividad3');
route::get('/eliminasiempre3/{id}', 'ActividadesController3@destroy')->name('eliminasiempre3');

//ruta de Nota Practica Profesional
Route::get('imprimir-pdff/{id}/pdf','NotaProfesionalController@imprimir')->name('imprimir');

//fin de rutas de actividades de extencion
//Rutas Notas a Jurados
Route::get('notas/jurado_porasignar', 'Fechassustentaciones_profesorsController@create');//Muestra la lista de sustentaciones con fecha
Route::get('notas/jurado_asignar/{id}', 'Fechassustentaciones_profesorsController@edit');//Asigna jurado a la sustentación
Route::patch('notas/jurado/{id}', 'Fechassustentaciones_profesorsController@update');//Actualizar Jurados
Route::get('notas/imprimirnota', 'Fechassustentaciones_profesorsController@index');//Listado de cartas por imprimir para jurado a la sustentación
Route::get('imprimir-pdf/jurado/{id}', 'PdfController@jurado');//Impresión de nota para jurado