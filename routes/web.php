<?php

use App\Http\Controllers\SoundController;
use App\Http\Controllers\TopicController;
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

Route::get('/', [TopicController::class, 'siteindex']);
Route::resource('topics', TopicController::class);
Route::resource('sounds', SoundController::class);

