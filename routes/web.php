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
// Route::get('/', function () {
//     return ('Selamat Datang');
// });
// Route::get('/about', function () {
//     return ('1931710112 Tsania Risqi El Istiqomah');
// });
// Route::get('/artikel/{id}', function ($id){
//     return ("Halaman artikel dengan id " .$id);
// });

//Jobsheet2-Praktikum2 no1
// Route::get('/', 'PageController@home');
// Route::get('/about', 'PageController@about');
// Route::get('/articles/{id}', 'PageController@articles');

//Jobsheet2-Praktikum2 no2
// Route::get('/', 'HomeController@home');
// Route::get('/about', 'AboutController@about');
// Route::get('/article/{id}', 'ArticleController@articles');


Auth::routes();

Route::get('/home', 'HomeController@getByAll');
Route::get('/home/{article}', 'HomeController@getById');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/article/{id}', 'HomeController@getById');
Route::post('/article/{id}', 'ArticleController@insertData')->name('insertData');
Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/add','ArticleController@add');
Route::post('/create','ArticleController@create');
Route::get('/edit/{id}','ArticleController@edit');
Route::post('/update/{id}','ArticleController@update');
Route::get('/delete/{id}','ArticleController@delete');
Route::get('/article/cetak_pdf', 'ArticleController@cetak_pdf');
Route::get('/manage/search2', 'ArticleController@search2');
Route::get('/manage/search', 'HomeController@search');
Route::get('manage/article/{id}', 'HomeController@getById');