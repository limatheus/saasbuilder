<div>
    @section('content')

        <div class=" min-h-[calc(100vh_-_32px)] bg-primary-500 flex flex-col items-center justify-center rounded-lg">
            @if (Route::has('tenant.login'))
                <div class="p-6 text-right sm:fixed sm:top-2 sm:right-2">
                    @auth
                        <a href="{{ route('tenant.dashboard.index') }}" class="font-semibold text-white hover:text-primary-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Dashboard</a>
                    @else
                        <a href="{{ route('tenant.login') }}" class="font-semibold text-white hover:text-primary-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Log in</a>

                        @if (Route::has('tenant.register'))
                            <a href="{{ route('tenant.register') }}" class="ml-4 font-semibold text-white hover:text-primary-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-indigo-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <h1 class="text-3xl lg:text-4xl text-white font-bold mb-3">
                {{tenant()->domains()->first()->domain}}
            </h1><p class="text-white text-lg mb-8">This is your multi-tenant application.</p>
        </div>
    @endsection

</div>
