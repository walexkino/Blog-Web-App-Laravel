<?php


namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreatePostRequest;


if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);          // to ignore the warnings for version 7.2.0 
}


class PostsController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return "It's working now baba ";
        
         $posts = Post::all();

      return view('posts.index', compact('posts')); // the compact tag converts any variable name to a string it 
                                                        // automatically inserts the dollar sign to it
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return "Now have got it ".$me; 
        return view('posts.create');   
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {

                $input = $request -> all();

                if($file = $request -> file('file')){


                    $name = $file->getClientOriginalName();

                    $file-> move('images', $name);
                    $input['image_path'] = $name;


                }

                        Post::create($input);

        //   $file =   $request ->file('file');

        //     echo "<br>";

        //     echo  $file -> getClientOriginalName();

        //     echo "<br>";

        //     echo $file -> getClientSize();       //

        // $this -> validate($request, [  // to validate for entries for each field

        //     'title' => 'required|max:4', // the title shouldnt be longer than 4 character
        //     'content' => 'required'
        //                             ]);

        // return $request->title;

        //                                          Post::create($request -> all());  //for validity
    
        //    $post = new Post;
        //   $post->title =  $request -> title;
        //   $post-> save();
    
                                                         // return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
            $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $post_edit = Post::FindOrFail($id);

        return view('posts.edit', compact('post_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

            // return $request->all();


            $post = Post::findOrFail($id);

            $post->update($request->all()); // i wanna update all the request. 
            return redirect('/posts'); // redirect to the index app
     
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $post = Post::whereId($id)->delete();
        

        return redirect('/posts');
    }


    // public function contact($idme)
// {
    //     return view('contact').$idme;
    // }

    public function contact()
    {
        return view('contact');
    }

    public function ShowView($username,$password)
    {
        return view('contact', compact('username','password'));
    }



    public function post()
    {
        $people = ['Akinwale', 'Solomon', 'Oluwatobi', 'Jeremiah'];
       
        return view('post', compact('people'));
    }
}


