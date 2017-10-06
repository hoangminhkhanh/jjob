<?php

Route::group(['prefix' => 'fontend'], function() {
    Route::get('/', [
    	'uses' => '\App\Http\Controllers\fontend\MainController@index',
        'as' => 'trangchu'
    ]);
});