<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')->middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('home');
    });
    Route::get('/upload', [UsersController::class, 'upload'])->name('upload');
    Route::post('/upload', [UsersController::class, 'savefile'])->name('savefile');
    Route::get('/profile', [UsersController::class, 'profile'])->name('profile');
    Route::prefix('/appointments')->group(function(){
       Route::get('/', [UsersController::class, 'appointment'])->name('appointment');
       Route::get('/view', [UsersController::class, 'viewappointment'])->name('view-appointment');
       Route::post('/', [UsersController::class, 'saveappointment'])->name('save-appointment');
    });
    Route::prefix('/contacts')->group(function(){
        Route::get('/', [UsersController::class, 'contacts'])->name('contacts');
        Route::get('/{id}', [UsersController::class, 'contact'])->name('contact');
        Route::post('/', [UsersController::class, 'savecontact'])->name('savecontact');
    });
});
Route::get('/share', function(){
    return view('file-upload');
});
require __DIR__.'/auth.php';
