<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users', 'UserController@get');

Route::post('/user', 'UserController@post');

Route::put('/user', 'UserController@put');

Route::delete('/user', 'UserController@delete');

Route::get('/pengumumans', 'PengumumanController@get');

Route::post('/pengumuman', 'PengumumanController@post');

Route::put('/pengumuman', 'PengumumanController@put');

Route::delete('/pengumuman', 'PengumumanController@delete');