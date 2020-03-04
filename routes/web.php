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
Route::get('users-edit/{id}', 'UsersController@edit')->name('users.edit');
Route::post('users-update/{id}', 'UsersController@update')->name('users.update');
Route::post('users-delete/{id}', 'UsersController@destroy')->name('users.delete');

//courses
Route::get('courses-list', 'CourseController@index')->name('courses.list');
Route::get('courses-create', 'CourseController@create')->name('courses.create');
Route::post('courses-store', 'CourseController@store')->name('courses.store');
Route::get('courses-edit/{id}', 'CourseController@edit')->name('courses.edit');
Route::post('courses-update/{id}', 'CourseController@update')->name('courses.update');
Route::post('courses-delete/{id}', 'CourseController@destroy')->name('courses.delete');


