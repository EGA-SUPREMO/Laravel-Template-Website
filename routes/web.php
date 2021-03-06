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
       return redirect('/en');
});

Route::get('/{lang}', function ($lang) {
	App::setLocale($lang);

    return view('welcome');
});

Route::post('/{lang}', function ($lang) {
	App::setLocale($lang);

    return view('welcome', ['message' => 'Sorry, this function isn\'t available right now.']);
});