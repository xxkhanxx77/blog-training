@extends('app')
@section('title','Posts')

@section('content')

    @include('partials.alertsuccess')

    <h2>Posts</h2>
    <br>
    <a class="btn btn-primary" href="{{route('posts.create')}}" role="button">Create</a>
    <div class="test-content">
        <table class="table table-hover">
            <thead class="table-info">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($show1 as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{object_get($post,'category.name','-')}}</td>
                    <!--list data form object and if don't have data will show -->
                    <td><a class="btn btn-warning" href="{{route('posts.edit',[$post])}}" role="button">Edit</a>
                        <a class="btn btn-danger" href="{{route('posts.delete',[$post->id])}}" role="button">Delete</a>
                    </td>


                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
