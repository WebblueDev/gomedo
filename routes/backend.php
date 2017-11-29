<?php

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Backend', 'as' => 'backend.'], function () {

    Route::get('/', 'IndexController@index')->name('index');

});