<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MollieController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Repositories\Categories\CategoryRepositoryInterface;
use App\Http\Controllers\User\UserProductController;




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

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout']); 

Route::resource('products', ProductController::class);
Route::resource('categories', CategorieController::class);

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('showLinkRequestForm');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset']);
Route::get('/dashboard',[ProductController::class,'showDash'])->name('showDash');

Route::get('/addproduct',[CartController::class,'addToCart'])->name('add.cart');
Route::post('/addproduct', [CartController::class, 'store'])->name('add.cart');
Route::get('/cart', [CartController::class, 'index'])->name('Cart.index');
Route::post('/cart/delete', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('/success', [MollieController::class, 'success'])->name('success');
Route::get('/checkout', [MollieController::class, 'mollie'])->name('checkout');
Route::post('/apply-coupon', [CartController::class, 'applyCoupon'])->name('apply_coupon');
Route::get('/contact', function (CategoryRepositoryInterface $categoryRepository) {
  $categories = $categoryRepository->all();
  return view('ContactUs', compact('categories'));
})->name('ContactUs');

Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/store', [UserProductController::class, 'store'])->name('store');
Route::post('/search',[ UserProductController::class,'search'])->name('products.search');

// Route::post('/cart/apply-coupon', [CouponController::class, 'applyCoupon'])->name('cart.applyCoupon');
// Route::get('/coupons/create', [CouponController::class, 'create'])->name('coupons.create');
// Route::post('/coupons', [CouponController::class, 'store'])->name('coupons.store');