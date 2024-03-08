<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bladecontroller;
use App\Http\Controllers\crudController;
use App\Http\Controllers\regesterController;
use App\Http\Controllers\AdminController;

Route::get('/',function(){
    return view('welcome');
});

Route::get('/home',[bladecontroller::class,'home'])->name('home');
Route::get('/generic',[bladecontroller::class,'generic']);

Route::get('/index',[bladecontroller::class,'index']);

Route::get('/element',[bladecontroller::class,'element']);

// crud controller
Route::get('/show',[crudController::class,'show'])->name('show');

Route::post('/post',[crudController::class,'store']);

Route::get('/delete/{id}',[crudController::class,'delete'])->name('delete');

Route::get('/update/{id}',[crudController::class,'update'])->name('update');
Route::post('/edite/{id}',[crudController::class,'edite'])->name('edite');

// Register controller

Route::post('/mydata',[regesterController::class,'store2']);

Route::get('/my',[regesterController::class,'index']);

//Admin controller

Route::get('/admin',[AdminController::class,'index']);


Route::get('/profile',[AdminController::class,'profile']);