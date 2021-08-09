<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =   [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function post() {

                return $this->hasOne('App\Post');
    
    }


    public function posts()
    {

        return $this->hasMany('App\Post');
 
    }

        //kindly read for understanding 
    //this is where we define the relationships for the relation of created at column in users table from a roles function for
    //a later user by the route.php stuff
    //country php is actuallly  a model and its created when ever a new table is created in the database using the arstain command
    public function roles() {

        return $this->belongsToMany('App\Role')->withPivot('created_at');


        // To customize table names and columns follow the format below

        // return $this->belongsToMany('App\Role', 'user_name','user_id','role_id');
        
    }


    public function photos()

        {

            return $this->morphMany('App\Photo', 'imageable');
        }




                        public function getNameAttribute($var)
                        {
                            # code...


                        return  strtoupper($var);
                        }


                        public function setNameAttribute($value)
                        {

                            $this -> attributes['name'] = strtoupper($value);
                        }
    }
