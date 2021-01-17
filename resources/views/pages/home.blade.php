@extends('layouts.basic');

@section('content')
    <h1>welcome home</h1>
    <h1>{{$title}}</h1>

    {{--<div class="container">--}}
        {{--<div class="row justify-content center">--}}
            {{--<div class="col-ad-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">{{__('Dashboard')}}</div>--}}
                    {{----}}
                    {{--<div class="card-body">--}}
                        {{--@if(session('status'))--}}
                            {{--<div class="alert- alert success" role="alert">--}}
                                {{--{{sesion('status')}}--}}
                            {{--</div>--}}
                            {{--@endif--}}
                        {{----}}
                        {{--<p> Hello {{auth()->user()->name}}</p>--}}
                        {{--('You are logged in'}}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection

