<x-layout>

    <x-slot name="title">
        <title>
            {{$blog->title}}
        </title>
    </x-slot>

    <h1>{{$blog->title}}</h1>

    <span>{{$blog->date}}</span>

    <p>{!!$blog->body!!}</p>

    <p><a href="/">back to home</a></p>

</x-layout>
