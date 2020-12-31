@section('title', 'Registrieren - komm an Bord')

<div>
    <div class="sm:mx-auto sm:w-full lg:max-w-screen-lg">
        <div class="grid grid-cols-2 gap-10">
            <div class="col-span-2 md:col-span-1 px-5 lg:px-0">
                <a href="{{ route('home') }}">
                    <x-logo class="w-auto h-16 mx-auto text-indigo-600"/>
                </a>

                <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                    Komm an Bord
                </h2>

                <p class="mt-2 text-sm text-center text-gray-600 leading-5">
                    oder
                    <a href="{{ route('login') }}" class="font-medium focus:outline-none transition ease-in-out duration-150">
                        melde dich an
                    </a>
                </p>
                <p class="mt-10 text-sm text-center text-gray-600 leading-5">
                    Werde Teil der branchenkalender Community und genieße alle Vorteile unseres Portals und Vergünstigungen vieler Eventanbieter. Als registrierte Benutzer kannst du auch deine eigenen Events in unseren Kalender eintragen und das
                    <a href="#">kostenlos</a>
                </p>
            </div>
            <div class="col-span-2 md:col-span-1 px-5 lg:px-0">
                <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">

                    @if (session()->has('success'))
                        <div class="text-primary-logo">
                            {{ session('success') }}
                        </div>
                    @else
                        <form wire:submit.prevent="register">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 leading-5">
                                    Dein Name
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input wire:model.lazy="name" id="name" type="text" required autofocus
                                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-primary-logo transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-primary-dark text-primary-dark placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                    />
                                </div>

                                @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                                    Deine E-Mail Adresse
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input wire:model.lazy="email" id="email" type="email" required
                                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-primary-logo transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-primary-dark text-primary-dark placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                    />
                                </div>

                                @error('email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                                    Passwort
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input wire:model.lazy="password" id="password" type="password" required
                                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-primary-logo transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-primary-dark text-primary-dark placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror"
                                    />
                                </div>

                                @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 leading-5">
                                    Passwort bestätigen
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password" required
                                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:border-primary-logo transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                    />
                                </div>
                            </div>

                            <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-primary-logo border border-transparent rounded-md hover:bg-primary-dark focus:outline-none focus:shadow-primary-dark active:bg-primary-dark transition duration-150 ease-in-out"
                        >
                            registrieren
                        </button>
                    </span>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
