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
    return view('hall.index');
});
Route::get('/login',function (){
    return view('home.login');
});
Route::get('/signup',function (){
    return view('home.signUp');
});


Route::get('home', function (){
   return view('home.home');
})->name('home');

Route::group(['prefix' => 'hall'], function () {
    Route::get('create', 'managerController@create');
    Route::post('create', ['as' => 'hall.create', 'uses' => 'managerController@store']);
//    Route::get('/all', ['as' => 'hall.index', 'uses' => 'hallController@index']);
//    Route::get('destroy/{id}', ['as' => 'hall.destroy', 'uses' => 'managerController@destroy']);
    Route::get('edit/{id}', ['as' => 'hall.edit', 'uses' => 'managerController@edit']);
    Route::put('update/{id}', ['as' => 'hall.update', 'uses' => 'managerController@update']);
});


Route::get('rooms/{id}','roomController@roomData');
Route::get('room/{id}','roomController@getImage');





//Route::get('create', 'BookController@create');
