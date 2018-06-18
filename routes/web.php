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
    //dd(\App\Post::get());
})->name('welcome');
Route::get('/test', function () {
    return view('test');
})->name('test');
//Route::post('/test', function (\Illuminate\http\request $request) {
//    $email = $request->get('email');
//
//    $password = $request->get('password');
//
//    $text = "Your data is $email , $password";
//
//return  $text;

//})->name('test.post');
Route::get('/show', function () {
    return view('show');
});

Route::get('/show', [
    'uses' => 'TestController@index',
    'as' => 'test.get',
]);
Route::get('/show', [
    'uses' => 'TestController@index',
    'as' => 'test.get2',
]);
//Route::get('/posts', [
//    'uses' => 'PostController@index',
//    'as'=> 'test.index',
//]);
Route::group([
    'prefix' => 'posts',
    'as' => 'posts.'
], function () {
    Route::get('/', 'PostController@index')->name('list');
    Route::get('create', 'PostController@create')->name('create');
    Route::post('store', 'PostController@store')->name('store');
    Route::get('{post}/edit', 'PostController@edit')->name('edit');
    Route::post('{post}/update', 'PostController@update')->name('update');
    Route::get('{post}/delete', 'PostController@delete')->name('delete');

    //Route::view('store','posts.store');

    // Route::view('create','posts.create');   review this page with out method
});

Route::get('/about', [
    'uses' => 'PostController@about',
    'as' => 'test.about',
]);
Route::group([
    'prefix' => 'category',
    'as' => 'categories.'
], function () {
    Route::get('/', 'PostController@category')->name('list');
    Route::get('create', 'PostController@create_category')->name('create');
    Route::post('store', 'PostController@store_category')->name('store');
    Route::get('{post}/edit', 'PostController@edit_category')->name('edit');
    Route::post('{post}/update', 'PostController@update_category')->name('update');
    Route::get('{post}/delete', 'PostController@delete_category')->name('delete');

});