<?php

use App\Http\Controllers\HelloWordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

//return view('welcome');
// Route::get('/', function () {
//     echo "Hallo";
// });

// Route::get('/admin',function (){
//     echo "Bowleh";
// });

//Untuk menampilkan apa saja yang diketik di URL
// Route::get('/{name}', function ($name){
//     echo "Hallo, $name";
// });

// Route::get('hello', "App\Http\Controllers\HelloWordController@index");

// Route::get("hello", [HelloWordController::class, "index"]);

// Route::get("hello/{name}", [HelloWordController::CLASS, "perkenalan"]);

Route::get("/todo", [TodoController::class, "index"]);

Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');

Route::get("/todo/create", [TodoController::class, "create"])->name("todo.create");
Route::post("/todo", [TodoController::class, "store"])->name("todo.store");

Route::get("/todo/{id}", [TodoController::class, "edit"]);
Route::put("/todo/{id}", [TodoController::class, "update"])->name("todo.update");