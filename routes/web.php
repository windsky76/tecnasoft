<?php

use App\Http\Controllers\PointController;
use App\Http\Controllers\PriceListController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ServiceController;
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
    return view('welcome');
});

Route::resource('service',ServiceController::class);
Route::resource('point',PointController::class);
Route::resource('price_list',PriceListController::class);
Route::get('/status/{id}',[PriceListController::class, 'statusPriceList'])->name('point.status');
Route::get('/sales', SaleController::class)->name('sale');
