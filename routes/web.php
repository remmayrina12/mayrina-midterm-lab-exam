<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userComment;
use App\Http\Controllers\userPost;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', userController::class);