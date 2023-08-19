<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Admin Controller
 */
Route::controller(AdminController::class)
    ->prefix('admin')
    ->as('app.')
    ->group(function(){
        Route::get('login', 'adminLoginForm')->name('login');
        Route::post('login', 'adminPostLogin')->name('login.submit');
        Route::get('logout', 'adminLogout')->name('logout');
    });

/**
 * Dashboard Controller
 */
Route::controller(DashboardController::class)
    ->prefix('admin')
    ->as('app.')
    ->group(function(){
        Route::get('dashboard', 'dashboard')->name('dashboard');
    });



