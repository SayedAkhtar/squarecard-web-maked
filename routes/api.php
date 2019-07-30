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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//List all article
Route::get('article', 'ArticleController@index');

//Show one article
Route::get('article/{id}', 'ArticleController@show');

//Create a article
Route::post('article/create', 'ArticleController@store');

//Update a article
Route::put('article/edit/{id}', 'ArticleController@edit');

//Delete an article
Route::delete('article/{id}', 'ArticleController@destroy');







// ================================= Share Joy =======================//
Route::post('/user/{email}','authenticationController@login');
Route::post('/user/{id}','authenticationController@signup');

//Route::get('userurl/{userurls}', 'UserUrlController@index');
Route::get('userurl/{invitecode}', 'UserUrlController@invite');
Route::get('userurl/{userurls}/edit/story/{id}', 'UserUrlController@getStory');

//Edit Routes
Route::post('userurl/{userurls}/edit/story/{id}', 'UserUrlController@editStory');
Route::post('userurl/{userurls}/edit/schedule/{id}', 'UserUrlController@editSchedule');
Route::post('userurl/{userurls}/edit/family/{id}', 'UserUrlController@editfamily');
Route::post('userurl/{userurls}/edit/basic-details/{id}', 'UserUrlController@editBasicDetails');
Route::post('userurl/{userurls}/edit/rsvp/{id}', 'UserUrlController@editRsvp');
Route::post('userurl/{userurls}/edit/images/{id}', 'UserUrlController@editImages');


//Create Routes
Route::post('userurl/{userurls}/create/story', 'UserUrlController@createStory');
Route::post('userurl/{userurls}/create/schedule', 'UserUrlController@createSchedule');
Route::post('userurl/{userurls}/create/family', 'UserUrlController@createfamily');
Route::post('userurl/{userurls}/create/basic-details', 'UserUrlController@createBasicDetails');
Route::post('userurl/{userurls}/create/faq', 'UserUrlController@createFaq');
Route::post('userurl/{userurls}/create/rsvp', 'UserUrlController@createRsvp');
Route::post('userurl/{userurls}/create/images', 'UserUrlController@createImages');

Route::post('userurl/{userurls}/re', 'UserUrlController@re');



//Delete Routes
Route::delete('userurl/{userurls}/delete/story/{id}', 'UserUrlController@deleteStory');
Route::delete('userurl/{userurls}/delete/schedule/{id}', 'UserUrlController@deleteSchedule');
Route::delete('userurl/{userurls}/delete/family/{id}', 'UserUrlController@deletefamily');
Route::delete('userurl/{userurls}/delete/basic-details/{id}', 'UserUrlController@deleteBasicDetails');
Route::delete('userurl/{userurls}/delete/rsvp/{id}', 'UserUrlController@deleteRsvp');
Route::delete('userurl/{userurls}/delete/images/{id}', 'UserUrlController@deleteImages');
