
@extends('layout.app')


@section('content')

<h2>POST PAGE HERE </h2>

@if (count($people))

    <ul>
            @foreach($people as $person)

            <li>
                    {{$person}}
            </li>
            @endforeach
    </ul>
@endif


@stop


@section('footer')

<!-- <script>
    alert('Hello world')
    </script> -->
@stop
