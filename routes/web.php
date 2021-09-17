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
    return view('home');
})->name('/');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/boutique', function () {
    return view('boutique.home');
})->middleware(['auth'])->name('boutique.home');

Route::get('/members', function () {
    return view('members');
})->middleware(['auth'])->name('members');

Route::get('/public/recipes','App\Http\Controllers\RecipesController@public')->name('recipes.public');
Route::get('/public/recipes/{recipe}','App\Http\Controllers\RecipesController@showRestricted')->name('recipes.show-restricted');
Route::resource('recipes', 'App\Http\Controllers\RecipesController')->middleware(['auth']);

require __DIR__.'/auth.php';
