<x-layout>

    <!-- single blog section -->
    <x-single_blog :blog="$blog"/>

    <!-- subscribe new blogs -->
    <x-subscribe />

    <!-- Blogs You May Like -->
    <x-blogs_you_may_like :randomBlogs="$randomBlogs"/>

</x-layout>
