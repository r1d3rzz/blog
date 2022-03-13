<x-layout>
    <x-slot name="title">
        Admin | Dashboard
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-2 mt-5">
                <ul class="list-group mt-5">
                    <li class="list-group-item"><a href="/admin/blogs" class="nav-link">Dashboard</a></li>
                    <li class="list-group-item"><a href="/admin/blog/create" class="nav-link">Create Blog</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                {{$slot}}
            </div>
        </div>
    </div>
</x-layout>
