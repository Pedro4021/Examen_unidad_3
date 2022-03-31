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
Route::get('/yeomen', function () {





    return view ('blog.index');


}) ->name('yeomen');
Route::get('/definicion', function () {





    return view ('blog.definicion');


}) ->name('definicion');
Route::get('/utilizar', function () {





    return view ('blog.utilizar');


}) ->name('utilizar');
Route::get('/vs', function () {





    return view ('blog.vs');


}) ->name('vs');
Route::get('api', [App\Http\Controllers\APIController::class, 'index'])->name('api');
Route::get('/links', function () {
    $notes = DB::table('links')->get();
    return view('blog.links', ['links' => $notes]);
})->name('links');