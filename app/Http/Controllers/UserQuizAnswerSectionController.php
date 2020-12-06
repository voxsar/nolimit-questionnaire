<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\AnswerSection;
use Illuminate\Http\Request;

class UserQuizAnswerSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function index(Answer $answer)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function create(Answer $answer)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @param  \App\Models\AnswerSection  $answerSection
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer, AnswerSection $answerSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @param  \App\Models\AnswerSection  $answerSection
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer, AnswerSection $answerSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @param  \App\Models\AnswerSection  $answerSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer, AnswerSection $answerSection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @param  \App\Models\AnswerSection  $answerSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer, AnswerSection $answerSection)
    {
        //
    }
}
