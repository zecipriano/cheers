<x-guest-layout>
    <div class="relative flex items-top justify-center min-h-screen bg-stone-100 dark:bg-stone-900 items-center py-4 pt-0">
        @if (Route::has('login'))
            <div class="fixed top-0 right-0 px-6 py-4 block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-base text-amber-700 hover:text-amber-900 hover:underline dark:text-amber-600 dark:hover:text-amber-100">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-base text-amber-700 hover:text-amber-900 hover:underline dark:text-amber-600 dark:hover:text-amber-100">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-base text-amber-700 hover:text-amber-900 hover:underline dark:text-amber-600 dark:hover:text-amber-100">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="text-stone-700 dark:text-stone-300 text-7xl md:text-9xl font-bold text-center">Cheers</div>
    </div>
</x-guest-layout>
