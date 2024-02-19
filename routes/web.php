<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'App\Http\Controllers\PageController@home');
Route::get('programmes/nursing', 'App\Http\Controllers\PageController@nursing');
Route::get('programmes/community-nursing', 'App\Http\Controllers\PageController@community_nursing');
Route::get('programmes/basic-midwifery', 'App\Http\Controllers\PageController@basic_midwifery');
Route::get('programmes/community-midwifery', 'App\Http\Controllers\PageController@community_midwifery');