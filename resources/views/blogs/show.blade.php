<x-layout>

    <!-- single blog section -->
    <x-single_blog :blog="$blog" />

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-card-wrapper class="bg-secondary">
                    <form>
                        <textarea name="" class="form-control mb-3" placeholder="leave a comment..." id="" cols="10"
                            rows="5"></textarea>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </x-card-wrapper>
            </div>
        </div>
    </div>

    <!-- comment Section -->
    <x-comments :comments="$blog->comments" />

    <!-- subscribe new blogs -->
    <x-subscribe />

    <!-- Blogs You May Like -->
    <x-blogs_you_may_like :randomBlogs="$randomBlogs" />

</x-layout>
