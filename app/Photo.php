<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//This photo.php is actually the model where we build our relations and execute other php commands and operations so just note!


class Photo extends Model
{
    // public function so that it can be assessible from any other applications or php files included
    public function imageable(){   // imageable is the convention for photos

                return $this->morphTo();


    }
}


