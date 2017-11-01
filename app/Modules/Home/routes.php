<?php

Route::group(['namespace' => 'App\Modules\Home\Controllers'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');
});