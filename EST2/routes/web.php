<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\controBD_T;
use App\Http\Controllers\controBD_S;
use App\Http\Controllers\controBD_S2;
use App\Http\Controllers\controladorP;
use App\Http\Controllers\PDFController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user',	[HomeController::class, 'getUser']);
Route::get('/taller', [controladorP::class, 'nuevoT'])->name('NnuevoTaller');
Route::get('/servi', [controladorP::class, 'nuevoS'])->name('NuevoServicio');
Route::post('/guardarTaller', [controladorP::class, 'store'])->name('listaT.store');
Route::post('/guardarServicio', [controladorP::class, 'store'])->name('listaS.store');

Route::get('/listaT/create', [controBD_T::class, 'create'])->name('listaT.create');
Route::post('/listaT', [controBD_T::class, 'store'])->name('listaT.store');


Route::get('/listaT', [controBD_T::class, 'index'])->name('listaT.index');
Route::get('/listaT/{id}/edit', [controBD_T::class, 'edit'])->name('listaT.edit');
Route::put('/listaT/{id}', [controBD_T::class, 'update'])->name('listaT.update');

Route::get('/listaT/{id}/confirm', [controBD_T::class, 'confirm'])->name('listaT.confirm');
Route::delete('/listaT/{id}', [controBD_T::class, 'destroy'])->name('listaT.destroy');

Route::get('/listaS/create', [controBD_S::class, 'create'])->name('listaS.create');
Route::post('/listaS', [controBD_S::class, 'store'])->name('listaS.store');

Route::get('/listaS', [controBD_S::class, 'index'])->name('listaS.index');
Route::get('/listaS/{id}/edit', [controBD_S::class, 'edit'])->name('listaS.edit');
Route::put('/listaS/{id}', [controBD_S::class, 'update'])->name('listaS.update');

Route::get('/listaS/{id}/confirm', [controBD_S::class, 'confirm'])->name('listaS.confirm');
Route::delete('/listaS/{id}', [controBD_S::class, 'destroy'])->name('listaS.destroy');

Route::get('/listaS', [controBD_S2::class, 'index'])->name('listaS.index');

Route::get('/documentos', [controladorP::class, 'fDocCons'])->name('NDocCons');
Route::get('/pdf', [PDFController::class, 'PDF'])->name('descargarPDF');
Route::get('/pdf2', [PDFController::class, 'PDF2'])->name('descargarPDF2');
Route::get('/pdf3', [PDFController::class, 'PDF3'])->name('descargarPDF3');