<x-layout>
    <h1 class="text-center my-3 text-primary display-5">Create Blog</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-card-wrapper>
                    <form action="/admin/blog/store" method="POST">@csrf
                        <div class="my-3">
                            <label for="title" class="mb-1">
                                <h4>Title</h4>
                            </label>
                            <input value="{{old('title')}}" type="text" name="title" id="title" class="form-control">
                            <x-error name="title" />
                        </div>

                        <div class="my-3">
                            <label for="slug" class="mb-1">
                                <h4>Slug</h4>
                            </label>
                            <input value="{{old('slug')}}" type="text" name="slug" id="slug" class="form-control">
                            <x-error name="slug" />
                        </div>

                        <div class="my-3">
                            <label for="intro" class="mb-1">
                                <h4>Intro</h4>
                            </label>
                            <input value="{{old('intro')}}" type="text" name="intro" id="intro" class="form-control">
                            <x-error name="intro" />
                        </div>

                        <div class="my-3">
                            <label for="body" class="mb-1">
                                <h4>Body</h4>
                            </label>
                            <textarea value="{{old('body')}}" name="body" id="body" cols="10" rows="10"
                                class="form-control"></textarea>
                            <x-error name="body" />
                        </div>

                        <div class="my-3">
                            <label for="category" class="mb-1">
                                <h4>Category</h4>
                            </label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach ($categories as $category)
                                <option {{$category->id==old('category_id') ? 'selected':''}}
                                    value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <x-error name="category_id" />
                        </div>

                        <div class="d-flex justify-content-start">
                            <input type="submit" class="btn btn-primary" value="Create Blog">
                        </div>
                    </form>
                </x-card-wrapper>
            </div>
        </div>
    </div>
</x-layout>
