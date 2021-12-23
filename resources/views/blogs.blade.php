<x-layout>

    <x-slot name="title">
        <title>Blogs</title>
    </x-slot>

    @foreach ($blogs as $blog)
        <h1><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h1>

        <h3>Author - <a href="/user/{{$blog->user->name}}">{{$blog->user->name}}</a></h3>

        <p><a href="/categories/{{$blog->category->slug}}">{{$blog->category->title}}</a></p>

        <div>
            <p style="color: green">{{$blog->created_at->diffForHumans()}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    @endforeach

</x-layout>


