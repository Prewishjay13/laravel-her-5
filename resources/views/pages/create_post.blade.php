@extends('layouts.basic');

@section('content')
    <h1>Create your new post here.</h1>
    <p>Dont forget the form you idiot!</p>
    <h1>{{$title}}</h1>

<div class="container">
    <form method="post" action={{route('store_post')}}>
        @csrf

        //title
    <div class="form-group">
        <label for="title">Titel</label>
        <input type="text" class="post_form" id="title" name="title"/>
        @if ($errors ->has('title'))
            <span class="alert-danger form check-inline">{{$errors->first('title')}}</span>
            @endif
    </div>

        //category
        <div class="form-group">
            <label for="category">Category</label>
            <select class="post_form" id="category" name="category">
                @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['title']}}</option>
            </select>
        </div>

        //description
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="post_form" id="description" name="description"></textarea>
            @if($errors ->has('description'))
                <span class="alert-danger form check-inline">{{$errors->first('description')}}</span>
                @endif
        </div>

        //image
        <div class="form-group">
            <label for="image">Image url:</label>
            <input type="text" class="post-from" id="image" name="image"/>
        </div>

        //button
        <button type="submit" class="submit-btn">Post</button>
    </form>
</div>
@endsection

