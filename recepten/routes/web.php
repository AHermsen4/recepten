<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Recept;
use App\Http\Controllers\ReceptController;
use App\Http\Controllers\UserController;

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

//Laat alle recepten zien
Route::get('/', [ReceptController::class, 'index']);

//Create form laten zien
Route::get('/create', [ReceptController::class, 'create']);

//Sla form op
Route::post('/recepten', [ReceptController::class, 'store']);

//Laat aanpas form zien
Route::get('/recepten/{recept}/edit', [ReceptController::class, 'edit']);

//Update recept met form
Route::put('/recepten/{recept}', [ReceptController::class, 'change']);

//Delete form
Route::get('/recepten/{recept}/delete', [ReceptController::class, 'verwijder']);

//Delete recept
Route::delete('/recepten/{recept}', [ReceptController::class, 'destroy']);

//Laat 1 recept zien
Route::get('/recepten/{recept}', [ReceptController::class, 'show']);

// //Laat registratie zien
// Route::get('/register', [UserController::class, 'register']);

// //Sla user op
// Route::post('/users', [UserController::class, 'saveRegister']);

// //Laat login zien
// Route::get('/login', [UserController::class, 'login']);

// //Login
// Route::post('/users/signIn', [UserController::class, 'signIn']);

// //Loguit
// Route::post('/logout', [UserController::class, 'logout']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
