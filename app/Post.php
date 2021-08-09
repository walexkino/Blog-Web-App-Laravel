<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    //
    protected $table = "post";  // to allow certain method to be used to create data

    protected $fillable = ['title', 'content', 'image_path']; //meaning its safe for the title and content to be updated


        protected $dates = ['delete_at'];

        public function user() {

            return $this->belongsTo('App\User');
        
        }


        public function photos()

        {

              return $this->morphMany('App\Photo', 'imageable');
        }


        public function tags()
        {
                return $this->morphToMany('App\Tag', 'taggable');
        }
}
