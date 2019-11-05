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


use Illuminate\Support\Facades\Artisan;

// Route - Users
Route::get('/', 'UserController@index')->name('users');
Route::get('/user-create', 'UserController@create')->name('user.create');
Route::post('/user-store', 'UserController@store')->name('user.store');
Route::get('/user-edit/{user}', 'UserController@edit')->name('user.edit');
Route::post('/user-update/{user}', 'UserController@update')->name('user.update');
Route::get('/user-delete/{user}', 'UserController@destroy')->name('user.delete');

// Route - Roles
Route::get('/roles', 'RoleController@index')->name('roles');
Route::get('/role-create', 'RoleController@create')->name('role.create');
Route::post('/role-store', 'RoleController@store')->name('role.store');
Route::get('/role-edit/{role}', 'RoleController@edit')->name('role.edit');
Route::post('/role-update/{role}', 'RoleController@update')->name('role.update');
Route::get('/role-delete/{role}', 'RoleController@destroy')->name('role.delete');

// Route - Clients
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/client-create', 'ClientController@create')->name('client.create');
Route::post('/client-store', 'ClientController@store')->name('client.store');
Route::get('/client-edit/{client}', 'ClientController@edit')->name('client.edit');
Route::post('/client-update/{client}', 'ClientController@update')->name('client.update');
Route::get('/client-delete/{client}', 'ClientController@destroy')->name('client.delete');

// Route - Phases
Route::get('/phases', 'PhaseController@index')->name('phases');
Route::get('/phase-create', 'PhaseController@create')->name('phase.create');
Route::post('/phase-store', 'PhaseController@store')->name('phase.store');
Route::get('/phase-edit/{phase}', 'PhaseController@edit')->name('phase.edit');
Route::post('/phase-update/{phase}', 'PhaseController@update')->name('phase.update');
Route::get('/phase-delete/{phase}', 'PhaseController@destroy')->name('phase.delete');


//Clear Cache facade value:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
