<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return view('layout.master');
});

Route::get('/test', function () {
    return view('tescontent');
});

Route::get('/test2', function () {
    return view('testcontent2');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk', [ProdukController::class, 'index']);
