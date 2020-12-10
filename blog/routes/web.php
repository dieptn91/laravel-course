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
//:: la static method, static class la phuowng thuc goi ham ma khong can phai new object truoc
//de truy cap 1 link trong lrv,dieu huong ta dung route
// cu phap Route::get('/ten thu muc hoac link tren url','ten controller dung de dieu huong@ ham trong controller do')->name('ten dai dien cho route do');

Route::get('/content-blog','ArticleController@viewblog')->name('contentview');//route dieu huong den controller ArticleController
Route::get('/content-blog','ArticleController@readblog')->name('readcontent');
Route::resource('/content','ArticlereController');//route dieu huong controller duoc tao bang resource

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
