<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;


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

Route::get('/', function() {
    return view('welcome');
})->name('home');

//Rotta per leggere i post
Route::get('/blog/posts/index', [PostController::class,'index'])->name('posts.index');

//Rotta per leggere un singolo post con metodo get
Route::get('/blog/post/{post}', [PostController::class,'show'])->name('posts.show');

//Rotta per creare i posts

//get per vedere il form per salvare il post
Route::get('/blog/posts/create', [PostController::class,'create'])->name('posts.create');
//post per salvare il post
Route::post('/blog/post/store', [PostController::class,'store'])->name('posts.store');

//rotta per aggiornarli
//leggere i dati del singolo post che voglio aggiornare -> get con un form dentro
Route::get('/blog/post/{post}/edit', [PostController::class,'edit'])->name('posts.edit');

//rotta put per poter aggiornare il dato
Route::put('/blog/post/{post}/update', [PostController::class,'update'])->name('posts.update');

//rotta per eliminarli
//post -> elimino il dato dal database 
Route::delete('/blog/post/{post}/delete', [PostController::class,'destroy'])->name('posts.destroy');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', function() {
    return view ('about-us');
})->name('chi-siamo');

Route::get('/contact', [ContactController::class, 'contactUs'])->name('contatti');

Route::post('/contact_save', [ContactController::class, 'contactSave'])->name('contact_save');
