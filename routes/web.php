<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('quizzes/{quiz}/section/{section}', [\App\Http\Controllers\QuizController::class, 'section'])->name("quizzes.section");
Route::resource('quizzes', QuizController::class);
Route::resource('quizzes.questions', QuestionController::class);
Route::resource('quizzes.choices', ChoiceController::class);
Route::resource('quizzes.answers', 'QuestionController');