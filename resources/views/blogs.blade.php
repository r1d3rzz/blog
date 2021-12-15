<x-layout>

    <x-slot name="title">
        <title>Blogs</title>
    </x-slot>

    @foreach ($blogs as $blog)
        <h1><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h1>

        <div>
            <p>{{$blog->date}}</p>
            <p>{{$blog->intro}}</p>
        </div>
    @endforeach

</x-layout>


