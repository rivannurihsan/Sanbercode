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

Route::get('/test3', 'TestController@test')->middleware('dateMiddleware'); //bisa juga gini
Route::get('/test2', 'TestController@test2');
Route::get('/test1', 'TestController@test1');
// Route::get('/test3', 'TestController@test3');

Route::middleware('dateMiddleware')->group(function(){
    Route::get('/test', 'TestController@test');
    Route::get('/test5', 'TestController@test5');
    Route::get('/test6', 'TestController@test6');
    Route::get('/test7', 'TestController@test7');
});

Route::get('/admin', 'TestController@admin');
// Route::get('/test8', 'TestController@test8');
// Route::get('/test9', 'TestController@test9');
// Route::get('/test10', 'TestController@test10');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/route-1',function(){
    return 'masuk route 1';
})->middleware(['auth', 'email_verified']);

Route::get('/route-2',function(){
    return 'masuk route 2';
})->middleware(['auth', 'email_verified', 'admin']);
