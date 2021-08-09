<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //

    //thkis model was actually created when the table country was also created using the artisan command
    // not always use the naming convention for the id's like user_id.. role_id.. country_id.. because laravel actually recognises
    //this ids as the standard format but if you are using another naming convention make sure to include it in th paramerter 
    //after the app\user below as stated.


    //relating the two tables together to pull out the information

    public function posts()
    {
        # code...
                // binding the user id from the post table and the countries id from the user's table and attaching it
                //to the post method
        return $this->hasManyThrough('App\Post', 'App\User');
    } 
}
