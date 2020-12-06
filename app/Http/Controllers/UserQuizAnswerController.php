<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quiz;
use App\Models\Answer;
use Illuminate\Http\Request;

class UserQuizAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function index(User $user, Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Quiz $quiz
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, Quiz $quiz)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user, Quiz $quiz)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Quiz $quiz, Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Quiz $quiz, Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Quiz $quiz, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Quiz $quiz, Answer $answer)
    {
        //
    }
}
