<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/all-jobs', [HomeController::class, 'allJobs']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/job', [HomeController::class, 'job']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/partners', [HomeController::class, 'partners']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/qualification', [HomeController::class, 'qualification']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/signup', [HomeController::class, 'signup']);
Route::get('/skills', [HomeController::class, 'skills']);
Route::get('/experience', [HomeController::class, 'experience']);