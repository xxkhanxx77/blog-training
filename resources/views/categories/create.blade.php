@extends('app')

@section('title','CategoryCreate')

@section('content')

    @include('partials.alertsuccess')

    <form action="{{route('categories.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" placeholder="your name here...">
        </div>
        <button class="btn btn-primary" type="submit">Button</button>
    </form>

@endsection
