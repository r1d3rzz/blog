<x-layout>

    <!-- single blog section -->
    <x-single_blog :blog="$blog" />

    <!--CommentBox-->
    @auth
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-card-wrapper>
                    <form action="/blog/{{$blog->slug}}/comments" method="POST">@csrf
                        <textarea name="comments" class="form-control mb-3" placeholder="leave a comment..." id=""
                            cols="10" rows="5"></textarea>
                        @error('comments')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </x-card-wrapper>
            </div>
        </div>
    </div>
    @else
    <p class="text-center p-5">If do u want to Comments this Blog.Please <a href="/login">Login</a></p>
    @endauth

    <!-- comment Section -->
    <x-comments :comments="$blog->comments" />

    <!-- subscribe new blogs -->
    <x-subscribe />

    <!-- Blogs You May Like -->
    <x-blogs_you_may_like :randomBlogs="$randomBlogs" />

</x-layout>
