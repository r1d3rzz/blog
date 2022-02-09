@props(['blog'])
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <x-card-wrapper>
                <form action="/blog/{{$blog->slug}}/comments" method="POST">@csrf
                    <textarea required name="comments" class="form-control mb-3" placeholder="leave a comment..." id=""
                        cols="10" rows="5"></textarea>
                    <x-error name="comments" />
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </x-card-wrapper>
        </div>
    </div>
</div>
