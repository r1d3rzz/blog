<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
            <a href="#home" class="nav-link">Home</a>
            <a href="#blogs" class="nav-link">Blogs</a>
            @guest
            <a href="/register" class="nav-link">Register</a>
            <a href="/login" class="nav-link">Login</a>
            @else
            @can('admin')
            <a href="/admin/blogs" class="nav-link">Dashboard</a>
            @endcan
            <a href="" class="nav-link">{{auth()->user()->name}}</a>
            <img src="{{auth()->user()->avatar}}" width="40" class="rounded-circle" alt="{{auth()->user()->username}}">
            <form action="/logout" method="POST">@csrf
                <button class="btn btn-link nav-link">
                    logout
                </button>
            </form>
            @endguest

        </div>
    </div>
</nav>
