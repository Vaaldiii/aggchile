<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'PagesController@index');
Route::get('/quienes-somos', 'PagesController@whoweare');
Route::get('/servicios', 'PagesController@services');
Route::get('/equipo', 'PagesController@team');
Route::get('/contacto', 'PagesController@contact');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/pages/{id}', 'PagesController@show');
    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'home', 'middleware' => 'auth'], function () {
        Route::get('/edition', 'EditionController@panel');
        Route::get('/theme', 'EditionController@theme');
        Route::get('/data-panel', 'DataController@index');
        Route::get('/settings', 'SettingsController@index');
        Route::match(['put', 'patch'], '/settings/{id}', 'SettingsController@update');
        
        Route::resource('partners', 'PartnersController', ['except' => ['index', 'show']]);
        Route::resource('services', 'ServicesController', ['except' => ['index']]);
        Route::resource('pages', 'PagesController', ['except' => ['index', 'show']]);
        Route::resource('users', 'UsersController', ['only' => ['destroy']]);

        Route::get('/user/profile', 'UsersController@index');
        Route::match(['put', 'patch'], '/user/profile/{user}', 'UsersController@update');
        
        
        
        Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);
        Route::post('update/menu', ['as' => 'update-menu', 'uses' =>'PagesController@updateMenu']);
    });


    Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload', 'middleware' => 'auth']);
    
});
