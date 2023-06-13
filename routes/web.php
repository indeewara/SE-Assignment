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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('suppliers', 'CompaniesController');
    Route::resource('employees', 'EmployeeController');


    Route::get('employees-json', 'EmployeeController@allJson');

    Route::get('suppliers-search', 'CompaniesController@searchByName');


    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');


    
    Route::get('users', 'Auth\UserController@index')->name('users.index');
    Route::get('users/{id}/edit', 'Auth\UserController@edit')->name('users.edit');
    Route::put('users/{user}', 'Auth\UserController@update')->name('users.update');
    Route::get('users/{user}reset', 'Auth\ResetPasswordController@resetPasswordForUser')->name('users.reset.password');
    Route::get('/check-database-connection', 'Auth\LoginController@index');

});
