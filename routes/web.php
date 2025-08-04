<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('create');
});

Route::post('create/post', [PostController::class,'Create']);
