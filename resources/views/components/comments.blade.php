@props(['comments'])

<section class="container">
    <div class="col-md-8 mx-auto">
        <h5 class="my-3 text-secondary">Comment ({{$comments->count()}})</h5>

        <!--single Comment-->
        @foreach ($comments as $comment)
        <x-single-comment :comment="$comment" />
        @endforeach

    </div>
</section>
