<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::namespace('Api')->prefix('api')->name('api.')->group(function () {
    Route::post('/posts', 'PostsController@index')->name('get.posts');
    Route::post('/t', 'TagsController@index')-> name('get.tags');
});


Route::domain('m.jp2jmd.pl')->group(function () {
    Route::get('/', function () {
        return view('mobile_work');
    });
    Route::namespace('Mobile')->name('mobile.')->group(function () {
        Route::get('/home', 'IndexController@index')->name('index');
        Route::get('/gorace', 'IndexController@index')->name('posts.hot.index');
        Route::get('/popularne', 'IndexController@index')->name('posts.trending.index');
        Route::get('/nowe', 'IndexController@index')->name('posts.fresh.index');
        Route::get('/nowy','IndexController@index')->name('posts.create.index');
        Route::get('/u/{id}','UserController@index')->name('user.index');
        Route::get('/ustawienia','UserController@index')->name('user.settings.index');

    });
});

Route::domain('jp2jmd.pl')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });


    Route::any('/logout',function(){
        Auth::logout();
        return redirect()->route('home.index');
    })->name('logout');

    Route::namespace('Home')->name('home.')->group(function () {
        Route::get('/home', 'IndexController@index')->name('index');
        Route::get('/gorace', 'IndexController@index')->name('posts.hot.index');
        Route::get('/popularne', 'IndexController@index')->name('posts.trending.index');
        Route::get('/nowe', 'IndexController@index')->name('posts.fresh.index');
        Route::get('/nowy','IndexController@index')->name('posts.create.index');
        Route::get('/u/{id}','UserController@index')->name('user.index');
        Route::get('/ustawienia','UserController@index')->name('user.settings.index');


    });

    Route::group(['middleware' => ['admin']], function () {
        Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
            Route::get('/', 'IndexController@index')->name('index');
            Route::resource('users', 'UsersController');
            Route::resource('posts', 'PostsController');
            Route::resource('groups', 'GroupsController');
            Route::resource('permissions', 'PermissionsController');
            Route::prefix('settings')->name('settings.')->group(function () {
                Route::resource('', 'SettingsController');
            });
            Route::namespace('Bots')->prefix('bots')->name('bots.')->group(function () {
              Route::resource('', 'BotsController');
              Route::resource('statistics', 'StatisticsController');
              Route::resource('advanced', 'AdvancedController');
            });
           Route::namespace('Servers')->prefix('servers')->name('servers.')->group(function () {
              Route::resource('', 'ServersController');
             Route::resource('statistics', 'StatisticsController');
             Route::resource('advanced', 'AdvancedController');
            });
        });
    });

});
