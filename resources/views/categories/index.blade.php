@extends('app')
@section('title','Category')

@section('content')

    @include('partials.alertsuccess')

    <h2>Categories</h2>
    <br>
    <a class="btn btn-primary" href="{{route('categories.create')}}" role="button">Create</a>
    <div class="test-content">
        <table class="table table-success">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Create</th>
                <th scope="col">Update</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <tbody class="table table-bordered table-light ">
            @foreach($show as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->name}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td><a class="btn btn-warning" href="{{route('categories.edit',[$post])}}" role="button">Edit</a>
                        <a class="btn btn-danger" href="{{route('categories.delete',[$post])}}" role="button">Delete</a>
                    </td>


                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
