<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
