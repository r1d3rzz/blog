<x-layout>
    <h1 class="text-center my-3 text-primary display-5">Create Blog</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <x-card-wrapper>
                    <form action="/admin/blog/store" method="POST" enctype="multipart/form-data">@csrf

                        <x-form.input name="title" />

                        <x-form.input name="slug" />

                        <x-form.input name="intro" />

                        <x-form.textarea name="body" />

                        <x-form.input-wrapper>
                            <x-form.input name="thumbnail" type="file" />
                        </x-form.input-wrapper>

                        <x-form.input-wrapper>
                            <x-form.label name="category" />
                            <select name="category_id" id="category" class="form-control">
                                @foreach ($categories as $category)
                                <option {{$category->id==old('category_id') ? 'selected':''}}
                                    value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                            <x-error name="category_id" />
                        </x-form.input-wrapper>

                        <div class="d-flex justify-content-start">
                            <input type="submit" class="btn btn-primary" value="Create Blog">
                        </div>
                    </form>
                </x-card-wrapper>
            </div>
        </div>
    </div>
</x-layout>
