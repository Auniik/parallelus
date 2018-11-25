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
Route::get('/edit-about', 'AboutController@editAbout')->name('about.edit');
Route::post('/save-about', 'AboutController@saveAbout')->name('about.save');
Route::post('/update-about-bg', 'AboutController@updateAboutBg')->name('about.bg');

//ISSUES
Route::get('/add-social', 'SocialController@addSocial')->name('social.add');
Route::post('/save-social', 'SocialController@saveSocial')->name('social.save');
Route::get('/all-social', 'SocialController@allSocial')->name('social.all');
Route::get('/edit-social/{id}', 'SocialController@editSocial')->name('social.edit');
Route::post('/update-social/{id}', 'SocialController@updateSocial')->name('social.update');
Route::get('/delete-social/{id}', 'SocialController@deleteSocial')->name('social.delete');
Route::get('/social-appearance', 'SocialController@socialAppearance')->name('social.appearance');
Route::post('/update-social-config', 'SocialController@updateSocialConfig')->name('socialconfig.update');

//NEWS
Route::get('/add-news', 'NewsController@addNews')->name('news.add');
Route::post('/save-news', 'NewsController@saveNews')->name('news.save');
Route::get('/all-news', 'NewsController@allNews')->name('news.all');
Route::get('/edit-news/{id}', 'NewsController@editNews')->name('news.edit');
Route::post('/update-news/{id}', 'NewsController@updateNews')->name('news.update');
Route::get('/delete-news/{id}', 'NewsController@deleteNews')->name('news.delete');

//Social
Route::get('/add-social', 'SocialController@addSocial')->name('social.add');
Route::post('/save-social', 'SocialController@saveSocial')->name('social.save');
Route::get('/all-social', 'SocialController@allSocial')->name('social.all');
Route::get('/edit-social/{id}', 'SocialController@editSocial')->name('social.edit');
Route::post('/update-social/{id}', 'SocialController@updateSocial')->name('social.update');
Route::get('/delete-social/{id}', 'SocialController@deleteSocial')->name('social.delete');

//Contact
Route::get('/messages', 'ContactController@messages')->name('messages');
Route::get('/delete-messages/{id}', 'ContactController@deleteMessage')->name('message.delete');
Route::get('/contact-appearance', 'ContactController@contactAppearance')->name('contactconfig.edit');
Route::post('/update-contact-config', 'ContactController@updateContactConfig')->name('contactconfig.update');

//Newsletter
Route::get('/newsletters', 'NewsletterController@newsletters')->name('newsletters');
Route::get('/delete-newsletter/{id}', 'NewsletterController@delete_newsletter')->name('delete_newsletter');



//------------------FRONTEND----------------------------------------
Route::get('/about', 'AboutController@about')->name('about');
Route::post('/send-newsletter', 'NewsletterController@sendNewsletter')->name('newsletter.send');
Route::post('/send-message', 'ContactController@sendMessage')->name('message.send');
Route::get('/contact', 'ContactController@index')->name('contact.send');

//Social
Route::get('/socials', 'SocialController@socials')->name('socials');
Route::get('/social/{id}', 'SocialController@social')->name('social');

//News
Route::get('/news-list', 'NewsController@newslist')->name('news.list');
Route::get('/show-news/{id}', 'NewsController@showNews')->name('news.show');
