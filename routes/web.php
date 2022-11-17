<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajesController;
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
    return view('inicio.index');
})->name('inicio');

Route::get('/Nosotros', function () {return view('nosotros.index');})->name('nosotros');
Route::get('/Servicios', function (){return view('servicios.index');})->name('servicios');
Route::get('/Contacto', function (){return view('contacto.index');})->name('contacto');
Route::get('/Asesoria Legal', function (){return view('legal.index');})->name('legales');
Route::get('/Libro-Reclamaciones', function (){return view('contacto.reclamos');})->name('reclamos');

Route::post('Contacto',[MensajesController::class, 'store'])->name('Contacto.store');
Route::get('Libro-Reclamaciones',[MensajesController::class, 'index'])->name('Reclamo.index');
Route::post('Libro-Reclamaciones',[MensajesController::class, 'reclamo'])->name('Reclamo.store');
Route::post('/',[MensajesController::class, 'msg'])->name('home.msg');


Route::get('provincias/{id}', [MensajesController::class, 'provincias'])->name('provincias');
Route::get('distritos/{id}', [MensajesController::class, 'distritos'])->name('distritos');
Route::get('Consultas/{consulta}',[MensajesController::class, 'generatePDF'])->name('generatePDF');
