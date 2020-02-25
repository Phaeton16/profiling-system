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

//address
Route::get('address-list', 'AddressContoller@index')->name('address.list');
Route::get('address-create', 'AddressContoller@create')->name('address.create');
Route::post('address-store', 'AddressContoller@store')->name('address.store');
Route::get('address-edit', 'AddressContoller@edit')->name('address.edit');
Route::post('address-update', 'AddressContoller@update')->name('address.update');
Route::post('address-delete', 'AddressContoller@delete')->name('address.delete');


