<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DocumentsController;
use App\Http\Controllers\Admin\DocumentVersionController;

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

/**
 * Documents Controller
 */
Route::prefix('admin')
    ->as('app.')
    ->group(function(){
        Route::resource('documents', DocumentsController::class);
    });

/**
 * Documents Version Controller
 */
Route::controller(DocumentVersionController::class)
    ->prefix('admin')
    ->as('app.docsversion.')
    ->group(function(){
        Route::get('docsversion', 'docsversionIndex')->name('index');
        Route::get('docsversion/create', 'docsversionCreate')->name('create');
    });
