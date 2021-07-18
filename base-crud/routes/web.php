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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*

((posts = index ; post = show))

Sette routes restful:

GET posts/ -> read risorsa dal database (1)

GET posts/{post} -> read etc (1.2)

GET posts/create -> crea risorsa (tramite form) (2)

POST posts -> salva risorsa nel database (redirect) (3)

GET posts/{post}/edit -> modifica risorsa (tramite form) (4)

PUT/PATCH posts/{post} -> aggiorna risorsa nel database (5)

DELETE posts/{post} -> cancella risorsa (6)

*/


/*
COMMANDS

NomeController + 

@index = (1)

@show = (1.2)

@create = (2)

@store = (3)

@edit = (4)

@update = (5)

@destroy = (6)

*/


/*

Route::((get))("URI", "NameController@command")->name();

*/


Route::get("issues", "CrudController@index")->name("issues");
Route::get("", "CrudController@show")->name("issues.show");
Route::get("", "CrudController@create")->name("issues.create");
Route::post("", "CrudController@store")->name("issues.store");
Route::get("", "CrudController@edit")->name("issues.edit");
Route::put("", "CrudController@update")->name("issues.update");
Route::delete("", "CrudController@destroy")->name("issues.delete");

