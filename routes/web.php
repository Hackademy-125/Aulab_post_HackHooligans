<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
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

//TODO ROUTE PER LA HOMEPAGE
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//TODO ROUTE PER I FORM DI ACCESSO E REGISTRATI
Route::get('/access', [PublicController::class, 'access'])->name('access.form');

//TODO ROUTE PER LA PAGINA DI CREAZIONE DELL'ARTICOLO
Route::get('articles/create', [ArticleController::class, 'create'])->name('article.create');

//TODO ROUTE DI TIPO POST PER L'INVIO DEI DATI DEL FORM DELL'ARTICOLO
Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');

