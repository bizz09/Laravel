<?php

use App\Http\Controllers\TimeLineController;
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
    return view('welcome');
});

Route::get('/dashboard', TimeLineController::class)->middleware(['auth'])->name('dashboard');

Route::post('post', \App\Http\Controllers\Post\StorePostController::class)->name('post.store');

require __DIR__.'/auth.php';
