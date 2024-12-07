<head>
    <link rel="stylesheet" href="{{asset('/header.css')}}">
</head>
<nav>
        <div class="navbar-container">
            <div class="logo">
            <img src="{{asset('assets/Logo.png')}}" alt="Georgia O'Keeffe" class="logo" title="Georgia O'Keeffe">
            </div>
            <div class="menu">
                <ul>
                    <li><a id="nav-menu" href="{{ url('/home') }}">Home</a></li>
                    <li><a id="nav-menu" href="{{ url('/bio') }}">Biography</a></li>
                    <li><a id="nav-menu" href="{{ url('/artwork') }}">Artworks</a></li>
                    <li class="dropdown">
                        <a id="nav-menu" href="{{ url('/exhib') }}">Exhibitions</a>
                        <div class="dropdown-content">
                            <a href="{{ url('/exhib') }}">Exhibitions</a>
                            <a href="{{ url('/store') }}">Store</a>
                        </div>
                    </li>
                    <li><a id="nav-menu" href="{{ url('/community') }}">Community</a></li>
                    @auth
                    <li>
                        <a id="nav-menu" href="{{ url('/account') }}">
                            <img src="{{ asset('assets/account-icon.png') }}" alt="Account Icon" class="nav-icon">
                        </a>
                    </li>
                    @else
                    <li>
                        <a id="nav-menu" href="{{ url('/account-nonlogin') }}">
                            <img src="{{ asset('assets/account-icon.png') }}" alt="Account Icon" class="nav-icon">
                        </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
</nav>
