<?php

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

Route::get('/funcary',"Funchelp@used_array");
Route::get('/funroute',"Funchelp@used_route");
Route::get('/funstring',"Funchelp@used_string");
<<<<<<< HEAD
Route::get('/funsurls',"Funchelp@used_urls")->name('func');
=======
Route::get('/funsurls',"Funchelp@used_urls")->name('func');
Route::get('/others',"Funchelp@others");
>>>>>>> 1034f95b93912fb27c4a80bf87c65a6e5c16ff7c
