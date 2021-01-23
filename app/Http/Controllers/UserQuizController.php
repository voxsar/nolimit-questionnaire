<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Answer;
use Illuminate\Http\Request;
use App\Http\Requests\RequestUserQuiz;

class UserQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
        $data = array(
        	'user' =>  $user,
        	'quizzes' =>  Quiz::all()
        );
        return view('users.quizzes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Quiz $quiz)
    {
        //$choices->max('rating_value') * $questions->count()
        $table = collect();
        foreach($quiz->choices->groupBy('section') as $choices){
            foreach($quiz->questions->groupBy('section') as $key => $questions){
                foreach($choices as $choice){
                    if($choice->section == $key){
                        $table->push([
                            "score" => "Score: ".$key,
                            "total" => $choices->max('rating_value') * $questions->count(),
                            "answer" => $questions->sum(function ($question) {
                                            return $question->sections->sum('answer');
                                        }),
                        ]);
                    }
                }
            }
        }
        $data = array(
            'date' => Carbon::now()->format('Y-m-d'),
            'user' => $user,
            'quiz' => $quiz,
            'questions' => $quiz->questions->groupBy('section')->groupBy('category'),
            'next' => $quiz->questions->pluck('section')->first(),
            'designations' => User::all(),
            'table' => $table,
        );
        return view('users.quizzes.show', $data);
    }

    public function print(User $user, Quiz $quiz)
    {
        $choices = $quiz->choices;
        $questions = $quiz->questions;

        $table = array();

        $data = array(
            'date' => Carbon::now()->format('Y-m-d'),
            'user' => $user,
            'quiz' => $quiz,
            'questions' => $quiz->questions->groupBy('section')->groupBy('category'),
            'next' => $quiz->questions->pluck('section')->first(),
            'designations' => User::all(),
            'table' => $table,
        );
        return view('users.quizzes.print', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
            $category = $choice->mapToGroups(function ($item, $key) {
                return [$item['department'] => $item['name']];
            });
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Quiz $quiz)
    {
        //
        $table = collect();
        foreach($quiz->choices->groupBy('section') as $choices){
            foreach($quiz->questions->groupBy('section') as $key => $questions){
                foreach($choices as $choice){
                    if($choice->section == $key){
                        $table->push([
                            "score" => "Score: ".$key,
                            "total" => $choices->max('rating_value') * $questions->count(),
                            "answer" => $questions->sum(function ($question) {
                                            return $question->sections->sum('answer');
                                        }),
                        ]);
                    }
                }
            }
        }
        $answer = Answer::where('user_id', $user->id)->where('quiz_id', $quiz->id)->first();
        if(!$answer){
            return redirect()->route('users.quizzes.show', [$user, $quiz]);
        }
        $data = array(
            'date' => Carbon::now()->format('Y-m-d'),
            'user' => $user,
            'quiz' => $quiz,
            'answer' => $answer,
            'questions' => $quiz->questions->groupBy('section')->groupBy('category'),
            'next' => $quiz->questions->pluck('section')->first(),
            'designations' => User::all(),
            'table' => $table,
        );
        return view('users.quizzes.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(RequestUserQuiz $request, User $user, Quiz $quiz)
    {
        //
        $answer = Answer::firstOrCreate(
            [
                'quiz_id' => $quiz->id,
                'user_id' => $user->id,
            ],
            [
                'date_appraisal' => $request->date_appraisal, 
                'evaluator' => $request->evaluator,
                'direct_supervisor' => $request->direct_supervisor,
                'department_head' => $request->department_head,
            ]
        );
        return redirect()->route("users.quizzes.answers.section", [$user, $quiz, $answer, $request->next]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Quiz $quiz)
    {
        //
    }
}
