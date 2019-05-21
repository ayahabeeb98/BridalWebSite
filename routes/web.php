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
    return view('room.index');
});


Route::group(['prefix' => 'manager'], function () {
    Route::get('create', 'managerController@create');
    Route::post('create', ['as' => 'hall.create', 'uses' => 'managerController@store']);
    Route::get('/halls', ['as' => 'manager.hall', 'uses' => 'managerController@index']);
//    Route::get('destroy/{id}', ['as' => 'hall.destroy', 'uses' => 'managerController@destroy']);
    Route::get('edit/{id}', ['as' => 'hall.edit', 'uses' => 'managerController@edit']);
    Route::put('update/{id}', ['as' => 'hall.update', 'uses' => 'managerController@update']);


// me
    Route::get('create_room', 'ManagerRoomController@create');
    Route::post('create_room', ['as' => 'room.create', 'uses' => 'ManagerRoomController@store']);

    Route::get('edit_room/{id}', ['as' => 'room.edit', 'uses' => 'ManagerRoomController@edit']);
    Route::put('update_room/{id}', ['as' => 'room.update', 'uses' => 'ManagerRoomController@update']);
});



    Route::get('/all/{category_id?}', ['as' => 'hall.index', 'uses' => 'HallController@index']);




Route::get('rooms/{id}','roomController@roomData');
Route::get('room/{id}','roomController@getImage');







//Route::get('create', 'BookController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

