<section class="container">
    <div class="col-md-8 mx-auto">
        <h5 class="my-3 text-secondary">Comment (3)</h5>

        <!--single Comment-->
        @foreach (range(1,3) as $item)
        <x-single-comment />
        @endforeach

    </div>
</section>
