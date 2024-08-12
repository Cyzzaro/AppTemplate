<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['verified', 'auth']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
