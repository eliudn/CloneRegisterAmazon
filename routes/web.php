<?php

use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/auth/register', function () {
    return view('auth.Register');
});

Route::post('/auth/register', RegisterController::class);
