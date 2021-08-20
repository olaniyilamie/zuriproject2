<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TakeMessage;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/zuristage2olamiee', 'TakeMessage@loadpage');


Route::post('/zuristage2olamiee','TakeMessage@contactMessages')->name('messagesent');
Route::get('/yourmessages','TakeMessage@displayMessage')->middleware('auth');
