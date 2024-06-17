<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\Admin\NavigationController as AdminNavigationController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Middleware\RedirectIfAuthenticated;

Route::get('/', [NavigationController::class , "home"])->name("home");
Route::get('/about', [NavigationController::class, 'about'])->name("about");
Route::get('/blog', [NavigationController::class, 'blog'])->name("blog");
Route::get('/blog-details', [NavigationController::class, 'blog_details'])->name("blog.details");
Route::get('/checkout', [NavigationController::class, 'checkout'])->name("checkout");
Route::get('/contact', [NavigationController::class, 'contact'])->name("contact");
Route::get('/shop', [NavigationController::class, 'shop'])->name("shop");
Route::get('/shop-details', [NavigationController::class, 'shop_details'])->name("shop.details");
Route::get('/shopping-cart', [NavigationController::class, 'shopping_cart'])->name("shopping.cart");



Route::middleware([Admin::class])->group(function(){
    Route::get('/admin', [AdminNavigationController::class , "home"])->name("admin.home");
    Route::get('/admin/products/index', [ProductController::class , "index"])->name("admin.products.index");

    Route::get('/admin/products/create', [ProductController::class , "create"])->name("admin.products.create");
    Route::post('/admin/products/index', [ProductController::class , "store"])->name("admin.products.store");
    Route::get('/admin/products/edit/{product}', [ProductController::class , "edit"])->name("admin.products.edit");
    Route::put('/admin/products/update/{product}', [ProductController::class , "update"])->name("admin.products.update");
    Route::delete('/admin/products/delete/{product}', [ProductController::class , "destroy"])->name("admin.products.delete");
});


Route::middleware([RedirectIfAuthenticated::class])->group(function(){
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    
    Route::get('login',    [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});
    
Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

