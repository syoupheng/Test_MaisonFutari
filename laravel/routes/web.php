<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/place/{id_etabl}', [App\Http\Controllers\EtablissementController::class, 'display_etabl'])->name('display_etabl');

Route::middleware('auth')->group(function () {
    Route::get('/ajout-etablissement', [App\Http\Controllers\EtablissementController::class, 'display_form'])->name('ajout-etabl-form');
    Route::post('/ajout-etablissement/submit', [App\Http\Controllers\EtablissementController::class, 'create_etablissement'])->name('create-etabl');
    Route::post('/create-comm', [App\Http\Controllers\CommentaireController::class, 'display_form_comm'])->name('create-comm-form');
    Route::post('/create-comm/submit', [App\Http\Controllers\CommentaireController::class, 'create_comm'])->name('create-comm');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::delete('/place/{id_etabl}/delete', [App\Http\Controllers\EtablissementController::class, 'delete_etabl'])->name('delete_etabl')->middleware(['auth', 'admin']);
    Route::delete('/comment/{id_comm}/delete', [App\Http\Controllers\CommentaireController::class, 'delete_comm'])->name('delete-comm')->middleware(['auth', 'admin']);
});