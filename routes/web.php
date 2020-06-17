<?php

use Illuminate\Support\Facades\Route;



//User All Route
Route::group(['namespace' => 'user'],function(){

    Route::get('/','HomeController@index');
    Route::get('/contact','HomeController@contact');

    //Show All Post On Homepage:
    Route::get('/post/{post}','PostController@index')->name('post');

    //See Post Under Tag & Category with pagination and url:
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');

});



//Admin All Route
Route::group(/**
 *
 */ ['namespace'=>'admin'],function(){

    Route::get('admin/home','HomeController@index')->name('admin.home');

    // Route::get('admin-home','LoginController@index')->name('admin.home');

    //User route
    Route::resource('admin/user','UserController');

    //Role route
    Route::resource('admin/role','RoleController');

    //Permission route
    Route::resource('admin/permission','PermissionController');

    //Post route
    Route::resource('admin/post','PostController');

    //Tag route
    Route::resource('admin/tag','TagController');

    //Category route
    Route::resource('admin/category','CategoryController');

    //Admin auth routes:
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
    Route::post('/admin/logout', 'Auth\LoginController@logout')->name('admin.logout');


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

