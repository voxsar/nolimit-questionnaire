<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function choices()
    {
    	# code...
    	return $this->hasMany("App\Models\Choice");
    }

    public function answers()
    {
    	# code...
    	return $this->hasMany("App\Models\Answer");
    }
}
