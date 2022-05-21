@props(['blog'])

<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto text-center">
            @if ($blog->thumbnail)
            <img src='{{asset("storage/$blog->thumbnail")}}' width="500" alt="{{$blog->thumbnail}}" />
            @endif
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

            <div class="text-start">
                <p class="lh-md">
                    {!!$blog->body!!}
                </p>
            </div>

        </div>
    </div>
</div>
