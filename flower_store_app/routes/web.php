<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/aboutus', [AboutController::class, 'index'])->name('aboutus');
Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/sort', [ProductsController::class, 'sort'])->name('products.sort');
Route::get('/product/{productid}', [ProductController::class, 'index'])->name('product-info');
Route::get('/products/search', [ProductsController::class, 'search'])->name('products.search');
Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/topic-info', [TopicController::class, 'index'])->name('topic-info');
Route::get('/checkout-info', function (){
    return view('store.checkout-info');
})->name('checkout');
require __DIR__.'/auth.php';

