<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('store.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/home', function (){
    return view('store.home');
})-> name('home');
Route::get('/products', [ProductsController::class, 'index'])-> name('products');
Route::get('/cart', function (){
    return view('store.cart');
})-> name('cart');
Route::get('/blog', function (){
    return view('store.blog');
}) -> name('blog');
Route::get('/aboutus', function (){
    return view('store.aboutus');
}) -> name('aboutus');
Route::get('/profile', function (){
    return view('profile.profile');
}) -> name('profile');
Route::get('/product-info', function() {
    return view('layouts.product-info');
}) ->name('product-info');
Route::get('/topic-info', function(){
    return view('layouts.topic-info');
}) ->name('topic-info');
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
