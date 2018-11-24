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

//ISSUES
Route::get('/add-issue', 'IssuesController@addIssue')->name('issue.add');
Route::post('/save-issue', 'IssuesController@saveIssue')->name('issue.save');
Route::get('/all-issue', 'IssuesController@allIssue')->name('issue.all');
Route::get('/edit-issue/{id}', 'IssuesController@editIssue')->name('issue.edit');
Route::post('/update-issue/{id}', 'IssuesController@updateIssue')->name('issue.update');
Route::get('/delete-issue/{id}', 'IssuesController@deleteIssue')->name('issue.delete');
Route::get('/issue-appearance', 'IssuesController@issueAppearance')->name('issue.appearance');

//NEWS
Route::get('/add-news', 'NewsController@addNews')->name('news.add');
Route::post('/save-news', 'NewsController@saveNews')->name('news.save');
Route::get('/all-news', 'NewsController@allNews')->name('news.all');
Route::get('/edit-news/{id}', 'NewsController@editNews')->name('news.edit');
Route::post('/update-news/{id}', 'NewsController@updateNews')->name('news.update');
Route::get('/delete-news/{id}', 'NewsController@deleteNews')->name('news.delete');




//Contact
Route::get('/messages', 'ContactController@messages')->name('messages');
Route::get('/delete-messages/{id}', 'ContactController@deleteMessage')->name('message.delete');
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

//News
Route::get('/news-list', 'NewsController@newslist')->name('news.list');
Route::get('/show-news/{id}', 'NewsController@showNews')->name('news.show');
