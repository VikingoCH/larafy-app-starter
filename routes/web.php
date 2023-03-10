<?php

use App\Http\Controllers\DashboardController;
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
})->middleware(['verify.shopify'])->name('home');

Route::middleware(['verify.shopify'])->group(function () {

    Route::get('/', [DashboardController::class, 'home'])->name('home');
    // Route::get('/products', [DashboardController::class, 'products'])->name('products');
    // Route::get('/settings', [DashboardController::class, 'settings'])->name('settings');

});
