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


Route::group(['prefix' => 'manager' , 'middleware' =>'App\Http\Middleware\CheckManager'], function () {
    //For Halls
    Route::get('create/hall', 'managerController@create');
    Route::post('create/hall', ['as' => 'hall.create', 'uses' => 'managerController@store']);
    Route::get('/halls', ['as' => 'manager.hall', 'uses' => 'managerController@index']);
    Route::get('destroy/hall/{id}', ['as' => 'hall.destroy', 'uses' => 'managerController@destroy']);
    Route::get('edit/hall/{id}', ['as' => 'hall.edit', 'uses' => 'managerController@edit']);
    Route::put('update/hall/{id}', ['as' => 'hall.update', 'uses' => 'managerController@update']);


// For Rooms

    Route::get('create/room', 'ManagerRoomController@create');
    Route::post('create/room', ['as' => 'room.create', 'uses' => 'ManagerRoomController@store']);

    Route::get('edit/room/{id}', ['as' => 'room.edit', 'uses' => 'ManagerRoomController@edit']);
    Route::put('update/room/{id}', ['as' => 'room.update', 'uses' => 'ManagerRoomController@update']);
});



Route::get('/all/{category_id?}', ['as' => 'hall.index', 'uses' => 'HallController@index']);
Route::get('rooms/all/{hall}',['as' => 'room.index', 'uses' => 'roomController@index']);


Route::get('rooms/{id}','roomController@roomData')->name('room.details');
//Route::get('room/{id}','roomController@getImage');



Auth::routes();

Route::get('/', function (){
    return view('home.home');
})->name('home');
//
