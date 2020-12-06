<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function index(Quiz $quiz)
    {
        //
        $data = array(
            'choices' => $quiz->choices,
            'quiz' => $quiz
        );
        return view('quizzes.choices.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function create(Quiz $quiz)
    {
        //
        $data = array(
        	'quiz' => $quiz,
        	'sections' => $quiz->questions->unique('section')->pluck('section')
        );
        return view('quizzes.choices.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quiz $quiz)
    {
        //
        $choice = new Choice();
        $choice->choice = $request->choice;
        $choice->rating_value = $request->rating_value;
        $choice->section = $request->section;
        $choice->definition = $request->definition;
        $choice->quiz_id = $quiz->id;
        $choice->save();
        return redirect()->route('quizzes.choices.index', [$quiz]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz, Choice $choice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz, Choice $choice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz, Choice $choice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Choice  $choice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz, Choice $choice)
    {
        //
    }
}
