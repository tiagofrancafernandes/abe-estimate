<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('users.index');
})->name('index');

Route::middleware([
    'auth',
])
->prefix('secure')->group(function () {
    UserController::routes();
});

require __DIR__ . '/auth.php';
