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

Route::get('/', ['as' => '/', 'uses' => 'LoginController@getLogin']);
Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@postLogin']);


Route::get('/show', ['as' => 'showTableInformation', 'uses' => 'CourseController@getSearchCourses']);


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['authen','roles']], function () {
    Route::post('/logout', ['as' => 'logout', 'uses' => 'LoginController@getLogout']);
    require __DIR__ . '/admin/panel_admin.php';
});

Route::group(['middleware' => ['authen','roles'],'roles'=>'admin'], function () {
   require __DIR__ . '/admin/panel_admin.php';
});
Route::get('noPermission',['as'=>'noPermission',function(){
    return view('errors.access_denied');
}]);