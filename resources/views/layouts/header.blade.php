<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-block">
        <a class="navbar-brand navbar-img" href="#">
            <img class="logo-image" src="{{ asset('images/logo.png') }}" alt="HapoLearn Logo">
        </a>
        <button class="navbar-toggler nav-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav w-100 navbar-list">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">all courses</a>
                </li>
                @if (!Auth::user())
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('login')}}">LOGIN/REGISTER <span class="sr-only">(current)</span></a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">PROFILE</a>
                </li>
                @if (Auth::user())
                <li class="nav-item active">
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                        <button type="submit" class="nav-link btn-logout" >LOGOUT</button>
                    </form>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">profile</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
