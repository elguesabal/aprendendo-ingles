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

// Study topics
Route::view("studyTopics/BasicVerbs", "studyTopics/BasicVerbs");
Route::view("studyTopics/pronouns", "studyTopics/pronouns");
Route::view("studyTopics/NegativeForm", "studyTopics/NegativeForm");

// Exercises

// Route::get("exercises/UnjumbleIt", function () {
//     return view("exercises/UnjumbleIt");
// });
Route::view("exercises/UnjumbleIt", "exercises/UnjumbleIt");
