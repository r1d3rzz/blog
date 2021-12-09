@extends('layout')

@section('title')
    <title>{{$blog->title}}</title>
@endsection

@section('content')

<h1>{{$blog->title}}</h1>

<span>{{$blog->date}}</span>

<p>{!!$blog->body!!}</p>

<p><a href="/">back to home</a></p>

@endsection
