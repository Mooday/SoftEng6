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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
//Route::get('registroestudiante', function(){
    //return view ('hola');
//});
Route::get('/imprimir-pdf','PdfController@imprimir')->name('imprimir');

Route::resource('registroestudiante','AnteproyectoController'); 

Route::resource('anteproyectosregistrados', 'EjemploController');

=======
>>>>>>> master
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function (){

    Route::resource('/users', 'UsersController', ['except'=>['create', 'store']]);

    Route::resource('/anuncio', 'AnunciosController');

});

Route::get('/testing', function(){
   return view('testing');
});


Route::resource('profile', 'EstudianteController');//Estudiante accede a la vista del perfil de estudiante
Route::resource('solicitud/asesor','NotaAsesorController');//Manejo de solicitudes de profesor asesor

Route::get('solicitud/empresa', 'RegistroController@solicitud_empresa');//Estudiante ingresa a la solicitud de empresa
route::get('profesores', 'RegistroController@profesores');//Estudiante accede a la lista de profesores 
Route::get('asesor_prof/{id}', 'RegistroController@mostrar_profesor_est');//Estudiante devuelve el profesor elegido a la solicitud 
Route::post('guardar/empresa', 'RegistroController@guardar_empresa');//Estudiante guarda solicitud de asesor de empresa

Route::get('lista_notas','NotaAsesorController@lista_notas')->middleware('can:manage-users');//Coordinador accede a las solicitudes de profesor asesor
Route::get('lista_empresas', 'RegistroController@lista_empresas')->middleware('can:manage-users');//Coordinador muestra la lista de solicitudes de empresa
Route::get('asesor_emp/{id}', 'RegistroController@registro_empresa')->middleware('can:manage-users');//Coordinador elige el registro de la solicitud de empresa
Route::post('empresapdf', 'RegistroController@carta_empresa')->middleware('can:manage-users');//Coordinador actualiza y muestra PDF de solicitud de asesor de empresa
Route::get('borrar_nota_empresa/{id}', 'RegistroController@borrar_nota_empresa')->middleware('can:manage-users');//Coordinador borra solicitud de asesor de empresa