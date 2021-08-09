<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //this tag is gonna be shared by many; so those we are gonna be sharing it with are listed in the parameter

    public function posts(){


                return $this->morphedByMany('App\Post', 'taggable');

    }

    public function videos(){


        return $this->morphedByMany('App\Video', 'taggable');

}
}
