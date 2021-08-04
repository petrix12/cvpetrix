<?php

use App\Http\Controllers\TabController;
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

Route::get('/', [TabController::class, 'welcome'])->name('welcome');

Route::get('portafolio', [TabController::class, 'portafolio'])->name('portafolio');

Route::get('servicios', [TabController::class, 'servicios'])->name('servicios');

Route::get('formacion', [TabController::class, 'formacion'])->name('formacion');

Route::get('experiencia', [TabController::class, 'experiencia'])->name('experiencia');

Route::get('contactame', [TabController::class, 'contactame'])->name('contactame');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Para probar vistas
Route::get('pruebaadminlte', function () {
    return view('layouts.demoAdminLTE');
});
