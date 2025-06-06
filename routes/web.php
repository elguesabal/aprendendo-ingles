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
Route::view("study/basicVerbs", "study/basicVerbs");
Route::view("study/pronouns", "study/pronouns");
Route::view("study/negativeForm", "study/negativeForm");
Route::view("study/negationAuxiliary", "study/negationAuxiliary");
Route::view("study/verbConjugation", "study/verbConjugation");

// Exercises
Route::view("exercises/UnjumbleIt", "exercises/UnjumbleIt");