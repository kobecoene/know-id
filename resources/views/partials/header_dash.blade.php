<div class="main-nav-dash">

    <nav class="logout d-flex flex-row justify-content-around align-items-center">
        <img src="{{ asset('images/logo_knowid.png') }}" alt="Knowid" height="50px">

        <a href="{{ route('logout') }}" class="btn btn-primary" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i
                class="fa-solid fa-arrow-right-from-bracket"></i> Uitloggen</a>
        <form id="logout-form" action="{{ route('logout') }}" method="post"
              style="display: none">
            @csrf
        </form>
    </nav>

    @can('logged-in')
        <nav class="navbar sub-nav-dash navbar-expand-lg">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @can('is-admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.users.index') }}">Gebruikers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.badges.index') }}">Badges</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.projects.index') }}">Projecten</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.skills.index') }}">Skills</a>
                    </li>
                @endcan
            </ul>
        </nav>
    @endcan
</div>
