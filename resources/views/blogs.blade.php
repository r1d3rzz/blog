@extends('layout')

@section('title')
    <title>All Blogs</title>
@endsection


@section('content')

    @foreach ($blogs as $blog)
        <h1><a href="blog/{{$blog->slug}}">{{$blog->title}}</a></h1>

        <div>
            <p>{{$blog->date}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    @endforeach

@endsection
