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


Route::get('/companies', 'CompanyController@index');
Route::get('/companies/add', 'CompanyController@create');
Route::post('/companies', 'CompanyController@store');
Route::delete('/companies/{company}', 'CompanyController@destroy');

Route::get('/employees', 'EmployeeController@index');
Route::get('/employees/add', 'EmployeeController@create');
Route::post('/employees', 'EmployeeController@store');
Route::delete('/employees/{employee}', 'EmployeeController@destroy');