@extends('layouts.basic');

@section('content')
    <h1>welcome home</h1>
    @if(count($articles) > 0)
        <ul>
            @foreach($articles as $article)
                <li>{{$article}}</li>
            @endforeach
        </ul>
    @endif


@endsection
