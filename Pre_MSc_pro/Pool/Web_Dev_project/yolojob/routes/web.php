<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index']) -> name('accueil');
Route::get('/offres/creer', [PostController::class, 'create']) -> name('offres.creer');
Route::post('/offres/creer', [PostController::class, 'store']) -> name('offres.enregistrer');
Route::get('/offres/{id}', [PostController::class, 'show']) -> name('offres');
