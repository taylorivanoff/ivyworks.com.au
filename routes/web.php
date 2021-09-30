<?php

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

Route::get('/', [App\Http\Controllers\GuestUserController::class, 'create'])->name('guestUser.create');
Route::get('/guide', function () {
    return view('pages/guide');
});
Route::get('/guest', [App\Http\Controllers\GuestUserController::class, 'show'])->name('guestUser.show');
Route::post('/guest/store', [App\Http\Controllers\GuestUserController::class, 'store']);
