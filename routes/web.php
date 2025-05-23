<?php

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/page2', function () {
    return view('pages/page2');
});
Route::get('/page3', function () {
    return view('pages/page3');
});
Route::get('/page4', function () {
    return view('pages/page4');
});
Route::get('/page5', function () {
    return view('pages/page5');
});
