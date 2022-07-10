<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('users.index');
})->name('index');

Route::prefix('secure')->group(function () {
    UserController::routes();
});
