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
Route::get('programmes/basic-nursing', 'App\Http\Controllers\PageController@basic_nursing');
Route::get('programmes/basic-midwifery', 'App\Http\Controllers\PageController@basic_midwifery');