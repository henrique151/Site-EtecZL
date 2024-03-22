<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/cursos', function () {
    return view('cursos');
});

Route::get('/cursosAdm', function () {
    return view('cursos.cursosAdm');
});

Route::get('/cursosAds', function () {
    return view('cursos.cursosAds');
});

Route::get('/cursosCont', function () {
    return view('cursos.cursosCont');
});

Route::get('/cursosLog', function () {
    return view('cursos.cursosLog');
});

Route::get('/cursosRH', function () {
    return view('cursos.cursosRH');
});

Route::get('/cursosSJ', function () {
    return view('cursos.cursosSJ');
});

Route::get('/departamentos', function () {
    return view('departamentos');
});

Route::get('/instituicao', function () {
    return view('instituicao');
});

Route::get('/oportunidades', function () {
    return view('oportunidades');
});

Route::get('/vestibulinho', function () {
    return view('vestibulinho');
});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




