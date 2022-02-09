<x-layout>

    <!-- single blog section -->
    <x-single_blog :blog="$blog" />

    <!--CommentBox-->
    @auth
    <x-comment :blog="$blog" />
    @else
    <p class="text-center p-5">If do u want to Comments this Blog.Please <a href="/login">Login</a></p>
    @endauth

    <!-- comment Section -->
    @if ($blog->comments->count())
    <x-comments :comments="$blog->comments" />
    @endif

    <!-- subscribe new blogs -->
    <x-subscribe />

    <!-- Blogs You May Like -->
    <x-blogs_you_may_like :randomBlogs="$randomBlogs" />

</x-layout>
