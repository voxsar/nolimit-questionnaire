<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = array('quizzes' => Quiz::all());
        return view('quizzes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $quiz = new Quiz();
        $quiz->name = $request->name;
        $quiz->purpose = $request->purpose;
        $quiz->instructions = $request->instructions;
        $quiz->save();
        return redirect()->route('quizzes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
        $data = array(
            'quiz' => $quiz,
            'questions' => $quiz->questions->groupBy('section')->groupBy('category'),
            'next' => $quiz->questions->pluck('section')->first()
        );
        return view('quizzes.show', $data);
    }

    public function section(Quiz $quiz, $section)
    {
        $data = array(
            'quiz' => $quiz,
            'sections' => $quiz->questions->where('section', $section)->groupBy('category'),
            'choicetitles' => $quiz->choices->where('section', $section),
            'section' => $section,
        );
        //return $data;
        return view('quizzes.section', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
        $data = array('quiz' => $quiz);
        return view('quizzes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
        $quiz->name = $request->name;
        $quiz->purpose = $request->purpose;
        $quiz->instructions = $request->instructions;
        $quiz->save();
        return redirect()->route('quizzes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
        $quiz->delete();
    }
}
