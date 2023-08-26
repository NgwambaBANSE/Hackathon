<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [AccueilController::class,'acceuil'])->name('accueil');

Route::get('cvtheque', [AccueilController::class,'cvtheque'])->name('cvtheque');
Route::get('offre', [AccueilController::class,'offre'])->name('offre');
Route::resource('user', UserController::class)->middleware('auth');
Auth::routes();
Route::get('programme', [App\Http\Controllers\ForumController::class, 'programme'])->name('programme');

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

