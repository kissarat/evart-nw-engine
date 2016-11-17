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



Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('dashboard.index');

    Route::group(['prefix' => 'news'], function () {
        Route::get('/', 'Dashboard\NewsController@index')->name('dashboard.news.index');
        Route::get('/create', 'Dashboard\NewsController@getCreate')->name('dashboard.news.create');
        Route::post('/create', 'Dashboard\NewsController@postCreate')->name('dashboard.news.create');
        Route::get('/update/{id}', 'Dashboard\NewsController@getUpdate')->name('dashboard.news.update');
        Route::post('/update', 'Dashboard\NewsController@postUpdate')->name('dashboard.news.update');
        Route::post('/delete', 'Dashboard\NewsController@delete')->name('dashboard.news.delete');
    });

    Route::group(['prefix' => 'publications'], function () {
        Route::get('/', 'Dashboard\PublicationsController@index')->name('dashboard.publications.index');
        Route::get('/create', 'Dashboard\PublicationsController@getCreate')->name('dashboard.publications.create');
        Route::post('/create', 'Dashboard\PublicationsController@postCreate')->name('dashboard.publications.create');
        Route::get('/update/{id}', 'Dashboard\PublicationsController@getUpdate')->name('dashboard.publications.update');
        Route::post('/update', 'Dashboard\PublicationsController@postUpdate')->name('dashboard.publications.update');
        Route::post('/delete', 'Dashboard\PublicationsController@delete')->name('dashboard.publications.delete');
    });
});
