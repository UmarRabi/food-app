<?php

use App\Http\Controllers\PaymentController;
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

Route::prefix('/users')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('foods');
    })->name('dashboard');
    Route::get('/foods', [UsersController::class, 'foods'])->name('foods');
    Route::get('/cart', [UsersController::class, 'carts'])->name('list-cart-items');
    Route::get('/cart/{id}', [UsersController::class, 'cart'])->name('add-to-cart');
    Route::get('/checkout', [UsersController::class, 'checkout'])->name('checkout');
    Route::get('/process', [PaymentController::class, 'process'])->name('process');
    Route::get('/pay', [PaymentController::class, 'initialize'])->name('initialize');
    Route::get('/transaction', [PaymentController::class, 'transactions'])->name('transactions');
    Route::get('/transaction/{id}', [PaymentController::class, 'transaction'])->name('transaction');
});
Route::get('/continue', function () {
    return view('continue');
})->name('continue');
Route::get('/files', function () {
    return view('files');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/foods', function () {
    return view('foods');
});
Route::get('/order', function () {
    return view('my-current-order');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/order/{type}', function ($type) {
    session(['orderType' => $type]);
    return redirect()->route('login');
})->name('order-type');
require __DIR__ . '/auth.php';
