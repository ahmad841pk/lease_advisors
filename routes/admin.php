<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('/contracts', function () {
        return view('admin.contracts.index');
    })->name('admin.contracts');
    Route::get('/contracts/view', function () {
        return view('admin.contracts.view');
    })->name('admin.contracts.view');

    Route::get('login',[LoginController::class,'login'])->name('admin.login.view');


});
