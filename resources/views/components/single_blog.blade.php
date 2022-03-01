@props(['blog'])

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <img src='{{asset("storage/$blog->thumbnail")}}' class="card-img-top" alt="..." />
            <h3 class="my-3">{{$blog->title}}</h3>

            <p class="fs-6 text-secondary">
                <a href="/?user={{$blog->author->username}}">{{$blog->author->name}}</a>
                <span> - {{$blog->created_at->diffForHumans()}}</span>
            </p>

            <form action="/blog/{{$blog->slug}}/subscription" method="POST">@csrf
                @auth
                @if (auth()->user()->isSubscribe($blog))
                <button class="btn btn-danger">unsubscribe</button>
                @else
                <button class="btn btn-warning">subscribe</button>
                @endif
                @endauth
            </form>

            <div class="tags my-3">
                <a href="/?category={{$blog->category->slug}}"><span
                        class="badge bg-primary">{{$blog->category->title}}</span></a>
            </div>

            <p class="lh-md">
                {{$blog->body}}
            </p>

        </div>
    </div>
</div>
