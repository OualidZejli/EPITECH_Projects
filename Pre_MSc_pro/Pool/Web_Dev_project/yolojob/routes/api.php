<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/inscription', [UserController::class, 'create'])->name("inscription.creer");
Route::post('/inscription', [UserController::class, 'store'])->name("inscription.store");
Route::get('/connexion', [UserController::class, 'login'])->name("login");
Route::post('/connexion', [UserController::class, 'access'])->name("login.access");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
