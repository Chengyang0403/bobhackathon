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

Route::get('/', 'EventsController@index')->name('events.index');
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
//omit

//ログイン機能
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::group(['middleware' => 'auth'], function () {
    //Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    Route::resource('events', 'EventsController', ['only' => ['create', 'store', 'destroy']]);
    
// ホスト機能　CRUD
    Route::get('events/{id}', 'EventsController@show')->name('events.show');
    Route::post('events', 'EventsController@store')->name('events.post');
    Route::put('events/{id}', 'EventsController@update')->name('events.update');
    Route::delete('events/{id}', 'EventsController@destroy')->name('events.destroy');

// index:  show's Auxiliary Page
    Route::get('events', 'EventsController@index');

// create:   Form page for new creation
    Route::get('events/create', 'EventsController@create')->name('events.create');

// edit:   Form page for update
    Route::get('events/{id}/edit', 'EventsController@edit')->name('events.edit');    
    
    
//join機能
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::get('joinings', 'EventsController@joinings')->name('users.joinings');
        Route::get('profile', 'UsersController@show')->name('users.profile');
        Route::get('edit', 'UsersController@edit')->name('users.edit'); 
       
    });
    Route::put('users/{id}', 'UsersController@update')->name('users.update');
    
    Route::group(['prefix' => 'events/{id}'], function () {
        Route::post('join', 'UserJoinController@store')->name('event.join');
        Route::delete('cancel', 'UserJoinController@destroy')->name('event.cancel');
        Route::get('joinners', 'UsersController@joinners')->name('events.joinners');
    });
    
    Route::resource('bulletins', 'BulletinsController', ['only' => ['store', 'destroy']]);

 });

?>