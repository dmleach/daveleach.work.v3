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

Route::get('/', 'Home\HomeController');
Route::get('/home', 'Home\HomeController');
Route::get('/contact', 'Contact\ContactController');
Route::get('/projects', 'Projects\ProjectsController');
