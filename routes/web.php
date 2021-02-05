<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'show_articles']);

Auth::routes();

Route::post('/export_csv', [App\Http\Controllers\ExportController::class, 'export_csv']);

Route::post('/register_article', [App\Http\Controllers\articleRegistrationController::class, 'register_article']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
