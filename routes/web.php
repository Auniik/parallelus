<?php

Route::get('/', function () {
    return view('frontend.home.home');
})->name('root');


Route::group(['middleware'=>'auth'],function(){
    //Admin Routes
    Route::get('/admin', function () {
        return view('backend.dashboard');
    })->name('admin');

    //Site Config
    Route::get('/settings', 'ConfigurationController@editConfig')->name('config.edit');
    Route::post('/settings/update', 'ConfigurationController@updateConfig')->name('config.update');
    Route::post('/settings/save', 'ConfigurationController@store')->name('config.save');

    //Slider
    Route::get('/slider/add', 'SliderController@addSlider')->name('slider.add');
    Route::post('/slider/save', 'SliderController@saveSlider')->name('slider.save');
    Route::get('/slider/all', 'SliderController@allSlider')->name('slider.all');
    Route::get('/slider/{id}/delete', 'SliderController@deleteSlider')->name('slider.delete');
    Route::get('/slider/{id}/edit', 'SliderController@editSlider')->name('slider.edit');
    Route::post('/slider/{id}/update', 'SliderController@updateSlider')->name('slider.update');
    Route::get('/slider/{id}/active', 'SliderController@activeSlider')->name('slider.active');
    Route::get('/slider/{id}/inactive', 'SliderController@inactiveSlider')->name('slider.inactive');

    //About
    Route::get('/about/edit', 'AboutController@editAbout')->name('about.edit');
    Route::post('/about/save', 'AboutController@saveAbout')->name('about.save');
    Route::post('/about/background/update', 'AboutController@updateAboutBg')->name('about.background');

    Route::get('/feature/edit', 'FeatureController@editFeature')->name('feature.edit');
    Route::post('/feature/save', 'FeatureController@saveFeature')->name('feature.save');

    //ISSUES
    Route::get('/issue/add', 'IssuesController@addIssue')->name('issue.add');
    Route::post('/issue/save', 'IssuesController@saveIssue')->name('issue.save');
    Route::get('/issue/all', 'IssuesController@allIssue')->name('issue.all');
    Route::get('/issue/{id}/edit/', 'IssuesController@editIssue')->name('issue.edit');
    Route::post('/issue/{id}/update/', 'IssuesController@updateIssue')->name('issue.update');
    Route::get('/issue/{id}/delete/', 'IssuesController@deleteIssue')->name('issue.delete');
    Route::get('/issue/appearance', 'IssuesController@issueAppearance')->name('issue.appearance');
    Route::post('/issue/appearance/update', 'IssuesController@updateIssueConfig')->name('issueconfig.update');

    //NEWS
    Route::get('/news/add', 'NewsController@addNews')->name('news.add');
    Route::post('/news/save', 'NewsController@saveNews')->name('news.save');
    Route::get('/news/all', 'NewsController@allNews')->name('news.all');
    Route::get('/news/{id}/edit/', 'NewsController@editNews')->name('news.edit');
    Route::post('/news/{id}/update/', 'NewsController@updateNews')->name('news.update');
    Route::get('/news/{id}/delete/', 'NewsController@deleteNews')->name('news.delete');

    //Social
    Route::get('/social/add', 'SocialController@addSocial')->name('social.add');
    Route::post('/social/save', 'SocialController@saveSocial')->name('social.save');
    Route::get('/social/all', 'SocialController@allSocial')->name('social.all');
    Route::get('/social/{id}/delete/', 'SocialController@deleteSocial')->name('social.delete');

    //Videos
    Route::get('/video/add', 'VideoController@addVideo')->name('video.add');
    Route::post('/video/save', 'VideoController@saveVideo')->name('video.save');
    Route::get('/video/all', 'VideoController@allVideo')->name('video.all');
    Route::get('/video/{id}/edit/', 'VideoController@editVideo')->name('video.edit');
    Route::post('/video/{id}/update/', 'VideoController@updateVideo')->name('video.update');
    Route::get('/video/{id}/delete/', 'VideoController@deleteVideo')->name('video.delete');

    //Events
    Route::get('/event/add', 'EventController@addEvent')->name('event.add');
    Route::post('/event/save', 'EventController@saveEvent')->name('event.save');
    Route::get('/event/all', 'EventController@allEvent')->name('event.all');
    Route::get('/event/{id}/edit/', 'EventController@editEvent')->name('event.edit');
    Route::post('/event/{id}/update/', 'EventController@updateEvent')->name('event.update');
    Route::get('/event/{id}/delete/', 'EventController@deleteEvent')->name('event.delete');

    //Contact
    Route::get('/messages', 'ContactController@messages')->name('messages');
    Route::get('/message/{id}/delete/', 'ContactController@deleteMessage')->name('message.delete');
    Route::get('/contact/appearance', 'ContactController@contactAppearance')->name('contactconfig.edit');
    Route::post('/contact/appearance/update', 'ContactController@updateContactConfig')->name('contactappearance.update');

    //Newsletter
    Route::get('/newsletters', 'NewsletterController@newsletters')->name('newsletters');
    Route::get('/newsletter/{id}/delete', 'NewsletterController@deleteNewsletter')->name('newsletter.delete');

});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//------------------FRONTEND----------------------------------------
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/features', 'FeatureController@feature')->name('feature');
Route::get('/newsletter', 'NewsletterController@newsletter')->name('newsletter');
Route::post('/newsletter/send', 'NewsletterController@sendNewsletter')->name('newsletter.send');
Route::post('/message/send', 'ContactController@sendMessage')->name('message.send');
Route::get('/contact', 'ContactController@index')->name('contact.send');
//Issues
Route::get('/issues', 'IssuesController@issues')->name('issues');
Route::get('/issue/{id}', 'IssuesController@issue')->name('issue');
//Social
Route::get('/socials', 'SocialController@socials')->name('socials');
Route::get('/social/{id}', 'SocialController@social')->name('social');

//News
Route::get('/news', 'NewsController@newslist')->name('news');
Route::get('/news/{id}/show', 'NewsController@showNews')->name('news.show');

//videos
Route::get('/videos', 'VideoController@videos')->name('videos');

//Events
Route::get('/events', 'EventController@events')->name('events');