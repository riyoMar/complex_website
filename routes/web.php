<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


// vue UI
Route::inertia('home-vue', 'Home');
Route::inertia('product-vue', 'Product');


// Laravel UI
Route::view('about-us', 'about_us');
Route::view('test-9', 'test9');
Route::view('test-8', 'test8');
Route::view('test-7', 'test7');
Route::view('test-6', 'test6');
Route::view('test-5', 'test5');
Route::view('test-4', 'test4');
Route::view('test-3', 'test3');
Route::view('test-2', 'test2');
Route::view('test-1', 'test1');
Route::view('test', 'test');
Route::view('/', 'home');
Route::view('product-2', 'product_2');
Route::view('product', 'product');
Route::get('home', function () {
    return view('home');
});
// Route::get('test', function () {
//     return inertia('Test');
// });
