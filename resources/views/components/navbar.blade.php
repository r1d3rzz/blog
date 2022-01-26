<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
            <a href="#home" class="nav-link">Home</a>
            <a href="#blogs" class="nav-link">Blogs</a>
            <a href="#subscribe" class="nav-link">Subscribe</a>

            {{-- Navbar Login and Register Appear Section One --}}

            {{-- @if (!auth()->check())
            <a href="/register" class="nav-link">Register</a>
            @else
            <a href="" class="nav-link">{{auth()->user()->name}}</a>
            @endif

            @if (auth()->check())
            <form action="/logout" method="POST">@csrf
                <button class="btn btn-link nav-link">
                    logout
                </button>
            </form>
            @endif --}}

            {{-- Navbar Login and Register Appear Section Two --}}

            @guest
            <a href="/register" class="nav-link">Register</a>
            @else
            <a href="" class="nav-link">{{auth()->user()->name}}</a>
            @endguest

            @auth
            <form action="/logout" method="POST">@csrf
                <button class="btn btn-link nav-link">
                    logout
                </button>
            </form>
            @endauth


        </div>
    </div>
</nav>
