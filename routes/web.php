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

require_once base_path('routes/backend.php');

Route::get('/', [
    'as' => 'index', 'uses' => 'Frontend\IndexController@index'
]);

Route::get('/product', [
    'as' => 'product', 'uses' => 'Frontend\Product\ProductController@show'
]);

Route::group(['prefix' => 'user', 'namespace' => 'Auth', 'as' => 'user.'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::group(['middleware' => 'ajax'], function () {
            Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
            Route::post('/register', 'RegisterController@register')->name('register');
            Route::get('/login', 'LoginController@showLoginForm')->name('login');
            Route::post('/login', 'LoginController@login')->name('login');
            Route::get('/forgot', 'ForgotPasswordController@showLinkRequestForm')->name('forgot');
            Route::post('/forgot', 'ForgotPasswordController@sendResetLinkEmail')->name('forgot');
            Route::post('/reset', 'ResetPasswordController@reset')->name('reset');
        });
        Route::get('/reset/{token}', 'ResetPasswordController@showResetForm')->name('reset');
        Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::post('/user/logout', 'LoginController@logout')->name('logout');
    });
});