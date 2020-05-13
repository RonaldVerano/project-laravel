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
Route::get('/employees', 'EmployeesController@index')->name('employees.index');
Route::post('/employees/store', 'EmployeesController@store')->name('employees.store');
Route::post('/employees/update', 'EmployeesController@update')->name('employees.update');
Route::get('/employees/edit', 'EmployeesController@edit')->name('employees.edit');
Route::post('/employees/destroy', 'EmployeesController@destroy')->name('employees.destroy');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(); 

