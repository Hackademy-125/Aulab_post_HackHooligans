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
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');

//TODO ROUTE DI TIPO POST PER L'INVIO DEI DATI DEL FORM DELL'ARTICOLO
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

//TODO ROUTE PER LA PAGINA INDEX DI TUTTI GLI ARTICOLI
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

//TODO ROUTE PER IL DETTAGLIO DELL'ARTICOLO
Route::get('/article/show/{article}' , [ArticleController::class, 'show'])->name('article.show');

//TODO ROUTE PER TUTTI GLI ARTICOLI DI UNA CATEGORIA SPECIFICA
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');

//TODO ROUTE PER TUTTI GLI ARTICOLI DI UN USER SPECIFICO
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');

