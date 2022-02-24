<div class="main-nav">
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex align-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'KnowId') }}</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @if (Route::has('login'))
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @auth
                            <li class="nav-item">
                                <a href="{{ route('dashboard.home') }}" class="nav-link">Dashboard</a>
                            </li>
                        @endauth
                        <li class="nav-item">
                            <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a href="{{ route('user.profile') }}" class="nav-link">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="post"
                                  style="display: none">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif

                        @endauth
                    </ul>
                @endif
            </div>
        </div>
    </nav>

    @can('logged-in')
        <nav class="navbar sub-nav navbar-expand-lg">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @can('is-admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users.index') }}">Users</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.badges.index') }}">Badges</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.projects.index') }}">Projects</a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </nav>
    @endcan
</div>
