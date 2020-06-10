<?php

use Illuminate\Support\Facades\Route;



//User All Route
Route::group(['namespace' => 'user'],function(){

    Route::get('/','HomeController@index');
    Route::get('/post','PostController@index');

});



//Admin All Route
Route::group(['namespace'=>'admin'],function(){

    Route::get('admin/home','HomeController@index')->name('admin.home');

    //user route
    Route::resource('admin/user','UserController');

    //post route
    Route::resource('admin/post','PostController');

    //tag route
    Route::resource('admin/tag','TagController');

    //category route
    Route::resource('admin/category','CategoryController');

});
