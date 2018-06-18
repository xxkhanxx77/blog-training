@extends('app')

@section('title','Create')

@section('content')

    @include('partials.alertsuccess')

    <form action="{{ route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">

                <select class="custom-select" name="category_id">

                    <option selected>Choose...</option>

                     @foreach($categories as $data)

                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach

                </select>
            <label>Title</label>
            <input class="form-control" name="title" placeholder="Title">
            <label>Body</label>
            <textarea class="form-control" name="body" rows="3" placeholder="..."></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Button</button>
    </form>

@endsection
