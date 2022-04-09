<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Basic routes
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/blog', 'pages.blog')->name('blog');
Route::view('/promos', 'pages.promos')->name('promos');
Route::view('/help', 'pages.help')->name('help');
Route::view('/faq', 'pages.faq')->name('faq');

// Projects
Route::get('/project/{id_project}', [ProjectController::class, 'details'])->name('project.details');
