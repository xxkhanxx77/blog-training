@extends('app')

@section('title','Edit')

@section('content')

    @include('partials.alertsuccess')

    <form action="{{ route('posts.update',[$post])}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" name="title" placeholder="Title" value="{{$post->title}}">
            <label>Body</label>
            <textarea class="form-control" name="body" rows="3" >{{$post->body}}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Button</button>
    </form>

@endsection
