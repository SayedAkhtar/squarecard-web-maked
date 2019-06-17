<?php
use App\Http\Controllers\builderFrontend;

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

Route::get('/builder', 'builderFrontend@login');
Route::get('/builder/signup', 'builderFrontend@signup');
Route::get('/builder/information', 'builderFrontend@signupInformation');
Route::post('/builder/information', 'builderFrontend@createUser');
Route::post('/builder/information/checkurl', 'builderFrontend@checkUserUrl');
Route::get('/builder/dashboard', 'builderFrontend@showDashboard')->name('dashboard');

Route::get('/builder/dashboard/template-edit', 'builderFrontend@listTemplates')->name('templates');


//Basic Details
Route::get('/builder/dashboard/basic-details', 'basicDetailsCRUD@index');
Route::post('/builder/dashboard/basic-details/edit', 'basicDetailsCRUD@edit');

//Story
Route::get('/builder/dashboard/story', "storyCRUD@index")->name('story');
Route::get('/builder/dashboard/story/edit/{id}', "storyCRUD@show");
Route::post('/builder/dashboard/story/edit/{id}', "storyCRUD@edit");
Route::get('/builder/dashboard/story/add', "storyCRUD@add");
Route::post('/builder/dashboard/story/add', "storyCRUD@create");
Route::post('/builder/dashboard/story/delete', "storyCRUD@destroy");


//Schedule
Route::get('/builder/dashboard/schedule', "scheduleCRUD@index")->name('schedule');
Route::get('/builder/dashboard/schedule/edit/{id}', "scheduleCRUD@show");
Route::get('/builder/dashboard/schedule/add', "scheduleCRUD@store");
Route::post('/builder/dashboard/schedule/add', "scheduleCRUD@create");
Route::post('/builder/dashboard/schedule/edit/{id}', "scheduleCRUD@edit");
Route::post('/builder/dashboard/schedule/delete/{id}', "scheduleCRUD@destroy");

// Family Detail
Route::get('/builder/dashboard/family-details', "familyCRUD@index")->name('family');
Route::get('/builder/dashboard/family-details/edit/{id}', "familyCRUD@show");
Route::get('/builder/dashboard/family-details/add', "familyCRUD@add");
Route::post('/builder/dashboard/family-details/add', "familyCRUD@create");
Route::post('/builder/dashboard/family-details/edit/{id}', "familyCRUD@edit");
Route::post('/builder/dashboard/family-details/delete/{id}', "familyCRUD@destroy");

// Couple
Route::get('/builder/dashboard/about', "aboutCRUD@index")->name('about');
Route::get('/builder/dashboard/about/edit/{id}', "aboutCRUD@show");
Route::get('/builder/dashboard/about/add', "aboutCRUD@add");
Route::post('/builder/dashboard/about/add', "aboutCRUD@create");
Route::post('/builder/dashboard/about/edit/{id}', "aboutCRUD@store");


// Image
Route::get('/builder/dashboard/photo-gallery', "photoCRUD@index")->name('photo');
Route::get('/builder/dashboard/photo-gallery/edit/{id}', "photoCRUD@show");
Route::get('/builder/dashboard/photo-gallery/add', "photoCRUD@add");
Route::post('/builder/dashboard/photo-gallery/add', "photoCRUD@create");
Route::post('/builder/dashboard/photo-gallery/edit/{id}', "photoCRUD@store");
Route::post('/builder/dashboard/photo-gallery/delete', "photoCRUD@destroy");

// Registry
Route::get('/builder/dashboard/registry', "registryCRUD@index")->name('registry');
Route::get('/builder/dashboard/registry/edit/{id}', "registryCRUD@show");
Route::get('/builder/dashboard/registry/add', "registryCRUD@add");
Route::post('/builder/dashboard/registry/add', "registryCRUD@create");
Route::post('/builder/dashboard/registry/edit/{id}', "registryCRUD@edit");
Route::post('/builder/dashboard/registry/delete', "registryCRUD@destroy");




Route::get('login/facebook', 'Auth\LoginController@redirectToFacebookProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookProviderCallback');
Route::get('login/google', 'Auth\LoginController@redirectToGoogleProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleProviderCallback');



// POST ROUTES




Route::get('ge', 'ArticleController@index');
// Route::get('/{userurl}', 'UserUrlController@page');



// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@land');
Route::get('/{id}', 'HomeController@index');

