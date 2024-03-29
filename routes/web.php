<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\WriterController;

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

//TODO ROUTE PER LA PAGINA INDEX DI TUTTI GLI ARTICOLI
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

//TODO ROUTE PER IL DETTAGLIO DELL'ARTICOLO
Route::get('/article/show/{article:slug}', [ArticleController::class, 'show'])->name('article.show');

//TODO ROUTE PER TUTTI GLI ARTICOLI DI UNA CATEGORIA SPECIFICA
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');


//TODO ROUTE PER TUTTI GLI ARTICOLI DI UN USER SPECIFICO
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');

// TODO ROUTE PER IL RUOLO
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');

// TODO ROUTE PER INVIO CANDIDATURA
Route::post('/careers/submit', [PublicController::class, 'careersSubmit'])->name('careers.submit');

//TODO ROUTE PER LA CREAZIONE DI ABOUT US
Route::get('/about-us', [PublicController::class, 'aboutUs'])->name('aboutUs');

//TODO ROUTE PER GRUPPO DI GESTIONE RUOLI 
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::patch('/admin/{user}/set-admin', [AdminController::class, 'setAdmin'])->name('admin.setAdmin');
    Route::patch('/admin/{user}/set-revisor', [AdminController::class, 'setRevisor'])->name('admin.setRevisor');
    Route::patch('/admin/{user}/set-writer', [AdminController::class, 'setWriter'])->name('admin.setWriter');
    // 
    Route::put('/admin/edit/{tag}/tag' , [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/{tag}/tag' , [AdminController::class, 'deleteTag'])->name('admin.deleteTag');
    //
    Route::put('/admin/edit/{category}/category' , [AdminController::class, 'editCategory'])->name('admin.editCategory');
    Route::delete('/admin/delete/{category}/category' , [AdminController::class, 'deleteCategory'])->name('admin.deleteCategory');
    Route::post('/admin/category/store', [AdminController::class, 'storeCategory'])->name('admin.storeCategory');



});

// TODO ROUTE GESTIONE REVISIONE ARTICOLI
Route::middleware('revisor')->group(function () {
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    Route::post('/revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    Route::post('/revisor/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    Route::post('/revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});

// TODO ROUTE GESTIONE ARTICOLI
Route::middleware('writer')->group(function () {
    //TODO ROUTE PER LA PAGINA DI CREAZIONE DELL'ARTICOLO
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');

    //TODO ROUTE DI TIPO POST PER L'INVIO DEI DATI DEL FORM DELL'ARTICOLO
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/writer/dashboard', [WriterController::class, 'dashboard'])->name('writer.dashboard');
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::put('/article/{article}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::delete('/article/{article}/destroy', [ArticleController::class, 'destroy'])->name('article.destroy');
});

//TODO ROUTE PER LA RICERCA ARTICOLI
Route::get('/article/search', [ArticleController::class, 'articleSearch'])->name('article.search');

