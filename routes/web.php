<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;
use App\Http\Livewire\MisPostulaciones;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\EstudiosController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\CartaPresentacionController;
use App\Http\Controllers\PostulacionController;
use App\Http\Controllers\ExperienciasController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\DatosPersonalesController;
use App\Http\Controllers\SituacionLaboralController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', [VacanteController::class, 'index'])->middleware(['auth', 'verified', 'rol.reclutador'])->name('vacantes.index');
Route::get('/vacantes/create', [VacanteController::class, 'create'])->middleware(['auth', 'verified'])->name('vacantes.create');
Route::get('/vacantes/{vacante}/edit', [VacanteController::class, 'edit'])->middleware(['auth', 'verified'])->name('vacantes.edit');
Route::get('/vacantes/{vacante}', [VacanteController::class, 'show'])->name('vacantes.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/mis-postulaciones', [PostulacionController::class, 'index'])->name('mis_postulaciones.index');
});

Route::get('/candidatos/{vacante}', [CandidatoController::class, 'index'])->middleware(['auth', 'verified', 'rol.reclutador'])->name('candidatos.index');
Route::get('/candidatos/usuario/{candidato}', [CandidatoController::class, 'show'])->name('candidatos.show');

Route::get('/cv', [DatosPersonalesController::class, 'index'])->middleware(['auth', 'redirect.to.edit', 'verified', 'rol.usuario'])->name('datos_personales.index');
Route::get('/datospersonales/create', [DatosPersonalesController::class, 'create'])->middleware(['auth', 'verified', 'rol.usuario', 'no.crear.datos.personales' ])->name('datos_personales.create');
Route::get('/datospersonales/{datopersonal}/edit', [DatosPersonalesController::class, 'edit'])->middleware(['auth', 'verified', 'rol.usuario'])->name('datos_personales.edit');

Route::get('/estudios/create', [EstudiosController::class, 'create'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('estudios.create');
Route::get('/estudios/{estudio}/edit', [EstudiosController::class, 'edit'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('estudios.edit');
Route::get('/estudios/index', [EstudiosController::class, 'index'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('estudios.index');

Route::get('/experiencias/create', [ExperienciasController::class, 'create'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('experiencias.create');
Route::get('/experiencias/{experiencia}/edit', [ExperienciasController::class, 'edit'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('experiencias.edit');
Route::get('/experiencias/index', [ExperienciasController::class, 'index'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('experiencias.index');

Route::get('/situacionlaboral/create', [SituacionLaboralController::class, 'create'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('situacion_laboral.create');
Route::get('/situacionlaboral/{situacionlaboral}/edit', [SituacionLaboralController::class, 'edit'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('situacion_laboral.edit');
Route::get('/situacionlaboral/index', [SituacionLaboralController::class, 'index'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('situacion_laboral.index');

Route::get('/cartapresentacion/index', [CartaPresentacionController::class, 'index'])->middleware(['auth', 'verified', 'rol.usuario', 'redirect.to.edit.card' ])->name('carta_presentacion.index');
Route::get('/cartapresentacion/create', [CartaPresentacionController::class, 'create'])->middleware(['auth', 'verified', 'rol.usuario', 'no.crear.carta.presentacion'  ])->name('carta_presentacion.create');
Route::get('/cartapresentacion/{cartapresentacion}/edit', [CartaPresentacionController::class, 'edit'])->middleware(['auth', 'verified', 'rol.usuario' ])->name('carta_presentacion.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//aqui notificaciones
Route::get('/notificaciones', NotificacionController::class)->middleware(['auth', 'verified', 'rol.reclutador'])->name('notificaciones');

require __DIR__.'/auth.php';
