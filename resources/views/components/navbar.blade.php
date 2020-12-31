<div class="container mx-auto bg-white">
    <nav class="flex items-center justify-between">
        <div class="flex items-center">
            <x-logo class="w-16 h-16"></x-logo>
            <div>
                <h3 class="text-3xl font-extrabold tracking-wider text-center text-gray-600 mb-0 leading-none">branchenkalender</h3>
                <p class="text-sm my-0 leading-none">never miss <span class="text-primary-logo">your</span> network</p>
            </div>
        </div>
        <div>
            <div class="mt-4 mr-4">
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="font-medium hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                            >
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="">einloggen</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="">registrieren</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>
</div>
