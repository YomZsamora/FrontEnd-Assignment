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

Route::get('/', 'YolomyController@home');

Route::get('/register', function () {
    return view('register');
});

Route::post('/register/new_client', 'YolomyController@register_client');
Route::post('/login/authenticate', 'YolomyController@login_client');

Route::get('/shopping_cart', 'YolomyController@view_cart');

Route::get('/logout', 'YolomyController@logout');

Route::get('/remove_item/{product_id}', ['uses' =>'YolomyController@remove_item']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/buy/{product}', ['uses' =>'YolomyController@add_to_cart'])->middleware('authenticate');

