<?php

use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
  return ('Bonjour Laravel');
});

Route::get('accueil' , function() {
    return view('accueil');
});

Route::get('/test',[TestController::class , 'index']);
Route::get('/show_test',[TestController::class , 'show']);
Route::get('/home',[TestController::class , 'show']);


Route::get('/bonjour', function (){
  $nom='mouad';
  return ('Bonjour ' .$nom);
});

Route::get('greet/{prenom}' , [TestController::class , 'greet']);
Route::get('profile/{id}/{age}' , [TestController::class , 'profile']);
Route::get('article/{id}' , [TestController::class , 'showArticle']);





