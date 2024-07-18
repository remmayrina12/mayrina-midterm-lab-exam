<?php

use Illuminate\Support\Facades\Route;
use App\Http\userComment;
use App\Http\userController;
use App\Http\userPost;
Route::get('/', function () {
    return view('welcome');
});
