<!-- ======= Header ======= -->
<header id="header" class="d-flex">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1>
                <img src="img/magichat/logo.png"></img>
                <a href="{{ route('home') }}">Magic Hat</a>
            </h1>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @if (!Auth::user() || !Auth::user()->isAdmin)
                    <li><a class="nav-link scrollto @if(request()->routeIs('home')) active @endif" href="{{ route('home') }}">Home</a></li>
                    <li><a class="nav-link scrollto @if(request()->routeIs('catalogo')) active @endif" href="{{ route('catalogo') }}">Brinquedos</a></li>
                    <li><a class="nav-link scrollto @if(request()->routeIs('fale-conosco')) active @endif" href="{{ route('fale-conosco') }}">Fale conosco</a></li>
                @else
                    <li><a class="nav-link scrollto @if(request()->routeIs('dashboard')) active @endif" href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a class="nav-link scrollto @if(request()->routeIs('admin.catalogo')) active @endif" href="{{ route('admin.catalogo') }}">Catálogo</a></li>
                    <li><a class="nav-link scrollto @if(request()->routeIs('admin.create-prod')) active @endif" href="{{ route('admin.create-prod') }}">Cadastrar Produto</a></li>
                @endif
                
                <li class="dropdown">
                    <a class="@if(request()->routeIs('edit-profile')) active @endif" href="#">
                        <span>
                            <ion-icon id="person" name="person"></ion-icon>
                        </span>
                    </a>

                    <ul>
                        @if (Auth::user())
                        <div class="px-4">
                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                            <li><a href="{{ route('edit-profile') }}">Editar informações</a></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                        @endif
                    </ul>
                </li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>

            @if (Auth::user() && !Auth::user()->isAdmin)
                <button id="cart" class="navbar-toggler" type="button" data-bs-toggle="modal" onclick="">
                    <span>
                        <ion-icon id="cart" name="cart"></ion-icon>
                    </span>
                </button>
            @endif
        </nav><!-- .navbar -->
    </div>
</header>
<!-- End Header -->