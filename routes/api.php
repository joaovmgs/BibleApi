<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\VersesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('books',BooksController::class)->only([
    'index', 'show'
]);


Route::get('verses/{abbrev}/{teste}',[VersesController::class,'show']);
