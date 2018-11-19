<?php

Route::get('/', function () {
    return view('frontend.home.home');
})->name('root');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Admin Routes
Route::get('/admin', function () {
    return view('backend.dashboard');
})->name('admin');
Route::get('/add-config', 'ConfigurationController@index')->name('add-config');
Route::post('/save-config', 'ConfigurationController@saveConfig')->name('save-config');
Route::get('/view-config', 'ConfigurationController@viewConfig')->name('view-config');
Route::get('/edit-config', 'ConfigurationController@editConfig')->name('edit-config');
Route::post('/update-config', 'ConfigurationController@updateConfig')->name('update-config');