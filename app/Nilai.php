<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    public $table = "nilais";
    protected $fillable = [
        'nama', 'nilai',
    ];
    
}
