<x-admin-layout>
    <h1 class="text-center my-2 text-primary display-5">Edit Blog</h1>

    <div class="container">
        <div class="row">
            <x-card-wrapper>
                <form action="/admin/blog/{{$blog->slug}}/update" method="POST" enctype="multipart/form-data">@csrf
                    @method('PATCH')
                    <x-form.input name="title" value="{{$blog->title}}" />

                    <x-form.input name="slug" value="{{$blog->slug}}" />

                    <x-form.input name="intro" value="{{$blog->intro}}" />

                    <x-form.textarea name="body" value="{{$blog->body}}" />

                    <x-form.input-wrapper>
                        <x-form.input name="thumbnail" type="file" />
                        <img src="{{asset('/storage/'.$blog->thumbnail)}}" width="200" alt="">
                    </x-form.input-wrapper>

                    <x-form.input-wrapper>
                        <x-form.label name="category" />
                        <select name="category_id" id="category" class="form-control">
                            @foreach ($categories as $category)
                            <option {{$category->id==old('category_id',$blog->category->id) ? 'selected':''}}
                                value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                        <x-error name="category_id" />
                    </x-form.input-wrapper>

                    <div class="d-flex justify-content-start">
                        <input type="submit" class="btn btn-primary" value="Edit Blog">
                    </div>
                </form>
            </x-card-wrapper>
        </div>
    </div>
</x-admin-layout>
