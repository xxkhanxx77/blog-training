@extends('layout')


<h1> The About </h1>
@section('content')

@stop
@foreach($about1 as $name)
    {{$name->name}}
@endforeach

@foreach($about2 as $axe)
    {{$axe->name}}
@endforeach