<?php

use Illuminate\Support\Facades\Route;



//User All Route
Route::group(['namespace' => 'user'],function(){

    Route::get('/','HomeController@index');

    //Show All Post On Homepage:
    Route::get('/post/{post}','PostController@index')->name('post');

    //See Post Under Tag & Category with pagination and url:
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');

});



//Admin All Route
Route::group(['namespace'=>'admin'],function(){

    Route::get('admin/home','HomeController@index')->name('admin.home');

    Route::get('admin-home','LoginController@index')->name('admin.home');

    //user route
    Route::resource('admin/user','UserController');

    //post route
    Route::resource('admin/post','PostController');

    //tag route
    Route::resource('admin/tag','TagController');

    //category route
    Route::resource('admin/category','CategoryController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
