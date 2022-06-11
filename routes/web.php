<?php

use App\Http\Controllers\UserControler;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('users.index');
})->name('index');

Route::get('/users/', [UserControler::class, 'index'])->name('users.index');
Route::get('/users/create', [UserControler::class, 'create'])->name('users.create');
Route::post('/users/store', [UserControler::class, 'store'])->name('users.store');
Route::get('/users/{userId}', [UserControler::class, 'show'])->name('users.show');
Route::get('/users/{userId}/edit', [UserControler::class, 'edit'])->name('users.edit');
Route::post('/users/{userId}/update', [UserControler::class, 'update'])->name('users.update');
Route::get('/users/{userId}/confirm_delete', [UserControler::class, 'confirmDelete'])->name('users.confirm_delete');
/*
Route::match([
    'get',
    'post',
    'delete',
], '/users/{userId}/delete', [UserControler::class, 'delete'])->name('users.delete');
*/
Route::delete('/users/{userId}/delete', [UserControler::class, 'delete'])->name('users.delete');
