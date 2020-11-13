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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// *******Admin Panel Routes******//

Route::group(['prefix'=>'admin'], function (){
    Route::get('dashboard', 'DashboardController@dashboard')->name('admin.dashboard');

    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('author', 'AuthorController');
    Route::resource('tag', 'TagController');

});
