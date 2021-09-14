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

Route::resource('recipes', 'App\Http\Controllers\RecipesController')->middleware(['auth']);
Route::get('/my-recipes','App\Http\Controllers\RecipesController@userIndex')
    ->middleware(['auth'])->name('recipes.user-index');
//Route::get('/recipes/create','App\Http\Controllers\RecipesController@create');
//Route::post('/recipes','App\Http\Controllers\RecipesController@store');
//Route::get('/recipes','App\Http\Controllers\RecipesController@index')->name('recipes.index');
//Route::get('/recipes/{recipe}','App\Http\Controllers\RecipesController@show')->name('recipes.show');
//Route::get('/recipes/{recipe}/edit','App\Http\Controllers\RecipesController@edit');
//Route::put('/recipes/{recipe}','App\Http\Controllers\RecipesController@update');

require __DIR__.'/auth.php';
