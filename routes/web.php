<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\NameController;
use App\http\Controllers\LoginController;
use App\http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task/register',[NameController::class,'register'])->name('task.register');


Route::resource('task', NameController::class);
Route::resource('product', ProductController::class);




Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');











Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
