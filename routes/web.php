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
Auth::routes();

if(env('APP_ENV') === 'local') {
    URL::forceScheme('https');
}

Route::get('/', 'WorkController@index')->middleware('auth');

Route::resource('works','WorkController')->except(['index'])->middleware('auth');

Route::post('works/{work}', 'CommentController@store');

Route::get('/mypage','MypageController@index')->name('mypage')->middleware('auth');

Route::get('/mypage/edit','MypageController@edit')->middleware('auth');


