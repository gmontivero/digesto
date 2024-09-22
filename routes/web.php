<?php

use Inertia\Inertia;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\DigestoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ComisionController;
use App\Http\Controllers\AutoridadController;
use App\Http\Controllers\ConfiguracionController;



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
Route::post('/noticiadetalle', [Dashboard::class,'noticiadetalle'])->name('noticiadetalle');
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
    Route::resource('/autoridad',AutoridadController::class);
    Route::resource('/cargo',CargoController::class);
    Route::resource('/comision',ComisionController::class);
    Route::resource('/bloque',BloqueController::class);
    Route::resource('/configuracion',ConfiguracionController::class);
});


// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
	Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});
