<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ContactUsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);
Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create']); //muestra el formulario para crear el post
Route::post('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'store']); //guarda el post creado en la database
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); //muestra el formulario para edición del post
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']); //envía la publicación editada a la base de datos
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); //elimina el post de la base de datos

Route::get('/portfolio', [\App\Http\Controllers\HomeController::class, 'portfolio']);
Route::get('/adminblog', [\App\Http\Controllers\HomeController::class, 'admin']);
Route::get('contact-us',  [\App\Http\Controllers\ContactUsController::class, 'contactUs']);


Route::post('contact-us',[
    'as'=>'contactus.store',
    'uses'=>'\App\Http\Controllers\ContactUsController@contactUsPost'
]);


