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

// Главная страница
Route::get('/', 'HomeController@index')->name('home');

// Работа с пользователем
Auth::routes();

// Роуты доступные для авторизированных пользователей
Route::group(['middleware' => 'auth'], function(){

	// Личный кабинет пользователя
	Route::resource('/personal_area', 'PersonalAreaController');

	// Робота с кодом 
	Route::resource('/code', 'CodeController');

});


// Админка
Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'Admin'], function(){

	// Гланая страница админки
	Route::get('/', 'MainController@index')->name('admin.home');
	// Робота с победителем
	Route::resource('/winners', 'WinnersController');
	// Сохранение победителей 
	Route::get('/winners_save', 'WinnersSaveController@index')->name('winners_save');

});

