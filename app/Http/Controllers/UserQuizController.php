<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Quiz;
use App\Models\User;
use Illuminate\Http\Request;

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
                    $table->push([
                        "score" => "Score: ".$key,
                        "total" => $choices->max('rating_value') * $questions->count(),
                    ]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Quiz $quiz)
    {
        //
        return $request;
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
