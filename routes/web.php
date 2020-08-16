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
// ====================== LOGIN ============================
Route::get('admin/login', 'Admin\LoginController@getLogin')->name('admin.getLogin');
Route::post('admin/login', 'Admin\LoginController@postLogin')->name('admin.postLogin');
Route::group(["prefix" => "admin", "middleware" => "IsAdmin"], function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin.dashboard');
    Route::get('ckfinder-customer', 'Admin\CkfinderController@ckfinderView')->name('ckfinder-customer');
    // =============== LOGOUT ====================
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    // ===================== CATE POST ========================
    Route::group(['prefix' => 'cate_post'], function() {
        Route::get('/', 'Admin\CatePostController@index')->name('admin.cate_post.home');
        Route::get('/create', 'Admin\CatePostController@create')->name('admin.cate_post.create');
        Route::post('/create', 'Admin\CatePostController@postCreate')->name('admin.cate_post.createPost');
        Route::get('/update/{slug}', 'Admin\CatePostController@update')->name('admin.cate_post.update');
        Route::post('/update/{slug}', 'Admin\CatePostController@postUpdate')->name('admin.cate_post.postUpdate');
        Route::get('/destroy/{id}', 'Admin\CatePostController@destroy')->name('admin.cate_post.destroy');
        Route::post('/status', 'Admin\CatePostController@status')->name('admin.cate_post.status');
    });
    // =================== POST ============================
    Route::group(['prefix' => 'post'], function() {
        Route::get('/', 'Admin\PostController@index')->name('admin.post.index');
        Route::get('/create', 'Admin\PostController@create')->name('admin.post.create');
        Route::post('/create', 'Admin\PostController@postCreate')->name('admin.post.createPost');
        Route::get('/update/{slug}', 'Admin\PostController@update')->name('admin.post.update');
        Route::post('/update/{slug}', 'Admin\PostController@postUpdate')->name('admin.post.postUpdate');
        Route::get('/destroy/{id}', 'Admin\PostController@destroy')->name('admin.post.destroy');
        Route::get('/search', 'Admin\PostController@search')->name('admin.post.search');
        Route::post('/checkbox', 'Admin\PostController@checkbox')->name('post.checkbox');
        Route::post('/status', 'Admin\PostController@status')->name('admin.post.status');
        Route::post('/is_home', 'Admin\PostController@is_home')->name('admin.post.is_home');
    });
    // ===================== SETTING ========================
    Route::get('setting', 'Admin\SettingController@index')->name('admin.setting');
    Route::post('setting/update', 'Admin\SettingController@update')->name('admin.setting.update');
    // ========================= ADMIN ==========================
    Route::group(['prefix' => 'administrator'], function() {
        Route::get('/', 'Admin\AdministratorController@index')->name('admin.administrator.home');
        Route::get('/anyData', 'Admin\AdministratorController@anyData')->name('anyData');
        Route::get('/create', 'Admin\AdministratorController@create')->name('admin.administrator.create');
        Route::post('/create', 'Admin\AdministratorController@postCreate')->name('admin.administrator.createPost');
        Route::get('/update/{id}', 'Admin\AdministratorController@update')->name('admin.administrator.update');
        Route::post('/update/{id}', 'Admin\AdministratorController@postUpdate')->name('admin.administrator.postUpdate');
        Route::get('/destroy/{id}', 'Admin\AdministratorController@destroy')->name('admin.administrator.destroy');
    });
    // ======================= INTRO ===========================
    Route::group(['prefix' => 'intro'], function() {
        Route::get('/', 'Admin\IntroController@index')->name('admin.intro.index');
        Route::get('/create', 'Admin\IntroController@create')->name('admin.intro.create');
        Route::post('/create', 'Admin\IntroController@postCreate')->name('admin.intro.createPost');
        Route::get('/update/{slug}', 'Admin\IntroController@update')->name('admin.intro.update');
        Route::post('/update/{slug}', 'Admin\IntroController@postUpdate')->name('admin.intro.postUpdate');
        Route::get('/destroy/{slug}', 'Admin\IntroController@destroy')->name('admin.intro.destroy');
        Route::post('/status', 'Admin\IntroController@status')->name('admin.intro.status');
    });

    // ====================== ẢNH + BANNER =====================
    Route::group(['prefix' => 'slide'], function() {
        Route::get('/', 'Admin\SlideController@index')->name('admin.slide.index');
        Route::get('/create', 'Admin\SlideController@create')->name('admin.slide.create');
        Route::post('/create', 'Admin\SlideController@postCreate')->name('admin.slide.createPost');
        Route::get('/update/{id}', 'Admin\SlideController@update')->name('admin.slide.update');
        Route::post('/update/{id}', 'Admin\SlideController@postUpdate')->name('admin.slide.postUpdate');
        Route::get('/destroy/{id}', 'Admin\SlideController@destroy')->name('admin.slide.destroy');
        Route::post('/status', 'Admin\SlideController@status')->name('admin.slide.status');

    });
});

Route::get('/','Frontend\IndexController@index')->name('frontend.index');
