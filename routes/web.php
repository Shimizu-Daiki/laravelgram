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

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'PostsController@index');
    Route::resource('posts', 'PostsController');
    Route::get('/postsdelete/{post_id}', 'PostsController@destroy');
    
    
    Route::get('/user/edit', 'UsersController@edit')->name('user.edit');
    Route::post('/users/update', 'UsersController@update');

    Route::get('/users/{user_id}', 'UsersController@show');
    
    Route::group(['prefix' => 'posts/{id}'], function () {
        Route::post('favorite', 'UserFavoriteController@store')->name('favorites.favorite');
        Route::delete('unfavorite', 'UserFavoriteController@destroy')->name('favorites.unfavorite');
        

        
    });
});
