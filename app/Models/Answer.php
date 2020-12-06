<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function user()
    {
    	# code...
    	return $this->belongsTo('App\Models\User');
    }

    public function quiz()
    {
    	# code...
    	return $this->belongsTo('App\Models\Quiz');
    }
}
