<?php

// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index');
Route::get('/about', 'PostsController@get_about');
Route::get('/posts', 'PostsController@show_post');
Route::get('/contact', 'PostsController@show_contact');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
