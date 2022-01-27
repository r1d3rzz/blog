<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
            <a href="#home" class="nav-link">Home</a>
            <a href="#blogs" class="nav-link">Blogs</a>
            <a href="#subscribe" class="nav-link">Subscribe</a>

            @guest
            <a href="/register" class="nav-link">Register</a>
            <a href="/login" class="nav-link">Login</a>
            @else
            <a href="" class="nav-link">{{auth()->user()->name}}</a>
            <form action="/logout" method="POST">@csrf
                <button class="btn btn-link nav-link">
                    logout
                </button>
            </form>
            @endguest

        </div>
    </div>
</nav>
