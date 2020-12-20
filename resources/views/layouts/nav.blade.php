<nav class="navbar-expand-md navbar-light bg-white shadow-sm d-flex d-md-none d-lg-none justify-content-center">
    <div class="col-12 col-md-10 col-lg-8 py-0">
        <div class="mobile-nav-row d-flex align-items-center justify-content-between">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand m-0" href="{{ url('/') }}">
                <img class="logo-header" src="/images/logo.png" alt="logo">
            </a>
            <ul class="navbar-nav p-0">
                <!-- Authentication Links -->
                @guest
                    <!-- <ul class="navbar-nav mr-auto align-items-center p-0 m-0">
                        <li>
                            <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                                <img class="logo-header" src="/images/logo.png" alt="logo">
                            </a>
                        </li>
                        <li class="app-name">
                            <h1>{{ config('app.name', 'Laravel') }}</h1>
                        </li>
                        <li class="nav-item">
                            <login-component></login-component>
                        </li>
                    </ul> -->
                    <!-- <li>
                        <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                            <img class="logo-header" src="/images/logo.png" alt="logo">
                        </a>
                    </li>
                    <li class="app-name">
                        <h1>{{ config('app.name', 'Laravel') }}</h1>
                    </li> -->
                    <li class="nav-item d-flex justify-content-center">
                        <login-component></login-component>
                    </li>
                    <!--    
                    <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" class="svg-inline--fa fa-sign-in-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path>
                        </svg>
                    </span>
                    <span>
                        <a class="nav-link" href="{{ route('login') }}">Вход</a>
                    </span>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    -->
                @else
                    @yield('navg')
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            <!-- <div class="col-12 d-lg-flex justify-content-between"> -->
                <!-- <div class="col-8 d-flex align-items-center p-0">
                    <span>
                        <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                            <img class="logo-header" src="/images/logo.png" alt="logo">
                        </a>
                    </span>
                    <span class="app-name">
                        <h1>{{ config('app.name', 'Laravel') }}</h1>
                    </span>
                </div> -->
                <!-- <ul class="navbar-nav mr-auto align-items-center p-0 m-0">
                    <li>
                        <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                            <img class="logo-header" src="/images/logo.png" alt="logo">
                        </a>
                    </li>
                    <li class="app-name">
                        <h1>{{ config('app.name', 'Laravel') }}</h1>
                    </li>
                    <li class="nav-item">
                        <login-component></login-component>
                    </li>
                </ul> -->
                <!-- <login-component></login-component> -->
            <!-- </div> -->
            
            <!-- <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                <img class="logo-header" src="/images/logo.png" alt="logo">
            </a> -->
        </div>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <!-- <ul class="navbar-nav justify-content-between align-items-center p-0 m-0">
                <li>
                    <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                        <img class="logo-header" src="/images/logo.png" alt="logo">
                    </a>
                </li>
                <li class="app-name">
                    <h1>{{ config('app.name', 'Laravel') }}</h1>
                </li>
            </ul> -->
            <!-- Right Side Of Navbar -->
            
        </div>
    </div>
</nav>
<nav class="navbar-light bg-white shadow-sm d-none d-md-flex d-lg-flex justify-content-center">
    <div class="col-md-10 col-lg-8 py-0">
        <div class="navbarSupportedContent d-flex align-items-center justify-content-between">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav flex-row justify-content-between align-items-center p-0 m-0">
                <li>
                    <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                        <img class="logo-header" src="/images/logo.png" alt="logo">
                    </a>
                </li>
                <li class="app-name">
                    <h1>{{ config('app.name', 'Laravel') }}</h1>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav p-0">
                <!-- Authentication Links -->
                @guest
                    <!-- <ul class="navbar-nav mr-auto align-items-center p-0 m-0">
                        <li>
                            <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                                <img class="logo-header" src="/images/logo.png" alt="logo">
                            </a>
                        </li>
                        <li class="app-name">
                            <h1>{{ config('app.name', 'Laravel') }}</h1>
                        </li>
                        <li class="nav-item">
                            <login-component></login-component>
                        </li>
                    </ul> -->
                    <!-- <li>
                        <a class="navbar-brand m-0 p-0" href="{{ url('/') }}">
                            <img class="logo-header" src="/images/logo.png" alt="logo">
                        </a>
                    </li>
                    <li class="app-name">
                        <h1>{{ config('app.name', 'Laravel') }}</h1>
                    </li> -->
                    <li class="nav-item d-flex justify-content-center">
                        <login-component></login-component>
                    </li>
                    <!--    
                    <span>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sign-in-alt" class="svg-inline--fa fa-sign-in-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M416 448h-84c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h84c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32h-84c-6.6 0-12-5.4-12-12V76c0-6.6 5.4-12 12-12h84c53 0 96 43 96 96v192c0 53-43 96-96 96zm-47-201L201 79c-15-15-41-4.5-41 17v96H24c-13.3 0-24 10.7-24 24v96c0 13.3 10.7 24 24 24h136v96c0 21.5 26 32 41 17l168-168c9.3-9.4 9.3-24.6 0-34z"></path>
                        </svg>
                    </span>
                    <span>
                        <a class="nav-link" href="{{ route('login') }}">Вход</a>
                    </span>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                    -->
                @else
                    @yield('navg')
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>