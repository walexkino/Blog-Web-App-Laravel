<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <h1>CREATE POST</h1>
    {{-- <form action="/posts" method="POST"> --}}

       {!! Form::open(['method'=> 'POST', 'action' => 'PostsController@store', 'files' => true]) !!}


       <div class="form-group">
        {!! Form::label('title', 'My Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

       </div>
       <br/> 
       <div class="form-group">
          {!! Form::file('files',['class' => 'form-control']) !!}
    
           </div>
  
  
<br/>
       <div class="form-group">
       {!! Form::submit( 'Create a Post', ['class' =>  'btn btn-primary']) !!}
        
       {{-- <input type="text" name = "title" placeholder="Enter the title">
         --}}

       </div>

        {{-- <input type="submit" name="submit"> --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {{-- </form> --}}

    


  @if(count($errors) > 0 )


       <div class="alert alert-danger">
              
        <ul>

          @foreach ($errors -> all() as $error )
              
             <li>{{ $error }}</li>

          @endforeach

         
        </ul>
       </div>
 @endif

 {!!  Form::close() !!}



