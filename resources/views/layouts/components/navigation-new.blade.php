<nav x-data="{ open: false }" class="bg-red-800 border-gray-100 py-3">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between ">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">

                @if (!Auth::user() || !Auth::user()->isAdmin)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('catalogo')" :active="request()->routeIs('catalogo')">
                            {{ __('Brinquedos') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('fale-conosco')" :active="request()->routeIs('fale-conosco')">
                            {{ __('Fale Conosco') }}
                        </x-nav-link>
                    </div>
                @else
                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('admin.catalogo')" :active="request()->routeIs('admin.catalogo')">
                            {{ __('Catálogo') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('admin.create-prod')" :active="request()->routeIs('admin.create-prod')">
                            {{ __('Cadastrar Produto') }}
                        </x-nav-link>
                    </div>
                @endif

                

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex text-white hover:bg-red-500 rounded-full mx-2 navbar-btn">
                            <span>
                                <ion-icon id="person" name="person"></ion-icon>
                            </span>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @if (!Auth::user())
                            <x-dropdown-link :href="route('login')">
                                {{ __('Entrar') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('register')">
                                {{ __('Cadastrar-me') }}
                            </x-dropdown-link>
                        @else
                            <div class="px-4">
                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>

                            @if (Auth::user() && !Auth::user()->isAdmin)
                                <x-dropdown-link :href="route('client.edit')">
                                        {{ __('Editar Perfil') }}
                                </x-dropdown-link>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-dropdown-link>
                            </form>
                        @endif
                    </x-slot>
                </x-dropdown>

                @if (Auth::user() && !Auth::user()->isAdmin)
                    <div class="hidden space-x-8 sm:-my-px sm:ml-1 sm:flex">
                        <x-nav-link :href="route('client.list-cart')" :active="request()->routeIs('client.list-cart')">
                            <i class="bi bi-list mobile-nav-toggle"></i>

                            <button id="cart" class="text-white navbar-toggler" type="button" data-bs-toggle="modal" onclick="">
                                <span>
                                    <ion-icon id="cart" name="cart"></ion-icon>
                                </span>
                            </button>
                        </x-nav-link>
                    </div>
                @endif
            </div>

            <!-- Hamburger -->
            @if(Auth::user() && Auth::user()->isAdmin)
            <div class="-mr-2 flex items-center lg:hidden">
            @else
            <div class="-mr-2 flex items-center sm:hidden">
            @endif
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-red-500 bg-transparent hover:bg-rose-200 rounded-lg focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden min-[950px]:hidden">
        </br>
        @if (!Auth::user())
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('catalogo')" :active="request()->routeIs('catalogo')">
                    {{ __('Brinquedos') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('fale-conosco')" :active="request()->routeIs('fale-conosco')">
                    {{ __('Fale Conosco') }}
                </x-responsive-nav-link>
            </div>
        @endif    

        @if (Auth::user() && Auth::user()->isAdmin)

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Meu Perfil') }}
                </x-responsive-nav-link>
            </div>

        @endif   

        @if (Auth::user() && Auth::user()->isAdmin)

            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>

        @endif    

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            @if (Auth::user())
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                </br>
            @endif

            @if (!Auth::user())
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Entrar') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('register')">
                        {{ __('Cadastrar-me') }}
                    </x-responsive-nav-link>
                </div>

            @else
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Sair') }}
                    </x-resposive-nav-link>
                </form>
            @endif
        </div>
    </div>
</nav>