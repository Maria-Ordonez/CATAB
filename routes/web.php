<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquinasController;
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
    return view('auth.login');
});

// Route::get('/maquinas', function () {
//     return view('maquinas.index');
// });


// Route::get('/maquinas/create',[MaquinasController::class,'create']);

Route::resource('maquinas',MaquinasController::class)->middleware('auth');
Auth::routes();
// Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [MaquinasController::class, 'index'])->name('home');


Route::group(['middleware'=>'auth'], function (){

    Route::get('/', [MaquinasController::class, 'index'])->name('home');

});