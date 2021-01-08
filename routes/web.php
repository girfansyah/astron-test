<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('blog', 'App\Http\Controllers\Article@list');

Auth::routes();
Route::get('home', 'App\Http\Controllers\HomeController@index');


// Social Login
Route::get('/auth/{provider}', 'App\Http\Controllers\Auth\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'App\Http\Controllers\Auth\SocialiteController@handleProviderCallback');
;

// Route::group(['middleware' => ['auth',"cekrole:typeA"]], function () {
//   Route::get('home-a', 'App\Http\Controllers\HomeController@homeTypeA');
// });

// Route::group(['middleware' => ['auth',"cekrole:typeB"]], function () {
//   Route::get('home-b', 'App\Http\Controllers\HomeController@homeTypeB');
// });

// Route::group(['middleware' => ['auth',"cekrole:typeC"]], function () {
//   Route::get('home-c', 'App\Http\Controllers\HomeController@homeTypeC');
// });
