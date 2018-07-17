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

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Xinax\LaravelGettext\Facades\LaravelGettext;

Route::get('/', function () {

    return view('welcome');
});


Route::get('/lang/{locale?}', function ($locale) {

    LaravelGettext::setLocale($locale);
    return Redirect::to(URL::previous());
});
