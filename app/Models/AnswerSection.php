<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerSection extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function answer()
    {
    	# code...
    	return $this->belongsTo('App\Models\Answer');
    }

    public function question()
    {
    	# code...
    	return $this->belongsTo('App\Models\Question');
    }

    public function user()
    {
    	# code...
    	return $this->belongsTo('App\Models\User');
    }
}
