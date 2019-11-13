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


Route::get('/', 'HomeController@index')->name('home');
Route::post('subscriber','SubscriberController@store')->name('subscriber.store');


Auth::routes();

Route::group(['middleware'=>['auth']], function(){
    Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');
});

// for Admin Route Group
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('tag','TagController');
    Route::resource('category','CategoryController');
    Route::resource('post','PostController');


    Route::get('pending/post','Postcontroller@pending')->name('post.pending');
    Route::put('/post/{id}/approved','Postcontroller@approvel')->name('post.approvel');

    Route::get('/subscriber','SubscriberController@index')->name('subscriber.index');
    Route::delete('/subscriber/{subscriber}','SubscriberController@destroy')->name('subscriber.destroy');

    Route::get('/setting','SettingsController@index')->name('settings.settings');
    Route::put('/updateprofile','SettingsController@Updateprofile')->name('profile.update');
    Route::put('/updatepassword','SettingsController@Updatepassword')->name('password.update');


});

// for Author Route Group
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'Author','middleware'=>['auth','user']], function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('post','PostController');

    Route::get('/setting','SettingsController@index')->name('settings.settings');
    Route::put('/updateprofile','SettingsController@Updateprofile')->name('profile.update');
    Route::put('/updatepassword','SettingsController@Updatepassword')->name('password.update');
});
