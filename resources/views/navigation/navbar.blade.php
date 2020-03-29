<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <a class="navbar-brand" href="/">{{ config('app.name', 'PreprLabsDemo') }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb"
        aria-expanded="true">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navb" class="navbar-collapse collapse hide">
        @auth
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link text-primary" href="/labs">Labs</a>
            </li>
        </ul>
        @endauth
        <ul class="nav navbar-nav ml-auto">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="/register"><span class="fas fa-user"></span> Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login"><span class="fas fa-sign-in-alt"></span> Login</a>
            </li>
            @endguest
            @auth
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); 
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endauth
        </ul>
    </div>
</nav>
