<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')
    ->name('home');
    
Route::get('/detail', 'DetailController@index')
    ->name('detai');

Route::get('/checkout', 'CheckoutController@index')
    ->name('checkout');

Route::get('/checkout/success', 'CheckoutController@success')
    ->name('checkout-success');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
    });

Auth::routes(['verify' => true]);
