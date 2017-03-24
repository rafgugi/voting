<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hallo', function () {
    return 'hello semua';
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login');
});

Route::get('/logout', 'LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'showQuestion', 'uses' => 'HomeController@show']);
    Route::get('vote/{id}', ['as' => 'showDetailQuestion', 'uses' => 'HomeController@vote']);
    Route::post('vote/{id}', ['as' => 'voteQuestion', 'uses' => 'HomeController@vote']);
    Route::get('result/{id}', ['as' => 'showResult', 'uses' => 'HomeController@result']);
});

Route::group(['middleware' => ['auth', 'role:student']], function () {
    Route::get('question/manage', ['as' => 'showManageQuestion', 'uses' => 'QuestionController@manage']);
    Route::get('question/add', ['as' => 'showAddQuestion', 'uses' => 'QuestionController@add']);
    Route::post('question/add', ['as' => 'addQuestion', 'uses' => 'QuestionController@add']);
    Route::get('question/update/{id}', ['as' => 'showUpdateQuestion', 'uses' => 'QuestionController@update']);
    Route::post('question/update/{id}', ['as' => 'updateQuestion', 'uses' => 'QuestionController@update']);
    Route::get('question/delete/{id}', ['as' => 'deleteQuestion', 'uses' => 'QuestionController@delete']);
});

// route untuk CRUD option nya dibikin sendiri ya

Route::get('option/add', ['as' => 'showAddOption', 'uses' => 'OptionController@add']);
Route::post('option/add', ['as' => 'addOption', 'uses' => 'OptionController@add']);