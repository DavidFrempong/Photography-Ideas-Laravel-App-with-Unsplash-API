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


// Accounts

Route::get('/account', 'App\Http\Controllers\AccountController@index');



// Accounts & Projects

Route::get('/account/projects', 'App\Http\Controllers\ProjectController@index');

Route::get('/account/projects/create', 'App\Http\Controllers\ProjectController@create');

Route::post('/account/projects', 'App\Http\Controllers\ProjectController@store');

Route::get('/account/projects/{id}', 'App\Http\Controllers\ProjectController@show');

Route::get('/account/projects/{id}/edit', 'App\Http\Controllers\ProjectController@edit');

Route::put('/account/projects/{id}/', 'App\Http\Controllers\ProjectController@update');

Route::get('/account/projects/{id}/delete', 'App\Http\Controllers\ProjectController@destroy');





// Pages

Route::get('/', 'App\Http\Controllers\PageController@index');

Route::get('/results', 'App\Http\Controllers\PageController@results');

Route::get('/search', 'App\Http\Controllers\PageController@index');

Route::get('/search/{keyword}', 'App\Http\Controllers\PageController@search');


// Images

Route::get('/projects/images/{image_information}/add', 'App\Http\Controllers\ImageController@create')->middleware(['auth']);

Route::get('/projects/images/{image_information}/delete', 'App\Http\Controllers\ImageController@destroy')->middleware(['auth']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

