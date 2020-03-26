<?php

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
    return view('frontend.pages.index');
})->name('home');
Route::get('/product', function () {
    return view('frontend.pages.product');
})->name('product');
Route::get('/product-detail', function () {
    return view('frontend.pages.product-detail');
})->name('product.detail');
Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');
Route::get('/cart', function () {
    return view('frontend.pages.cart');
})->name('cart');
Route::get('/news', function () {
    return view('frontend.pages.news');
})->name('news');
Route::get('/news-detail', function () {
    return view('frontend.pages.news-detail');
})->name('news-detail');

Route::get('/project', function () {
    return view('frontend.pages.project');
})->name('project');
Route::get('/project-detail', function () {
    return view('frontend.pages.project-detail');
})->name('project-detail');
Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');
Route::get('/admin', function () {
    return view('backend.home');
})->name('admin');

Route::get('/admin/user', function () {
    return view('backend.user.index');
})->name('admin');
Route::get('/admin/user/create', function () {
    return view('backend.user.create');
})->name('admin');


