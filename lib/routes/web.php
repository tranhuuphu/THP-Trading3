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




Route::group(['namespace'=>'Admin'], function(){
	Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function(){
			Route::get('/', 'LoginController@getLogin');
			Route::post('/', 'LoginController@postLogin');
	});
	Route::get('logout', 'HomeController@getLogout');


	Route::group(['prefix' => 'admin', 'middleware' => 'CheckLogedOut'], function(){
		// Route::group(['middleware' => ['auth']], function() {
		//     Route::resource('roles','RoleController');
		//     Route::resource('users','UserController');
		//     Route::resource('products','ProductController');
		// });
		Route::get('/', 'HomeController@getHome');
		Route::get('home', 'HomeController@getHome');
		Route::group(['prefix' => 'cate'], function(){
			Route::get('/', 'CateController@getCate');
			Route::post('/', 'CateController@postCate');

			Route::get('edit/{id}', 'CateController@getEditCate');
			Route::post('edit/{id}', 'CateController@postEditCate');

			Route::get('delete/{id}', 'CateController@getDeleteCate');
		});

		Route::group(['prefix' => 'post', 'middleware' => ['auth']], function(){
			Route::get('/', 'PostController@getPost');

			Route::get('add', 'PostController@getAddPost');
			Route::post('add', 'PostController@postAddPost');

			Route::get('edit/{id}', 'PostController@getEditPost');
			Route::post('edit/{id}', 'PostController@postEditPost');

			Route::get('delete/{id}', 'PostController@getDeletePost');

		});

		Route::group(['prefix' => 'carousel'], function(){
			Route::get('/', 'CarouselController@getCarousel');
			Route::post('/', 'CarouselController@postCarousel');

			Route::get('edit/{id}', 'CarouselController@getEditCarousel');
			Route::post('edit/{id}', 'CarouselController@postEditCarousel');

			Route::get('delete/{id}', 'CarouselController@getDeleteCarousel');
		});

		Route::group(['prefix' => 'page'], function(){
			Route::get('/', 'PageController@getPage');

			Route::get('add', 'PageController@getAddPage');
			Route::post('add', 'PageController@postAddPage');

			Route::get('edit/{id}', 'PageController@getEditPage');
			Route::post('edit/{id}', 'PageController@postEditPage');

			Route::get('delete/{id}', 'PageController@getDeletePage');

		});

		Route::group(['prefix' => 'user'], function(){
			Route::get('/', 'UserController@getUser');

			Route::get('add', 'UserController@getAddUser');
			Route::post('add', 'UserController@postAddUser');

			Route::get('edit/{id}', 'UserController@getEditUser');
			Route::post('edit/{id}', 'UserController@postEditUser');

			Route::get('delete/{id}', 'UserController@getDeleteUser');

		});
	});
});

Route::group(['middleware' => ['auth']], function() {
	Route::group(['namespace' => 'admin', 'prefix' => 'admin'], function(){   
	   Route::resource('roles','RoleController');
	   Route::resource('users','UserController');
	});
});

Route::get('site-map.xml', 'SiteController@getSiteMap');

Route::get('/{page}.html', 'SiteController@getPage');

Route::get('search', 'SiteController@getSearch');

Route::get('/', 'SiteController@getHome');

Route::get('/{slug}', 'SiteController@getCatePost');


Route::get('{cate}/{post_slug}.html', 'SiteController@getPost');



// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
