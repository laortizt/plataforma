<?php

// use App\Http\Controllers\ClienteController;
// use App\Http\Controllers\ProfesionalController;
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
    return view('inicio');
});


Route::resource('cliente',ClienteController::class);
Route::resource('profesional',ProfesionalController::class);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
