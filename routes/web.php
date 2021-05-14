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

//ci mettiamo resource al posto di get
//al posto di '/' ci andiamo a mettere il path 
//al posto di index mettiamo solo MovieController
Route::resource('movies', 'MovieController');
    //definiamo il valore di questa chiave
    //la rotta movies.index si chiama ora listafilm
    


Route::get('/', function() {
    return view('homepage');
});