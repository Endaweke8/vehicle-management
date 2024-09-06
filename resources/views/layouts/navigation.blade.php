<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="data:image/jpeg;base64,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" class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('fetch_all_vehicles')" :active="request()->routeIs('fetch_all_vehicles')">
                        {{ __('Vehicles') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
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

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
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
