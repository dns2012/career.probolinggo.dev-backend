<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'guest', 'namespace' => 'Api', 'prefix' => 'post'], function() {
    Route::get('', 'PostController@getAll')->name('get.post.list');
    Route::get('{id}', 'PostController@getById')->name('get.post');
    Route::get('slug/{slug}', 'PostController@getBySlug')->name('get.post.slug');
    Route::get('category/{id}', 'PostController@getByCategoryId')->name('get.post.category');
    Route::get('company/{id}', 'PostController@getByCompanyId')->name('get.post.company');
    Route::get('search/title', 'PostController@searchByTitle')->name('get.post.title.like');
});

Route::group(['middleware' => 'guest', 'namespace' => 'Api', 'prefix' => 'company'], function() {
    Route::get('', 'CompanyController@getAll')->name('get.company.list');
    Route::get('{id}', 'CompanyController@getById')->name('get.company');
});

Route::group(['middleware' => 'guest', 'namespace' => 'Api', 'prefix' => 'category'], function() {
    Route::get('', 'CategoryController@getAll')->name('get.category.list');
});

Route::group(['namespace' => 'Api', 'prefix' => 'subscribe'], function () {
    Route::post('', 'SubscriberController@subscribe')->name('subscribe');
});