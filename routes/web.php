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
// Frontend
Route::group(['middleware' => 'web', 'namespace' => 'Frontend'], function () {
    Route::get('/', ['as' => 'homepage', 'uses' => 'HomepageController@index']);
    Route::get('/gui-thong-tin', ['middleware' => 'throttle:2000,1', 'uses' => 'CustomerController@register']);
    Route::post('/gui-thong-tin', ['middleware' => 'throttle:2000,1', 'uses' => 'CustomerController@send']);
    Route::get('/gioi-thieu', ['as' => 'aboutus', 'uses' => 'AboutusController@index']);
});

// Backend
// Authentication Routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['uses' => 'Auth\LoginController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['namespace' => 'Backend'], function () {//'middleware' => 'auth',
    Route::get('dashboard', 'DashboardController@index');

    // Đường dẫn allow upload ảnh từ trong ckeditor
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');

    // Trang quản trị user
    Route::group(['prefix' => 'users', 'as' => 'user', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
        Route::get('/create', ['uses' => 'UserController@create']);
        Route::post('/store', ['uses' => 'UserController@store']);
        Route::get('/show/{id?}', ['uses' => 'UserController@show']);
        Route::get('/edit/{id?}', ['uses' => 'UserController@edit']);
        Route::post('/update/{id?}', ['uses' => 'UserController@update']);
        Route::get('/delete/{id?}', ['uses' => 'UserController@destroy']);
    });

    // Quản lý người dùng đăng ký
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CustomerController@index']);
    });
});
