<?php

use App\Http\Controllers\ProductController;
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

// home
Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/mitra', function () {
    return view('mitra');
});

// login

Route::get('/logins', function () {
    return view('authentication.login');
});
Route::get('/signup', function () {
    return view('authentication.signup');
});


Route::get('/cart', function () {
    return view('cart');
});

// product
Route::resource('product', ProductController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

    Route::resource('product', ProductController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    // !product
 
    Route::get('/product', [ProductController::class, 'index'])->name('productMenu');
    // Route::get('/product', [ProductController::class, 'index']);
    // create
    // Route::post('/product', [ProductController::class, 'store']);
   
    // // delete
    // Route::delete('/product-delete/{id}', [ProductController::class, 'destroy']);


});

require __DIR__.'/auth.php';
