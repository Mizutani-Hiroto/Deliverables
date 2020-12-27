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

Auth::routes();

if(env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}
Route::get('/works','PhotoController@index');

Route::post('/works','PhotoController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mypage','MypageController@index');

Route::resource('works','WorkController');
