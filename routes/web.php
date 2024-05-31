<?php

use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Middleware\AjaxMiddleware;
use App\Http\Middleware\CheckUserRoleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    }
    return view('modules.webpage.initial.index');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::middleware([CheckUserRoleMiddleware::class . ':Administrador'])->prefix('administration')->name('administration.')->group(function () {
        Route::get('/home', [AdminHomeController::class, 'index'])->name('home');

        Route::controller(ClientController::class)->prefix('clients')->name('client.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::middleware([AjaxMiddleware::class])->group(function () {
                Route::get('/list', 'list')->name('list');
                Route::put('/update/{id}', 'update')->name('update');
                Route::delete('/delete/{id}', 'delete')->name('delete');
            });
        });
    });
});
