<?php

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



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('article','apicontroller@index');
Route::get('article/{id}','apicontroller@input');
Route::post('article/post','apicontroller@postdata');
Route::put('/article/update/{id}','apicontroller@update_data');
Route::delete('article/delete/{id}','apicontroller@delete_data');
