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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

// admin routes
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin');

    Route::group(['prefix' => 'portfolios'], function () {
        Route::get('/', 'PortfolioController@portfolios')->name('viewListPortfolios');
        Route::get('/add', 'PortfolioController@view_add')->name('viewAddPortfolio');
        Route::post('/add', 'PortfolioController@add')->name('addPortfolio');
        Route::get('/edit/{portfolio}', 'PortfolioController@view_edit')->name('viewEditPortfolio');
        Route::post('/edit/{portfolio}', 'PortfolioController@edit')->name('editPortfolio');
        Route::delete('/delete/{portfolio}', 'PortfolioController@delete')->name('deletePortfolio');

    });

    Route::group(['prefix' => 'article'], function () {
        Route::get('/', 'ArticleController@articles')->name('viewListArticles');
        Route::get('/add', 'ArticleController@view_add')->name('viewAddArticle');
        Route::post('/add', 'ArticleController@add')->name('addArticle');
    });

    // about_me routes
    Route::get('/about_me', 'DashboardController@view_about_me')->name('viewAboutMe');
    Route::post('/about_me', 'DashboardController@save_about_me')->name('saveAboutMe');

    // show messages
    Route::get('/messages', 'DashboardController@view_messages')->name('viewMessages');
    Route::get('/message/{contact}', 'DashboardController@view_single_message')->name('viewSingleMessage');

    // terminal controller

});

// website routes
Route::get('/', 'SiteController@home')->name('homePage');
Route::get('/contact', 'SiteController@contact')->name('viewContactPage');
Route::get('/portfolio/{portfolio}', 'SiteController@portfolio_detail')->name('viewPortfolioPage');
Route::post('/contact', 'SiteController@submit_contact')->name('submitContactMessage');
Route::get('/article/{article}', 'SiteController@article_page')->name('viewArticlePage');
Route::get('/article', 'SiteController@articles_all')->name('viewArticles');

