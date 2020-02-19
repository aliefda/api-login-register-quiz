<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    public $table = "kuis";
    protected $fillable = [
        'question', 'correct_answer','incorrect_answers',
    ];
    
}
