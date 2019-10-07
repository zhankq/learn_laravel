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

Route::get('/funsurls',"Funchelp@used_urls")->name('func');
Route::get('/others',"Funchelp@others");

Route::get('/dbrumen/read_write',"Databases\Rumen@readWrite");
Route::get('/dbrumen/connect_more',"Databases\Rumen@connectMore");
Route::get('/dbrumen/transaction',"Databases\Rumen@transaction");
#查询构造器
Route::get('/dbqueries/index',"Databases\Queries@index");

#查询构造器
Route::get('/dbqueries/index',"Databases\Queries@index");
Route::get('/dbqueries/result',"Databases\Dueries@result");


