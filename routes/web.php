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

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
});


Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'lang.back'], 'namespace' => 'Dashboard'], function () {
    Route::get('/lang/{locale}', function($locale){
        return redirect()
            ->back()
            ->withInput()
            ->withCookie('locale_back', $locale);
    })->name('dashboard.lang');

    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'news'], function () {
        Route::get('/', 'NewsController@index')->name('dashboard.news.index');
        Route::get('/create', 'NewsController@getCreate')->name('dashboard.news.create');
        Route::post('/create', 'NewsController@postCreate')->name('dashboard.news.create');
        Route::get('/update/{id}', 'NewsController@getUpdate')->name('dashboard.news.update');
        Route::post('/update', 'NewsController@postUpdate')->name('dashboard.news.update');
        Route::post('/delete', 'NewsController@delete')->name('dashboard.news.delete');
        Route::post('/publish', 'NewsController@publish')->name('dashboard.news.publish');
    });

    Route::group(['prefix' => 'publications'], function () {
        Route::get('/', 'PublicationsController@index')->name('dashboard.publications.index');
        Route::get('/create', 'PublicationsController@getCreate')->name('dashboard.publications.create');
        Route::post('/create', 'PublicationsController@postCreate')->name('dashboard.publications.create');
        Route::get('/update/{id}', 'PublicationsController@getUpdate')->name('dashboard.publications.update');
        Route::post('/update', 'PublicationsController@postUpdate')->name('dashboard.publications.update');
        Route::post('/delete', 'PublicationsController@delete')->name('dashboard.publications.delete');
        Route::post('/publish', 'PublicationsController@publish')->name('dashboard.publications.publish');
    });
});

/* Public */



Route::group(['namespace' => 'Front', 'middleware' => 'lang.front'], function () {
    Route::get('/lang/{locale}', function($locale){
        return redirect()
            ->back()
            ->withInput()
            ->withCookie('locale_front', $locale);
    })->name('front.lang');

    Route::get('/', 'FrontController@index')->name('front.index');
    Route::get('/news', 'FrontController@news')->name('front.news');
    Route::get('/news/{id}', 'FrontController@news_single')->name('front.news.single');
    Route::get('/login/', 'FrontController@login')->name('front.login');


    Route::group(['prefix' => 'network'], function () {
        Route::get('/', function(){
           return redirect()->route('front.network.philosophy');
        });
        Route::get('/philosophy', 'FrontController@network_philosophy')->name('front.network.philosophy');
        Route::get('/be-smart-be-first-be-cool', 'FrontController@network_slogan')->name('front.network.slogan');
        Route::get('/management', 'FrontController@network_management')->name('front.network.management');
        Route::get('/box', 'FrontController@network_box')->name('front.network.box');
        Route::get('/global-tv-screen', 'FrontController@network_globalTv')->name('front.network.globaltv');
        Route::get('/legal-aspects', 'FrontController@network_legalAspects')->name('front.network.legalaspects');
        Route::get('/regional-representatives', 'FrontController@network_representatives')->name('front.network.representatives');
    });

    Route::group(['prefix' => 'career'], function () {
        Route::get('/', function(){
            return redirect()->route('front.network.philosophy');
        });
        Route::get('/marketing', 'FrontController@career_marketing')->name('front.career.marketing');
        Route::get('/buy-case', 'FrontController@career_cases')->name('front.career.cases');
        Route::get('/affiliate-program', 'FrontController@career_affiliateProgram')->name('front.career.affiliateprogram');
        Route::get('/statuses', 'FrontController@career_statuses')->name('front.career.statuses');
        Route::get('/financial-safety', 'FrontController@career_financialSafety')->name('front.career.financialsafety');
    });


});
