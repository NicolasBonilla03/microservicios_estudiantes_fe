<?php

use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\EstudiantesController;
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
Route::get('/', [
    EstudiantesController::class, 'index'
])->name('index');

Route::get('/index/{id}/destroy', [
    EstudiantesController::class, 'destroy'
]);
Route::get('/', [
    EstudiantesController::class, 'index'
]);
$router->post('create', 'App\Http\Controllers\EstudiantesController@store');

Route::resource('actividades', ActividadesController::class);
Route::get('/actividades/{id}/destroy', [
    ActividadesController::class, 'destroy'
])->name('destroy.actividades');
