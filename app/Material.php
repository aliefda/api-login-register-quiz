<?php

namespace App;

use App\Traits\UuidTrait;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use UuidTrait;
    public $table = "material";
    protected $fillable = [
        'thumbnail', 'title', 'content',
    ];
    
}
