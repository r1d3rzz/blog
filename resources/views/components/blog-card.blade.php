@props(['blog'])

<div class="card">
    <img src='{{asset("storage/$blog->thumbnail")}}' alt="{{$blog->thumbnail}}" />
    <div class="card-body">
        <h3 class="card-title">{{$blog->title}}</h3>
        <p class="fs-6 text-secondary">
            <a href="/?user={{$blog->author->username}}">{{$blog->author->name}}</a>
            <span> - {{$blog->created_at->diffForHumans()}}</span>
        </p>
        <div class="tags my-3">
            <a href="/?category={{$blog->category->slug}}"><span
                    class="badge bg-primary">{{$blog->category->title}}</span></a>
        </div>
        <p class="card-text">
            {{$blog->intro}}
        </p>
        <a href="/blog/{{$blog->slug}}" class="btn btn-primary">Read More</a>
    </div>
</div>
