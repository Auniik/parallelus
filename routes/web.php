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

//Site Config
Route::post('/save-config', 'ConfigurationController@saveConfig')->name('config.save');
Route::get('/edit-config', 'ConfigurationController@editConfig')->name('edit-config');

//Newsletter
// Route::resource('/send-newsletter', 'NewsletterController@store');
// Route::get('/newsletters', 'NewsletterController')->name('newsletters');