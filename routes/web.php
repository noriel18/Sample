<?php

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

Route::get('/', 'studentscontroller@index');
Route::get('/create', 'studentscontroller@create')->name('student.create');
Route::post('/store', 'studentscontroller@store')->name('student.store');
Route::post('/', 'studentscontroller@index')->name('student.index');

Route::get('/edit/{student}', 'studentscontroller@edit')->name('student.edit');
Route::post('/students/{student}', 'studentscontroller@update')->name('student.update');
Route::delete('/students/{student}', 'studentscontroller@destroy')->name('student.destroy');