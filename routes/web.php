<?php

use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class,'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/teams', function () {
    return view('teams');
});

Route::get('/single', function () {
    return view('single-blog');
});

Route::get('/product-single', function () {
    return view('single-product');
});
