<x-layout>

    <x-slot name="title">
        <title>
            {{$blog->title}}
        </title>
    </x-slot>

    <h1>{{$blog->title}}</h1>

    <h3>Author - <a href="/users/{{$blog->author->id}}">{{$blog->author->name}}</a></h3>

    <h4>Category - <a href="/categories/{{$blog->category->slug}}">{{$blog->category->title}}</a></h4>

    <span style="color: blue">{{$blog->created_at->diffForHumans()}}</span>

    <p>{!!$blog->body!!}</p>

    <p><a href="/">back to home</a></p>

</x-layout>
