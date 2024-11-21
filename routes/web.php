<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

use App\Http\Controllers\UserController;

Route::post('/users', [UserController::class, 'store']);