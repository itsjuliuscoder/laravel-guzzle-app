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

// Routes for the Public platform
Route::get('/', 'PublicController@index');

Route::get('/latest', 'PublicController@latest');

Route::get('/subjects', 'PublicController@subject'); 

Route::get('/topics', 'PublicController@topics');

Route::get('/article', 'PublicController@article');

Route::get('/article/get-started-afrihow', 'PublicController@article_afrihow');

Route::get('/about', 'PublicController@about');

Route::get('/contact', 'PublicController@contact');

Route::get('/api-docs', 'PublicController@apidocs');

Route::get('/terms-privacy-policies', 'PublicController@terms');

Route::get('/faqs', 'PublicController@faqs');

Route::get('/for-students', 'PublicController@students');

Route::get('/for-professionals', 'PublicController@professionals');

Route::get('/for-entrepreneurs', 'PublicController@entrepreneurs');

Route::get('/for-government', 'PublicController@government');

Route::get('/for-corporate-bodies', 'PublicController@corporate');

Route::get('/for-business', 'PublicController@business');

Route::get('/for-international-companies', 'PublicController@international');

Route::get('/api-overview', 'PublicController@apioverview');

Route::get('/international_companies', 'PublicController@international');




Auth::routes();

Route::get('home', function () {
    return redirect('login');
});

// Grouping the publisher's pages
Route::group(['prefix' => 'publisher'], function() {
    
    Route::get('/home', 'PublisherController@home')->name('home');

    Route::get('/create-subject', 'PublisherController@subject')->name('create-subject');

    Route::post('/create_subj', 'CRUDController@create_subj')->name('create_subj');

    Route::get('/create-topic', 'PublisherController@topic')->name('create-topic');

    Route::post('/create_topic', 'CRUDController@create_topic')->name('create_topic');

    Route::get('/create-article', 'PublisherController@article')->name('create-article');

    Route::post('/create_article', 'CRUDController@create_article')->name('create_article');

    Route::get('/article', 'PublisherController@articles')->name('article');

    Route::get('/category', 'PublisherController@category')->name('category');

    Route::get('/profile', 'PublisherController@profile')->name('profile');

    Route::get('/notification', 'PublisherController@notification')->name('notification');

    Route::get('/update-subject/{id}', 'PublisherController@update_subject')->name('update-subject');

    Route::put('/update_subject/{id}', 'CRUDController@update_subject')->name('update_subject');
    
    Route::get('/update-article/{id}', 'PublisherController@update_article')->name('update-article');

    Route::get('/update-topic/{id}', 'PublisherController@update_topic')->name('update-topic');

    Route::put('/update_topic/{id}', 'CRUDController@update_topic')->name('update_topic');
    
    Route::get('/article-view', 'PublisherController@articles_view')->name('article-view');

    Route::get('/update-profile', 'PublisherController@update_profile')->name('update-profile');

    Route::put('/update_profile/{id}', 'UserController@updateUserDetails')->name('updateUserDetails');

    Route::put('/update_subject/{id}', 'CRUDController@update_subject')->name('update_subject');

    Route::get('/get_profile_img', 'UserController@getUserProfileImg')->name('get_profile_img');

    Route::get('/get_all_reactions', 'CRUDController@get_all_reactions')->name('get_all_reactions');

    Route::get('/get_category', 'CRUDController@get_all_categories')->name('get_all_categories');

    Route::get('/list-articles', 'PublisherController@articles_all')->name('list-articles');

    Route::get('/list-topic', 'PublisherController@topic_all')->name('list-topic');

    Route::get('/my-subject', 'PublisherController@my_subject')->name('my-subject');

    Route::get('/my-topics', 'PublisherController@my_topics')->name('my-topic');

    Route::get('/feedback', 'PublisherController@feedback')->name('feedback');

    Route::post('/send-feedback', 'CRUDController@send_feedback')->name('send_feedback');

    Route::get('/live-view', 'LiveController@index')->name('live-view');

    Route::get('/live-view/latest', 'LiveController@latest')->name('live-view-latest');

    Route::get('/live-view/subjects', 'LiveController@subject')->name('live-view-subjects');

    Route::get('/live-view/topics', 'LiveController@topics')->name('live-view-topics');

    Route::get('/live-view/article', 'LiveController@article')->name('live-view-article');

    Route::get('/subject-created', 'CRUDController@status_subject')->name('status_subject');

    Route::get('/topic-created', 'CRUDController@status_subject')->name('status_topic');

    Route::get('/article-created', 'CRUDController@status_subject')->name('status_article');
    
});


//Grouping the users' platform 
Route::group(['prefix' => 'users'], function(){

    Route::get('/home', 'UserController@home')->name('home');

    Route::get('/profile', 'UserController@profile')->name('profile');

    Route::get('/subjects', 'UserController@subject')->name('subjects');

    Route::get('/create_subject', 'UserController@create_subject')->name('create_subject');

    Route::get('/topics', 'UserController@topics')->name('create_topic');

    Route::get('/create_topic', 'UserController@create_topic')->name('create_topic');

    Route::get('/create_story', 'UserController@create_article')->name('create_article');

    Route::get('/article', 'UserController@article')->name('article');

});

// Routes for the Publishers platform
Route::get('/login', 'Auth\AuthController@showForm')->name('login');

Route::match(['get', 'post'], '/confirmation/{token}', ['as' => 'confirmation', 'uses' => 'Auth\AuthController@confirmation']);

Route::post('/login_user', 'Auth\AuthController@authenticate')->name('login_user');

Route::get('/confirm-email', 'Auth\AuthController@confirm')->name('login_user');

Route::get('/register', 'PublisherController@register')->name('register');

Route::post('/create_user', 'PublisherController@create_user')->name('create_user');

Route::get('/reset-password', 'PublisherController@forget')->name('forget');

Route::get('/create_new_password/{id}', 'PublisherController@reset', ['as' => 'reset', 'uses' => 'PublisherController@reset' ])->name('create-new-password');

Route::get('/password-link-sent', 'Auth\AuthController@password_link')->name('forget');

Route::get('/password-created', 'Auth\AuthController@password_created')->name('forget');

Route::post('/password_recovery', 'Auth\AuthController@password_recovery')->name('password_recovery');

Route::put('/create_password/{id}', 'Auth\AuthController@create_new_password')->name('create_new_password');

Route::get('/logout_user', 'Auth\AuthController@logout_page')->name('logout_user');

Route::get('/logout', 'Auth\AuthController@logout')->name('logout');

Route::get('/recovery-password', 'Auth\AuthController@recovery_password')->name('recovery_password');

Route::get('/resend-email', 'Auth\AuthController@resend_email')->name('resend_email');

Route::post('/email_resend', 'Auth\AuthController@email_resend')->name('email_resend');


// Routes for the Admin' Platform 
Route::group(['prefix' => 'admin'], function() { 

    Route::get('/login', 'AdminController@index')->name('login');

    Route::get('/login_admin', 'AdminController@login_admin')->name('login');

    Route::get('/reset-password', 'AdminController@reset_password')->name('reset-password');

    Route::get('/home', 'AdminController@home')->name('reset-password');

});


Route::group(['middleware' => 'custom.auth'], function () {
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    
});
