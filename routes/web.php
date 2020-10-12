<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
//Creamos una ruta
Route::get('hola','holaController');
//parametro por default
Route::get('usuario/{nombre?}','UsuarioController@usuariounparametro')->name('usuarionombre');
//acceder al controlador
/** 
 * Route::get('usuario/{nombre?}',function($nombre='Invitado'){
    return 'usuario '. $nombre;
})->name('usuarionombre');
 * 
*/

Route::get('usuario/{nombre?}/comentario/{comentarioid}','UsuarioController@usuariodosparametros');

//la url es alfanumerica
Route::get('user/{nombre}','usuario\UserController@user')->where('nombre','[A-Za-z]+'); //solo se va a la ruta si es de letras

Route::get('user1/{id}','usuario\UserController@user1')->where('id','[0-9]+');//va a la ruta si el valor es alfanumerico

//va al valor si es alfanumerico y letras
Route::get('user2/{id}/{nombre}','usuario\UserController@user2')->where(
    [
        'id'=>'[0-9]+',
        'nombre'=>'[A-Za-z]+'//el nombre solo recibe letras
    ]
    );
//metodo que se pone a cada url
Route::get('pruebas',function(){
    return 'Pagina de pruebas';
})->name('pruebaroute');//url especifica acceder

Route::get('redirigirpruebas',function(){
    return redirect()->route('pruebaroute');//me va a dirreccionar a pruebas
});


Route::get('redirigirprueba2',function(){
    //rediricionar a esta ruta
    return redirect()->route('usuarionombre',['nombre'=>'David']);//me va a dirreccionar a pruebas
});

//redireccion simple
Route::redirect('/pruebas','/usuario',301);

Route::post('alumnos',function(){
    return view('welcome');
});

Route::resource('varios','variosmetodosrecursos');
//ruta que va a mostrar dos funciones
Route::resource('varios1','variosmetodosrecursos')->only(['index','show']);
//rutas que no esten
Route::resource('varios2','variosmetodosrecursos')->except(['create','store','update','destroy']);

Route::resource('varios3','variosmetodosrecursos')->only(['index','show'])->names(['index'=> 'varios.inicio']);//cambiamos el nombre de la ruta por otro