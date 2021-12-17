<x-layout>

    <x-slot name="title">
        <title>
            {{$blog->title}}
        </title>
    </x-slot>

    <h1>{{$blog->title}}</h1>

    <span style="color: blue">{{$blog->created_at->diffForHumans()}}</span>

    <p>{!!$blog->body!!}</p>

    <p><a href="/">back to home</a></p>

</x-layout>
