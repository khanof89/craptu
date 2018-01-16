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
        return redirect()->to('/bitfinex/btc/usd');
    });

    Route::get('supply/{coin}', 'CurrencyController@getSupply');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('groups', 'GroupController');
    Route::resource('conversations', 'ConversationController');


    Route::get('graph/{exchange}/{coin}/{base}/{period?}', 'CurrencyController@graph');

    Route::get('/{marketplace}/{coin}/{base}/{period?}', 'CurrencyController@getCoinPrice');