<?php

use App\Http\Controllers\FooController;
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
//This works
Route::controller(FooController::class)
    ->group(function () {
        Route::get('/foo', 'foo');
    });

//This also works
Route::namespace('App\Http\Controllers')
    ->group(function () {
        Route::get('/with_namespace/bar', [FooController::class, 'bar']);
    });

//This throws an exception
Route::namespace('App\Http\Controllers')
    ->controller(FooController::class)
    ->group(function () {
        Route::get('/with_namespace/foo', 'foo');
    });



