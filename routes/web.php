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
Route::view("study/basic-verbs", "study/basic-verbs");
Route::view("study/pronouns", "study/pronouns");
Route::view("study/negative-form", "study/negative-form");
Route::view("study/negation-auxiliary", "study/negation-auxiliary");
Route::view("study/verb-conjugation", "study/verb-conjugation");
Route::view("study/plural", "study/plural");
Route::view("study/interrogative-words", "study/interrogative-words");
Route::view("study/alphabet-pronunciation", "study/alphabet-pronunciation");
Route::view("study/preposition-place", "study/preposition-place");

// Exercises
Route::view("exercises/UnjumbleIt", "exercises/UnjumbleIt");