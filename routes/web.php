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

Route::get('/', 'Tools\ToolsController@index');
Route::get('/t/foods_xiangke', 'Tools\ToolsController@foodsXiangke');
Route::get('/t/mobile', 'Tools\ToolsController@mobile');
Route::get('/t/scan_port', 'Tools\ToolsController@scanPort');
Route::any('/t/ht2nginx', 'Tools\ToolsController@ht2Nginx');
Route::get('/t/{module}', 'Tools\ToolsController@module');
