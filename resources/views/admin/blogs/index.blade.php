<x-admin-layout>
    <h2 class="text-center text-primary p-3 display-6">Blogs</h2>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <x-card-wrapper>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Intro</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($blogs as $blog)
                            <tr>
                                <td><b>{{$blog->title}}</b></td>
                                <td>{{$blog->intro}}</td>
                                <td><a href="/" class="btn btn-warning">edit</a></td>
                                <td>
                                    <form action="/admin/{{$blog->slug}}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <p class="text-center p-5">Empty Blogs</p>
                            @endforelse
                        </tbody>
                    </table>
                </x-card-wrapper>
                {{$blogs->links()}}
            </div>
        </div>
    </div>
</x-admin-layout>
