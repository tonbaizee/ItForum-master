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
//Home Controller
Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/loginConfirm','HomeController@loginConfirm');
Route::get('/contact','HomeController@contact');
Route::get('/news','HomeController@news');


//DataBase Controller
Route::get('/insert','StudInsertController@insertform');
Route::post('/createContact','StudInsertController@insert');
Route::post('/addEvent','StudInsertController@insertIntoNews');
Route::post('/sendMessage/{id}','StudInsertController@insertIntoDiscussion');
Route::post('/createNewTopic','StudInsertController@createNewTopic');

//AdminController
Route::get('/admin','AdminController@index');
Route::get('/admin/addEvent','AdminController@addEvent');
Route::get('/admin/getUsers','AdminController@getUsers');

//News
Route::get('/news/{event}',function ($id){
    $news = DB::table('news')->find($id);
    return view('currentEvent',compact('news'));
});

//ForumController
Route::get('/forum','ForumController@index');
Route::get('/forum/solution/{unTopicId}','ForumController@solution');
Route::get('/forum/project/{unTopicId}','ForumController@project');
Route::get('/forum/event/{unTopicId}','ForumController@event');
Route::get('/forum/discussion/{unTopicId}','ForumController@discussion');
Route::get('/forum/createNewTopic','ForumController@createNewTopic');
