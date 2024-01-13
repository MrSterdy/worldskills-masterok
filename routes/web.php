<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'viewLogin')->name('login.view');
    Route::post('/login', 'login')->name('login.post');

    Route::post('/logout', 'logout')->name('logout.post');

    Route::get('/register', 'viewRegister')->name('register.view');
    Route::post('/register', 'register')->name('register.post');
});

Route::controller(ProfileController::class)->prefix('my')->name('my.')->group(function () {
    Route::get('/applications', 'viewApplications')->name('applications.view');
});


Route::get('/', function () {
    return view('welcome');
});
