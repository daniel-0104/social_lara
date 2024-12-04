<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;

Route::middleware(['admin_auth'])->group(function(){
    Route::redirect('/','loginPage');
    Route::get('loginPage',[authController::class,'loginPage'])->name('auth#loginPage');
    Route::get('registerPage',[authController::class,'registerPage'])->name('auth#registerPage');
});


Route::middleware(['auth'])->group(function(){
    Route::get('dashboard',[authController::class,'dashboard'])->name('dashboard');

    // admin middleware
    Route::middleware(['admin_auth'])->group(function(){
        Route::get('adminHomePage',[adminController::class,'adminHomePage'])->name('admin#homePage');
    });


    //user middleware
    Route::middleware(['user_auth'])->group(function(){
        Route::get('userHomePage',[userController::class,'userHomePage'])->name('user#homePage');

        //profile
        Route::prefix('account')->group(function(){
            Route::get('profile',[userController::class,'userAcc'])->name('acc#profile');
            Route::get('edit',[userController::class,'userAccEdit'])->name('acc#edit');
            Route::post('update/{id}',[userController::class,'userAccUpdate'])->name('acc#update');
        });

        //password
        Route::prefix('password')->group(function(){
            Route::post('update/{id}',[userController::class,'passUpdate'])->name('pass#update');
        });

        //posts
        Route::prefix('post')->group(function(){
            Route::get('create',[PostController::class,'postCreatePage'])->name('post#createPage');
            Route::post('create',[PostController::class,'postCreate'])->name('post#create');
        });
    });
});
