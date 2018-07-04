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

/*  專案進入點 web.php 的路徑 EXAM56/routes/ */
/*  控制器(controller)的路徑 EXAM56/app/Http/Controlls */
/*  視圖(view)的路徑   EXAM56/resources/views */
Auth::routes();
Route::get('/', 'ExamController@index')->name('index');
Route::get('/home', 'ExamController@index')->name('home.index');

// Auth::routes();

Route::get('/exam', 'ExamController@index')->name('exam.index');
Route::get('/exam/create', 'ExamController@create')->name('exam.create');
Route::post('/exam', 'ExamController@store')->name('exam.store');
