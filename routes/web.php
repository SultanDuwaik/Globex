<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\Admin\NavigationController as AdminNavigationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NavigationController::class , "home"])->name("home");
Route::get('/about', [NavigationController::class, 'about'])->name("about");
Route::get('/blog', [NavigationController::class, 'blog'])->name("blog");
Route::get('/blog-details', [NavigationController::class, 'blog_details'])->name("blog.details");
Route::get('/checkout', [NavigationController::class, 'checkout'])->name("checkout");
Route::get('/contact', [NavigationController::class, 'contact'])->name("contact");
Route::get('/shop', [NavigationController::class, 'shop'])->name("shop");
Route::get('/shop-details', [NavigationController::class, 'shop_details'])->name("shop.details");
Route::get('/shopping-cart', [NavigationController::class, 'shopping_cart'])->name("shopping.cart");




Route::get('/admin', [AdminNavigationController::class , "home"])->name("home");
