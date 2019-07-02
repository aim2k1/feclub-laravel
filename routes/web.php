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

Route::get('/contact', ['uses' => 'ContactController@view', 'as' => 'contact']);
//Route::get('/contact', ['uses' => 'ContactWithRulesController@view', 'as' => 'contact']);
Route::post('/contact', ['uses' => 'ContactController@send', 'as' => 'contact.send']);
//Route::post('/contact', ['uses' => 'ContactWithRulesController@send', 'as' => 'contact.send']);
