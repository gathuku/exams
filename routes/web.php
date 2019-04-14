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
    return view('auth2.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
  'user' => 'UserController',
  'semester' => 'SemesterController',
  'exam' => 'ExamController',
  'unit' => 'UnitController',
  'registerunit' => 'RegisterunitController',
  'mark' => 'MarkController',
  'session' => 'SessionController',


]);

//Lecture

Route::get('/lecturer','LecturerController@index')->name('lecturer.index');
Route::get('/lecturer/create','LecturerController@create')->name('lecturer.create');
Route::post('/lecturer/store','LecturerController@store')->name('lecturer.store');
Route::get('/lecturer/{id}/edit','LecturerController@edit')->name('lecturer.edit');
Route::post('/lecturer/{id}/update','LecturerController@update')->name('lecturer.update');



Route::post('/unit/change','UnitController@unitChange')->name('unit-change');
Route::post('/unit/register','RegisterunitController@saveUnits')->name('unit-register');

//transcript
Route::get('/transcript/download','PdfController@generateTranscript')->name('download-transcript');
Route::get('/transcript','PdfController@transcript');
Route::post('/transcript/view','PdfController@viewTanscript')->name('view-transcript');

//retake routes
Route::get('/retakes','RegisterunitController@loadRetakes')->name('load-retakes');
Route::get('/retakes/apply/{id}','RegisterunitController@applyRetakes')->name('apply-retakes');

//Payment Routes
Route::post('/retakes/payment','PaymentController@mpesaExpress')->name('pay-retakes');
