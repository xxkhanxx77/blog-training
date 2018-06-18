@extends('app')

@section('title','CategoryCreate')

@section('content')

    @include('partials.alertsuccess')

    <form action="{{route('categories.update',[$post])}}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" placeholder="Title" value="{{$post->name}}">
        </div>
        <button class="btn btn-primary" type="submit">Button</button>
    </form>

@endsection
