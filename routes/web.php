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

Route::get('/prizes', 'PrizesController@index');

Route::get('/login', 'MainController@index');

Route::get('/main', 'MainController@index');
Route::post('/main/checkLogin', 'MainController@checkLogin');
Route::get('main/successLogin', 'MainController@successLogin');
Route::get('main/logout', 'MainController@logout');


Route::group(['middleware' => ['web']], function () {

}); 