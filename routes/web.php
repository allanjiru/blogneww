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




Route::middleware(['auth'])->group(function () {

	Route::resource('categories', 'CategoryController');
	Route::resource('posts', 'PostController');
	Route::resource('tags', 'TagController');
	Route::resource('users', 'UsersController');
	Route::resource('profiles', 'ProfilesController');

	Route::get('/user/admin/{id}',[

		'uses' => 'UsersController@admin',

		'as' => 'user.admin'

	]);


	Route::get('/user/not-admin/{id}',[

		'uses' => 'UsersController@not_admin',

		'as' => 'user.not.admin'

	]);

	Route::get('user/profile',[

		'uses' => 'ProfilesController@index',
		'as' => 'user.profile'

	]);

	Route::post('user/profile/update',[

		'uses' => 'ProfilesController@update',
		'as' => 'user.profile.update'

	]);

	
});

Route::get('/', 'PagesController@index');

Route::get('/post/{slug}',[

		'uses' => 'PagesController@singlePost',
		'as' => 'post.single'

	]);
Route::get('/category/{category_id}',[

		'uses' => 'PagesController@filter_categories',
		'as' => 'category.filter'

	]);
Route::get('/tag/{tag_id}',[

		'uses' => 'PagesController@filter_tags',
		'as' => 'tag.filter'

	]);
Route::post('/subscribe/email',[

		'uses' => 'SubscribeController@store',
		'as' => 'subscribes.store'

]);
Route::post('/results',[

		'uses' => 'PagesController@search',
		'as' => 'search.results'

]);
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
