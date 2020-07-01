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

 Route::get('/', function () {
    return view('welcome');
});
 

Route::get('modelos/{id}', 'Showcliente@get_modelos');
//Route::get('cliente/{id}', 'Showmodelos@get_cliente');


Route::get('new/modelos', function () {
        return view('pages.createModelos');
       });  
     

//Auth::routes();
/*
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    return view('pages.login');
  
})->middleware('auth');;  */

