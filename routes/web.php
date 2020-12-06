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

Route::get('quizzes/{quiz}/users', [\App\Http\Controllers\QuizController::class, 'users'])->name("quizzes.user");
Route::post('quizzes/{quiz}/users', [\App\Http\Controllers\QuizController::class, 'selectuser'])->name("quizzes.selectuser");
Route::resource('quizzes', QuizController::class);
Route::resource('quizzes.questions', QuestionController::class);
Route::resource('quizzes.choices', ChoiceController::class);


Route::resource('users', UserController::class);
Route::resource('users.quizzes', UserQuizController::class);

Route::get('users/{user}/quizzes/{quiz}/answers/{answer}/section/{section}', [\App\Http\Controllers\UserQuizAnswerController::class, 'section'])->name("users.quizzes.answers.section");
Route::resource('users.quizzes.answers', UserQuizAnswerController::class);