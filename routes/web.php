<?php

use App\Http\Controllers\Controller as ControllersController;
use App\Http\Controllers\MenuController;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepage', 'HomeController@homepage')->name('Home page');
Route::get('/menu', 'MenuController@menu')->name('menu');
Route::get('/menu/category/{id}', 'MenuController@category')->name('category');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/stores', 'HomeController@stores')->name('stores');
Route::get('/product/{id}', 'MenuController@detail')->name('detail');
Route::post('/menu', 'MenuController@search')->name('search');