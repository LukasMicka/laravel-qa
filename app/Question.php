<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public function aswers()
    {
        return $this->hasMany('\App\Answer');
    }
}
