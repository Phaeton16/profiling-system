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
Route::get('students-edit/{id}', 'StudentsController@edit')->name('students.edit');
Route::post('students-update/{id}', 'StudentsController@update')->name('students.update');
Route::post('students-delete/{id}', 'StudentsController@destroy')->name('students.delete');

//users
Route::get('users-list', 'UsersController@index')->name('users.list');
Route::get('users-create', 'UsersController@create')->name('users.create');
Route::post('users-store', 'UsersController@store')->name('users.store');
Route::get('users-edit', 'UsersController@edit')->name('users.edit');
Route::post('users-update', 'UsersController@update')->name('users.update');
Route::post('users-delete', 'UsersController@delete')->name('users.delete');

//courses
Route::get('courses-list', 'CoursesController@index')->name('courses.list');
Route::get('courses-create', 'CoursesController@create')->name('courses.create');
Route::post('courses-store', 'CoursesController@store')->name('courses.store');
Route::get('courses-edit', 'CoursesController@edit')->name('courses.edit');
Route::post('courses-update', 'CoursesController@update')->name('courses.update');
Route::post('courses-delete', 'CoursesController@delete')->name('courses.delete');


