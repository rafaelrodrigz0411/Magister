<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuldingController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\EquipoController;
use App\Models\DevelopmentUnit;
use App\Http\Controllers\ProjectController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('buldings', BuldingController::class);
Route::resource('employees',EmployeeController::class);
Route::resource('clients',ClientController::class);
Route::resource('unidades',UnidadeController::class);
Route::resource('equipos', EquipoController::class);
Route::resource('projects',ProjectController::class);
