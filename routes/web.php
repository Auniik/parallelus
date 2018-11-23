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
//About
Route::get('/edit-about', 'AboutController@editAbout')->name('edit_about');
Route::post('/save-about', 'AboutController@saveAbout')->name('save_about');

//Newsletter

Route::get('/newsletters', 'NewsletterController@newsletters')->name('newsletters');
Route::get('/delete-newsletter/{id}', 'NewsletterController@delete_newsletter')->name('delete_newsletter');



//FRONTEND
Route::get('/about', 'AboutController@about')->name('about');
Route::post('/send-newsletter', 'NewsletterController@sendNewsletter')->name('newsletter_send');