<?php

use App\Http\Controllers\Maincontroller;
use Illuminate\Support\Facades\Route;


Route::controller(Maincontroller::class)->prefix('/')->group(function(){
    Route::get('/','index')->name('home');
});
