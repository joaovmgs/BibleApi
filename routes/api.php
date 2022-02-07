<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ChaptersController;
use App\Http\Controllers\TestamentsController;
use App\Http\Controllers\VersesController;
use App\Http\Controllers\VersionsController;
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

Route::resource('versions',VersionsController::class)->only([
    'index', 'show'
]);


Route::resource('testaments',TestamentsController::class)->only([
    'index', 'show'
]);



Route::get('{version}/{book}/{chapters}',[ChaptersController::class,'show']);

Route::get('{version}/{book}/{chapters}/{verse}',[VersesController::class,'show']);

