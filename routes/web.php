<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\TransactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

a.route resource

1.home
2.menu

|
*/

// halaman user

// home start
Route::get('/', [HomeController::class, 'index']);
Route::post('/changepwd/{id}', [UserController::class, 'changePassword'])->name('changePassword');
Route::post('/store-review', [HomeController::class, 'store_review_user'])->name('menu-review');
Route::get('/menu', [HomeController::class, 'menu_user']);
Route::get('/user/{id}', [PartnerController::class, 'show']);
Route::get('/detail/{id}', [ProductController::class, 'show']);
Route::get('/mitra/{id}', [PartnerController::class, 'show']);
// cart
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart-store', [CartController::class, 'redirectCart'])->name('cart-store');
Route::get('/cart-delete/{id}', [CartController::class, 'destroy'])->name('cart-delete');
// transaction
Route::post('/cart-redirect', [CartController::class, 'showDetailPayment'])->name('cart-redirect');
Route::post('/cart-payment', [CartController::class, 'paymentProses'])->name('cart-payment');



// history
Route::get('/history', [TransactionController::class, 'history']);



// home end



// halaman admin

Route::get('/logins', function () {
    return view('authentication.login');
});
Route::get('/signup', function () {
    return view('authentication.signup');
});

Route::get('/cart', function () {
    return view('cart');
});

// route resource
Route::resource('product', ProductController::class);
Route::resource('social', SocialMediaController::class);
Route::resource('mitra', PartnerController::class);
Route::resource('review', ReviewController::class);
Route::resource('home', HomeController::class);
Route::resource('user', UserController::class);
Route::resource('transaksi', TransactionController::class);
Route::resource('cart', CartController::class);


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified', 'must-admin'])->name('dashboard');


Route::resource('product', ProductController::class);

Route::middleware(['auth', 'must-admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // !route halaman admin
    Route::get('/product', [ProductController::class, 'index'])->name('productMenu');
    Route::get('/social', [SocialMediaController::class, 'index'])->name('socialMenu');
    Route::get('/mitra', [PartnerController::class, 'index'])->name('mitraMenu');
    Route::get('/review', [ReviewController::class, 'index'])->name('reviewMenu');
    Route::get('/user', [UserController::class, 'index'])->name('userMenu');
    Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksiMenu');

    // softdelete product
    Route::get('/products-deleted', [ProductController::class, 'deletedProduct']);
    Route::get('/products/{id}/restore', [ProductController::class, 'restore']);
    Route::get('/products/{id}/forceDelete', [ProductController::class, 'forceDelete']);
});

require __DIR__ . '/auth.php';
