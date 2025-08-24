<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

//ブログに必要なurl一式をまとめて定義してくれる一行
Route::resource('blogs',BlogController::class);