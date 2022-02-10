<?php

use GuzzleHttp\Psr7\Response;
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
    return response()->json([
        'hello' => 'You will find the documentation here --> https://github.com/joaovmgs/BibleApi',
        '418' => 'By the way I\'m a teapot'
    ], 418); 
});
