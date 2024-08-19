<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DigestoController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [Dashboard::class,'inicio'])->name('inicio');
Route::get('/bloques', [Dashboard::class,'bloques'])->name('bloques');
Route::get('/comisiones', [Dashboard::class,'comisiones'])->name('comisiones');
Route::get('/turismo', [Dashboard::class,'turismo'])->name('turismo');
Route::get('/digestos', [Dashboard::class,'digestos'])->name('digestos');
Route::get('/telefonos', [Dashboard::class,'telefonos'])->name('telefonos');
Route::get('/autoridades', [Dashboard::class,'autoridades'])->name('autoridades');
Route::get('/servicio', [Dashboard::class,'servicio'])->name('servicio');
Route::get('/noticias', [Dashboard::class,'noticias'])->name('noticias');
Route::get('/contacto', [Dashboard::class,'contacto'])->name('contacto');
Route::get('/noticiadetalle', [Dashboard::class,'noticiadetalle'])->name('noticiadetalle');
Route::get('/admin', function () {
    return Inertia::render('Auth/Login');
})->name('admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::resource('/noticia',NoticiaController::class);
    Route::resource('/digesto',DigestoController::class);
});
