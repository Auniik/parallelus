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
Route::get('/add-issue', 'IssuesController@addIssue')->name('issue.add');
Route::post('/save-issue', 'IssuesController@saveIssue')->name('issue.save');
Route::get('/all-issue', 'IssuesController@allIssue')->name('issue.all');
Route::get('/edit-issue/{id}', 'IssuesController@editIssue')->name('issue.edit');
Route::post('/update-issue/{id}', 'IssuesController@updateIssue')->name('issue.update');
Route::get('/delete-issue/{id}', 'IssuesController@deleteIssue')->name('issue.delete');
Route::get('/issue-appearance', 'IssuesController@issueAppearance')->name('issue.appearance');
Route::post('/update-issue-config', 'IssuesController@updateIssueConfig')->name('issueconfig.update');

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

//Videos
Route::get('/add-video', 'VideoController@addVideo')->name('video.add');
Route::post('/save-video', 'VideoController@saveVideo')->name('video.save');
Route::get('/all-video', 'VideoController@allVideo')->name('video.all');
Route::get('/edit-video/{id}', 'VideoController@editVideo')->name('video.edit');
Route::post('/update-video/{id}', 'VideoController@updateVideo')->name('video.update');
Route::get('/delete-video/{id}', 'VideoController@deleteVideo')->name('video.delete');

//Events
Route::get('/add-event', 'EventController@addEvent')->name('event.add');
Route::post('/save-event', 'EventController@saveEvent')->name('event.save');
Route::get('/all-event', 'EventController@allEvent')->name('event.all');
Route::get('/edit-event/{id}', 'EventController@editEvent')->name('event.edit');
Route::post('/update-event/{id}', 'EventController@updateEvent')->name('event.update');
Route::get('/delete-event/{id}', 'EventController@deleteEvent')->name('event.delete');
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
//Issues
Route::get('/issues', 'IssuesController@issues')->name('issues');
Route::get('/issue/{id}', 'IssuesController@issue')->name('issue');
//Social
Route::get('/socials', 'SocialController@socials')->name('socials');
Route::get('/social/{id}', 'SocialController@social')->name('social');

//News
Route::get('/news-list', 'NewsController@newslist')->name('news.list');
Route::get('/show-news/{id}', 'NewsController@showNews')->name('news.show');

//videos
Route::get('/videos', 'VideoController@videos')->name('videos');