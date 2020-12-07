<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
            'questions' => $quiz->questions,
            'quiz' => $quiz
        );
        return view('quizzes.questions.index', $data);
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
        $data = array('quiz' => $quiz);
        return view('quizzes.questions.create', $data);
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
        $question = new Question();
        $question->question = $request->name;
        $question->category = $request->category;
        $question->section = $request->section;
        $question->type = $request->type;
        $question->quiz_id = $quiz->id;
        $question->save();
        return redirect()->route('quizzes.questions.index', $quiz);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz, Question $question)
    {
        //
        $data = array(
            'quiz' => $quiz,
            'question' => $question
        );
        return view('quizzes.questions.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz, Question $question)
    {
        //
        $data = array(
            'quiz' => $quiz,
            'question' => $question
        );
        return view('quizzes.questions.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz, Question $question)
    {
        //
        if($request->has("submit")){
            if($request->submit == "Update Section Name"){
                Question::where('quiz_id', $quiz->id)
                    ->where('section', $question->section)
                    ->update(['section' => $request->section]);
            }
        }
        $question->question = $request->name;
        $question->category = $request->category;
        $question->section = $request->section;
        $question->type = $request->type;
        $question->quiz_id = $quiz->id;
        $question->save();

        return redirect()->route('quizzes.questions.index', $quiz);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz, Question $question)
    {
        //
    }
}
