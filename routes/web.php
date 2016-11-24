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
    return view('pages.index');
});

Route::group(['prefix' => 'redpm'], function () {
  Route::get('/login', 'RedpmAuth\LoginController@showLoginForm');
  Route::post('/login', 'RedpmAuth\LoginController@login');
  Route::post('/logout', 'RedpmAuth\LoginController@logout');

  Route::get('/register', 'RedpmAuth\RegisterController@showRegistrationForm');
  Route::post('/register', 'RedpmAuth\RegisterController@register');

  Route::post('/password/email', 'RedpmAuth\ForgotPasswordController@sendResetLinkEmail');
  Route::post('/password/reset', 'RedpmAuth\ResetPasswordController@reset');
  Route::get('/password/reset', 'RedpmAuth\ForgotPasswordController@showLinkRequestForm');
  Route::get('/password/reset/{token}', 'RedpmAuth\ResetPasswordController@showResetForm');
});
