<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserwController;
use App\Http\Controllers\Userw_Controller;
use App\Http\Controllers\CategoriesController;


Route::get('/', function () { return view('admin.login'); });

Route::resource('/userw', UserwController::class);

Route::resource('/userws', Userw_Controller::class);

Route::resource('/products',ProductController::class);

Route::resource('/categories',CategoriesController::class);
