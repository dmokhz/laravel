<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/blog',function(){
  return view('auth.login');
});

Auth::routes();
Route::resource('posts', 'App\Http\Controllers\PostController')->middleware('auth');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
