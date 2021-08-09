<?php


use App\Post;
use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Tag;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
    // return "Admin is here";
}); 


// Route::get('/about', function () {
//     return 'welcome to my about page';
//     // return "Admin is here";
// }); 


// Route::get('/postme/{id}/{name}', function ($id, $name) {
//     return "my lucky number is = ".$id." and my name is = ".$name;
//     // return 'welcome to my contact page';
//     // return "Admin is here";
// }); 

// // Route::get('/post/{id}', 'PostsController@index');

// Route::get('/post/{id}', 'PostsController@index');

// // Route::resource('/posts/{me}', 'PostsController');

// Route::get('/contact', 'PostsController@contact');

// Route::get('/post', 'PostsController@post');

// Route::get('/showview/{username}/{password}', 'PostsController@ShowView');


// //SQL RAW QURIES 
// //Insert data live and direct
// Route::get('/insert', function()
// {

//     DB::insert('insert into post(title,content) values(? , ?)', ['LARAVEL', 'Laravel is getting me out of my freaking 
//     mind already']);
//     // DB::table('post')->insert(    ['title' => 'LARAVEL'], ['content' => 'Laravel is getting me out of my freaking mind already']     );
// }
// );

// //Display data live and direct
// Route::get('/read', function()
// {
//     $myresult=DB::select('select * from post where id= ?', [2]);

//     // var_dump($myresult);

//     foreach ($myresult as $postme)
//     {
//         return $postme->content;
//     }
//  }

// );

// //update database using raw sql queries


// Route::get('/update', function()
//  {
//     $updated = DB::update('update post set title = "BEGINNING TO LOVE LARAVEL" where id = ?', [1]);
//     return $updated;
// }
// );


// //delete database using raw sql queries
// Route::get('/delete', function() {

//     $deleteme = DB::delete('delete from post where id = ?',[1]);

//     return $deleteme;
// }
// );



// /*Route::get('admin/post/example', array('as'=>'admin.com',

// function()
// {
//     $url = route('admin.com');
//         return "This is my path for the admin page => ".$url;
// }

// ));
// */

// // ELOQUENT DATABASE

// Route::get('/read', function()
//  {

//     $postMe = Post::all();

//     foreach ($postMe as $postPapy) {
//         # code...

//         return $postPapy-> title;
//     }

// });



// Route::get('/find', function()
//  {

//     $postMe = Post::find(1);
//     return $postMe->title;


//     // foreach ($postMe as $postPapy) {
//     //     # code...

//     //     return $postPapy-> title;
//     // }  
            
// });


// // to retrieve information with conditiona


// Route::get('/findwhere', function()
// {
 

//         // $postCondo = Post::where('id', 2)->orderBy('id','DESC')->take(1)->get();  
//         //     return $postCondo;



//         $postyou = Post::where('user_count', '<', 50)->firstOrFail();

// });

// //iNSERT TO DATABASE USING ELOQUENT]

// Route::get('/postdata', function() {

// // $post = new Post;

// //     $post -> title = "laravel OOP";
// //     $post -> content = "LARAVEL  with OOP is fucking awesome to papy";

// //     $post -> save();


//     $post = Post::find(2); // finds the default id number which is 2 in this case

//     $post -> title = "eloquent is complicated and easy for declarations at the same time";

//     $post -> save();


// });



// // mass insert data thatb laravel wunt permit on a normal day

// Route::get('/create', function()
// {


//     Post::create([
        
//         'name' => 'papyskinsy',
        
//         'email'=> 'akinwalesolomon01@yahoo.com'

//     ]);
// });


// // Updating using the eloquent style

// Route::get('/updateeloq', function() {

//     Post::where('id', 3)->where('is_admin', 5)->update(['title' => 'Life changing career', 
//         'content'=> 'Associative array is different from the normal chaining methods and objects 
//         together']);

// });  // this is used for updating the fields of the selected columns making the conditions without the 
//     //else statements live on the sql quries it self



//     //deleting data using eloquent

//     Route::get('/deleting', function()
//     {
//             // $post = Post::find(4);

//             // $post->delete();
 
//     //another method to delete multiple rows

//             Post::destroy(2,4);

//             //or 

//             Post::where('is_admin',  0) -> destroy();
    
//        });



//        //softdelete
// Route::get('/softdelete', function() {

//     Post::find(3)->delete();
// });


// //eloquent relation relationship
// //ONE TO ONE RELATIONSHIP

// Route::get('/user/{id}/post', function($id)
// {

//            Return User::find($id)->post->content; //accessing user table from post app

// });


// //inverse relation

// Route::get('/post/{id}/user', function($id)
// {

//             return Post::find($id)->user->user;
// }
// );

// //one to many relationship

// Route::get('/posts', function()
// {

//             $post = User::find(1);
            
            
//             foreach ($post ->posts as $postyu) {
//                 # code...
//                     echo $postyu->title."<br>"; 

//             }


// });


// //creating a pivot table many to many relations

// Route::get('/pull/{id}/role' , function($id)
// {

//             $pullme = User::find($id)->roles()->orderBy('id', 'desc')->get();

//             return $pullme;

//                 // foreach ($pullme ->roles as $pullshi)

//                 // {

//                 //     echo $pullshi->name."<br>";
//                 // }
            

// });


// //assessing the intermediate table /pivot


// route::get('/pivot',function() {


// $meatpie = User::find(1);

//         foreach ($meatpie -> roles as $pivot) {
//             # code...


//         return $pivot -> pivot -> created_at;
//         }

// });

// //realtionship btw many tables to gain access to a title of the post table in the database

// route::get('/relation', function() {

//         $papy = Country::find(1);


//         foreach ($papy -> posts as $papycoder) {
//             # code...

//             return $papycoder->title;
//         }

// });

// //note: php artisan make:model photo -m  => this always us to build a model and create a migration at the same time

// //Polymorphic relations 
// //this allows one model to belong to more than one module in a sing association 
 
// Route::get('/photo', function()
// {

//             $usergo = User::find(1);
            
//             foreach ($usergo -> photos as $myphoto) {
//                 # code...

//                 return $myphoto->path;
//             }
// }
    
// );

// // finding the post photos as an extra example same as above

// Route::get('/postgt/photo', function()
// {               

//             $usergo = Post::find(1);
            
//             foreach ($usergo -> photos as $myphoto) {
//                 # code...

//                 echo $myphoto->path."<br>";
//             }

// });


// // Pulling the owner of the image 
// // polymorphic relation the inverse
// Route::get('inverse/{id}', function($id)
//             {
                 
//                 $photos = Photo::findOrFail($id);

//             return $photos -> imageable;
//             });



// //Many to many polymorphic relationships
// Route::get('pop/{id}', function($id)
//             {
                 
//                 $photos = Photo::findOrFail($id);

//             return $photos -> imageable;
//             });


// //retriving info from polymorphic many to many

// Route::get('/polybag', function()
//             {
                 
//                 $video = Post::findOrFail(1);

//           foreach ($video -> tags as $videome)  {
//               # code...

//                     echo $videome->name;
//             }
//             });


//             //pulling out the owner of the polymorphic relations


// Route::get('/moneybag', function()
//             {
                 
//                 $video = Tag::findOrFail(2);

//           foreach ($video -> posts as $videome)  {
//               # code...

//                     echo $videome->title;
//             }
//             });

//             //thinker for me is used for something like debugger, that you ga to do in the console before
//             //you actually start creating route for it
            

// Route::group(['middleware' => ['web']], function (){





// Route::auth();

// Route::get('/home', 'HomeController@index');


// });

//----------------------------------------------------------------------------------------------------------------
//setting up a login form, CRUD Application

// using resource instead of get; Resource is gonna give a pre-defined already route names and URI
//you can use php artisan route:list to check the URI in the terminal side





Route::group(['middleware' => 'web'], function() {

});   // Dont inlcude anything here cause its duplicated in the middle app file already your data are protected


    Route::resource('/posts', 'PostsController');
    
    Route::get('/dates', function(){


            $date = new  DateTime('+1 week');

            echo $date->format('d-m-Y');

            echo '<br>';

            echo carbon::now()->addDays(10)->diffForHumans();

    });


Route::get('/getname', function()
{
            $user = User::find(1);
            echo $user -> name;

});


Route::get('/setname', function()
{
            $user = User::find(1);
            $user -> name = "oluwatobi awoyele";
            $user ->save();



});



