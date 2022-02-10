<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactControllers;
use App\Http\Controllers\UsersController;

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

//nav-bar
Route::get('/', [ProductController::class, 'index'])->name('home');
Route::get('/service', [ProductController::class, 'service'])->name('service');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/contact', [ProductController::class, 'contact'])->name('contact');
Route::get('/teams', [ProductController::class, 'ourTeams'])->name('teams');
Route::get('/about', [ProductController::class, 'about'])->name('about');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/hone', [LoginController::class, 'loginValidator'])->name('loginValidator');

//registration
//create ------
Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::post('/users', [RegistrationController::class, 'userCreate'])->name('user-create');

//users 
//get - all
Route::get('/users', [UsersController::class, 'users'])->name('users');
//edit
//get - single
Route::get('/user-edit/{id}', [RegistrationController::class, 'userEdit'])->name('user-edit');
//update
Route::post('/user-update', [RegistrationController::class, 'userUpdate'])->name('user-update');

//Contact
Route::post('/contact', [ContactControllers::class, 'contactUs'])->name('contactUs');
