<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function questions()
    {
    	# code...
    	return $this->hasMany("App\Models\Question");
    }

    public function choices()
    {
    	# code...
    	return $this->hasMany("App\Models\Choice");
    }

    public function answers()
    {
        return $this->hasMany("App\Models\Answer");
    }
}
