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


Route::group([
	'prefix' => '{locale}', 
  	'where' => ['locale' => '[a-zA-Z]{2}'], 
  	'middleware' => 'setlocale'], function() {
  		Route::get('/', 'HomeController@index')->name('home');
    	Route::get('/recipes', 'RecipeController@index')->name('recipes');
    	Route::get('/recipes/{id}', 'RecipeController@recipe')->name('recipe');

});


