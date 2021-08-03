<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOne;
use App\Http\Controllers\OneToMany\CategoryController;
use App\Http\Controllers\OneToMany\ProductController;
use App\Http\Controllers\ManyToMany\TagController;
use App\Http\Controllers\ManyToMany\BlogController;

//=============One To One Route================//
Route::get('/ont-to-one', [OneToOne::class, 'index']);

Route::get('/ont-to-one/create', [OneToOne::class, 'create']);

Route::post('/one-to-one/store', [OneToOne::class, 'store']);

Route::get('/one-to-one/edit/{id}', [OneToOne::class, 'edit']);

Route::post('/one-to-one/update/{id}', [OneToOne::class, 'update']);

Route::get('/one-to-one/delete/{id}', [OneToOne::class, 'destroy']);


//=============One To Many Category Route================//
Route::get('/ont-to-many/category', [CategoryController::class, 'index']);

Route::get('/ont-to-many/category/create', [CategoryController::class, 'create']);

Route::post('/one-to-many/category/store', [CategoryController::class, 'store']);

Route::get('/one-to-many/category/edit/{id}', [CategoryController::class, 'edit']);

Route::post('/one-to-many/category/update/{id}', [CategoryController::class, 'update']);

Route::get('/one-to-many/category/delete/{id}', [CategoryController::class, 'destroy']);


//=============One To Many Category Route================//
Route::get('/ont-to-many/product', [ProductController::class, 'index']);

Route::get('/ont-to-many/product/create', [ProductController::class, 'create']);

Route::post('/one-to-many/product/store', [ProductController::class, 'store']);

Route::get('/one-to-many/product/edit/{id}', [ProductController::class, 'edit']);

Route::post('/one-to-many/product/update/{id}', [ProductController::class, 'update']);

Route::get('/one-to-many/product/delete/{id}', [ProductController::class, 'destroy']);


//=============Many To Many Tag Route================//
Route::get('/many-to-many/tag', [TagController::class, 'index']);

Route::get('/many-to-many/tag/create', [TagController::class, 'create']);

Route::post('/many-to-many/tag/store', [TagController::class, 'store']);

Route::get('/many-to-many/tag/edit/{id}', [TagController::class, 'edit']);

Route::post('/many-to-many/tag/update/{id}', [TagController::class, 'update']);

Route::get('/many-to-many/tag/delete/{id}', [TagController::class, 'destroy']);


//=============Many To Many Tag Route================//
Route::get('/many-to-many/blog', [BlogController::class, 'index']);

Route::get('/many-to-many/blog/create', [BlogController::class, 'create']);

Route::post('/many-to-many/blog/store', [BlogController::class, 'store']);

Route::get('/many-to-many/blog/edit/{id}', [BlogController::class, 'edit']);

Route::post('/many-to-many/blog/update/{id}', [BlogController::class, 'update']);

Route::get('/many-to-many/blog/delete/{id}', [BlogController::class, 'destroy']);

