<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::redirect('/', '/users');

Route::redirect('/', '/admin');

Route::prefix('users')->group(function() {
    Route::get('/', [UserController::class, 'index']);
});
