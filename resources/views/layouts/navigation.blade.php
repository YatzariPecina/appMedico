<nav x-data="{ open: false }" class="bg-white border-r border-gray-100 h-full">
    <!-- Primary Navigation Menu -->
    <div class="px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex flex-col h-full">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <div class="flex">
                        <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-16 mx-auto w-auto py-1">
                    </div>
                </a>
            </div>

            <!-- Settings Dropdown -->
            <div class="mt-auto pt-4 border-gray-200 border-t">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Navigation Links -->
            <div class="mt-4 space-y-2">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>
            <!-- Aqui pones links generales, que no sean de un rol -->
            <div class="mt-4 space-y-2">
                <x-nav-link :href="route('pacientes.index')" :active="request()->routeIs('pacientes')">
                    {{ __('Listado de pacientes') }}
                </x-nav-link>
            </div>
            <div class="mt-4 space-y-2">
                <x-nav-link :href="route('medicos.index')" :active="request()->routeIs('pacientes')">
                    {{ __('Listado de medicos') }}
                </x-nav-link>
            </div>

            @switch(Auth::user()->rol)
                @case('Doctor')
                    <!-- Aqui van los links de el doctor -->
                    @break
                @case('Secretario/a')
                    <!-- Aqui estan los links del secretario -->
                    @break
                @default
                    
            @endswitch
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
