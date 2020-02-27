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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//students
Route::get('students-list', 'StudentsController@index')->name('students.list');
Route::get('students-create', 'StudentsController@create')->name('students.create');
Route::post('students-store', 'StudentsController@store')->name('students.store');
Route::get('students-edit', 'StudentsController@edit')->name('students.edit');
Route::post('students-update', 'StudentsController@update')->name('students.update');
Route::post('students-delete', 'StudentsController@delete')->name('students.delete');


//courses
Route::get('courses-list', 'CoursesController@index')->name('courses.list');
Route::get('courses-create', 'CoursesController@create')->name('courses.create');
Route::post('courses-store', 'CoursesController@store')->name('courses.store');
Route::get('courses-edit', 'CoursesController@edit')->name('courses.edit');
Route::post('courses-update', 'CoursesController@update')->name('courses.update');
Route::post('courses-delete', 'CoursesController@delete')->name('courses.delete');


