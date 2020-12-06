<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function answers()
    {
        # code...
        return $this->hasMany("App\Models\Answer");
    }

    public function sections()
    {
        # code...
        return $this->hasMany("App\Models\AnswerSection");
    }

    public function getNextSectionAttribute()
    {
    	$sections = Question::where('quiz_id', $this->quiz_id)->get()->unique('section')->pluck('section');

    	foreach ($sections as $key => $section) {
    		if($section == $this->section){
    			if(($key+1) < count($sections)){
    				return $sections[$key+1];
    			}else{
    				return $sections[$key];
    			}
    		}
    	}
    }

    public function getPreviousSectionAttribute()
    {
    	$sections = Question::where('quiz_id', $this->quiz_id)->get()->unique('section')->pluck('section')->reverse();

    	foreach ($sections as $key => $section) {
    		if($section == $this->section){
    			if(($key-1) >= 0){
    				return $sections[$key-1];
    			}else{
    				return $sections[$key];
    			}
    		}
    	}
    }
}
