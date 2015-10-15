@extends('app')

@section('content')

        <div class="container">
            <div class="content">
                <div class="title">Contact Me!</div>
            </div>
        </div>
        <ul>
            @foreach ($people as $person)
                <li> {{ $person }} </li>
            @endforeach
        </ul>

@stop
