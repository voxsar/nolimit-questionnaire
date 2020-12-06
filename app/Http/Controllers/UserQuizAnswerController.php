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

    public function section(User $user, Quiz $quiz, Answer $answer, $section)
    {
        $data = array(
            'user' => $user,
            'quiz' => $quiz,
            'answer' => $answer,
            'sections' => $quiz->questions->where('section', $section)->groupBy('category'),
            'choicetitles' => $quiz->choices->where('section', $section),
            'section' => $section,
            'back' => $quiz->questions->where('section', $section)->first()->previoussection,
            'next' => $quiz->questions->where('section', $section)->first()->nextsection,
        );
        return view('quizzes.section', $data);
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
        if($request->has("questions")){
            foreach ($request->questions as $key => $value) {
                # code...
                if(array_key_exists('answer', $value)){
                    $answer->sections()->updateOrCreate(
                        [
                            'user_id' => $user->id,
                            'answer_id' => $answer->id,
                            'question_id' => $value['question'],
                        ],
                        [
                            'answer' => $value['answer'],
                            'category' => $value['category'],
                            'section' => $value['section'],
                            'type' =>  $value['type'],
                        ]
                    );
                }else{
                   return redirect()->back();
                }
            }
        }
        if($request->has('next')){
            if($request->next == $request->current){
                return redirect()->route('thankyou');
            }else{
                return redirect()->route("users.quizzes.answers.section", [$user, $quiz, $answer, $request->next]);
            }
        }else{
            return redirect()->route('thankyou');
        }
        
    }

    public function thankyou()
    {
        # code...
        return view("quizzes.thankyou");
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
