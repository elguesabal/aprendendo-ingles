<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view("/", "/home");

// Study Topics
Route::view("study/BasicVerbs", "study/BasicVerbs");
Route::view("study/pronouns", "study/pronouns");
Route::view("study/NegativeForm", "study/NegativeForm");

// Exercises

// Route::get("exercises/UnjumbleIt", function () {
//     return view("exercises/UnjumbleIt");
// });
Route::view("exercises/UnjumbleIt", "exercises/UnjumbleIt");