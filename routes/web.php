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

Route::get('/', function () {
    //récupérer données bd
    $actualites = App\Actualite::all();
    $stages = App\Stage::all();
    return view('welcome', ['actualites' => $actualites, 'stages' => $stages]);
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('actualites', 'ActualiteController');
Route::resource('stages', 'StageController');






