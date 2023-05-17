<?php

use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordatorioController;
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

Route::resource("/notas", NotaController::class)->middleware('auth');
Route::redirect('nota', 'notas');
Route::get('/notas', [NotaController::class, 'index'])->name('notas.index')->middleware('auth');;

Route::resource("/recordatorios", RecordatorioController::class)->middleware('auth');
Route::redirect('recordatorio', 'recordatorios');
Route::get('/recordatorios', [RecordatorioController::class, 'index'])->name('recordatorios.index')->middleware('auth');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
