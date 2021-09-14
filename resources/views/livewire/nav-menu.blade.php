<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('/') }}" :active="request()->routeIs('/')">
                        {{ __('Home') }}
                    </x-jet-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link href="{{ route('recipes.public') }}" :active="request()->routeIs('recipes.public')">
                        {{ __('Recipes') }}
                    </x-jet-nav-link>
                </div>

            </div>

            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('/') }}">
                    <x-jet-application-logo class="block h-12 w-auto" />
                </a>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @if (Route::has('login'))
                    @auth
                        <div class="ml-3 relative">
                            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="rounded-md bg-purple-50 border text-purple-600 hover:bg-purple-200">
{{--                                <x-jet-button align="right" width="48">--}}
                                    {{ __('Dashboard') }}
{{--                                </x-jet-button>--}}
                            </x-nav-link>
                        </div>

                    @else
                        <div class="hidden md:flex items-center justify-end space-x-2 md:flex-1 lg:w-0">

                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')" class="rounded-md border text-gray-500 hover:bg-gray-700 hover:text-gray-100">
                                    {{ __('Sign in') }}
                                </x-nav-link>
                            </div>

                            @if (Route::has('register'))

                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')" class="rounded-md border text-purple-600 hover:bg-purple-200">
                                        {{ __('Sign up') }}
                                    </x-nav-link>
                                </div>
                            @endif
                        </div>
                    @endauth
                @endif
            </div>

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-responsive-nav-link>
        </div>
    </div>

</nav>
