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
});

Auth::routes();






//HTTP Verb	Path (URL)	Action (Method)	Route Name
//GET	/nerds	index	nerds.index
//GET	/nerds/create	create	nerds.create
//POST	/nerds	store	nerds.store
//GET	/nerds/{id}	show	nerds.show
//GET	/nerds/{id}/edit	edit	nerds.edit
//PUT/PATCH	/nerds/{id}	update	nerds.update
//DELETE	/nerds/{id}	destroy	nerds.destroy

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/treatments', 'TreatmentController@index')->name('treatment');
Route::get('/consultation', 'ConsultationController@index');
Route::get('/consultation/create', 'ConsultationController@create');
Route::post('/consultation', 'ConsultationController@store');
Route::get('/consultation/{id}/edit','ConsultationController@edit');
Route::post('/consultation/{id}','ConsultationController@update');
Route::get('/priority/create/{id}','PriorityController@create');
Route::get('/question/create','QuestionController@create');

Route::get('/survey/create/{priority}/{id}', 'SurveyController@create');
Route::post('/survey/{priority}/{id}', 'SurveyController@store');


Route::get('/advice/disclaimer/{priority}/{id}', 'AdviceController@disclaimer');

Route::get('/report/{priority}/{id}', 'ReportController@index');