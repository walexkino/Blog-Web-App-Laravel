
        <h1>EDIT POST</h1>
    {{-- <form action="/posts/{{ $post_edit->id }}" method="POST"> --}}


        {!! Form::model( $post_edit, ['method'=> 'PATCH', 'action' => ['PostsController@update', $post_edit-> id ]]) !!}

            {{ csrf_field() }}

            {!! Form::label('title', 'My Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}



        {{-- <input type="text" name = "title" placeholder="Enter the title" value="{{ $post_edit  ->title }}"> --}}


        {!! Form::submit('Update Post', ['class' => 'btn btn-info']) !!}

        {!! Form::close() !!}
        {{-- <input type="submit" name="submit" value = "UPDATE"> --}}
        {{-- <input type="hidden" name="_method" value="PUT"> --}}
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        {{-- </form> --}}

{{-- <form action="/posts/{{ $post_edit -> id }}" method="post"> --}}
    {{ csrf_field() }}                  
                                    {{--  this activates the encryption of the form field so as to make it sure and not give 
                                            errors of token verfication.. we are assigning a token to it --}}


    {{-- <input type="hidden" name="_method" value="DELETE"> --}}




    {!! Form::open(['method'=> 'DELETE', 'action' => ['PostsController@destroy', $post_edit -> id]]) !!}


    {!! Form::submit('Delete Post', ['class' => 'btn btn-danger']) !!}
        
        {{-- <input type="submit" value="DELETE"> --}}
{{-- </form> --}}
    
{!! form::close() !!}







