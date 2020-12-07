<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
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

    public function users(Quiz $quiz)
    {
        # code...
        $data = array(
            'quiz' => $quiz
        );
        return view("quizzes.users", $data);
    }

    public function selectuser(Request $request)
    {
        # code...
        $user = User::where('emp_no', $request->emp_no)->first();
        if($user){
            return redirect()->route('users.quizzes.show', [$user, $request->quiz_id]);
        }else{
            return redirect()->route('quizzes.user', $request->quiz_id);
        }
    }

    public function groupsections($group)
    {
        # code...
        $quizzes = Quiz::where('group', $group)->get();
        $quiz = Quiz::where('group', $group)->first();
        $data = array(
            'group' => $group,
            'quizzes' => $quizzes,
            'quiz' => $quiz,
        );
        return view("quizzes.groups", $data);
    }

    public function groupselectuser(Request $request)
    {
        # code...
        $user = User::where('emp_no', $request->emp_no)->first();
        if($user){
            return redirect()->route('quizzes.list', [$request->group, $user]);
        }else{
            return redirect()->route('quizzes.group', $request->group);
        }
    }

    public function grouplists($group, User $user)
    {
        # code...
        $quizzes = Quiz::where('group', $group)->get();
        $data = array(
            'quizzes' => $quizzes,
            'user' => $user,
        );
        return view("quizzes.grouplist", $data);
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
        $quiz->group = $request->group;
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
            'quiz' => $quiz,
            'questions' => $quiz->questions->groupBy('section')->groupBy('category'),
            'next' => $quiz->questions->pluck('section')->first(),
            'designations' => User::all(),
            'table' => $table,
        );
        return view('quizzes.show', $data);
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
        $quiz->group = $request->group;
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
