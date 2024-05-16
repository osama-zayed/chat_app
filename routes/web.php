<?php

use Illuminate\Support\Facades\Route;

Route::get('/myHome', function () {
    return view('page.myHome');
})->middleware("auth");
Route::get('/commission', function () {
    return view('page.commission');
})->middleware("auth");

Route::post('/sendMesseges', function(){
    event(new App\Events\sendMessageEvent());

    return null;
})->middleware("auth")->name("sendMesseges");

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
