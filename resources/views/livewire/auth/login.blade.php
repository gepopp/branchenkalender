@section('title', 'Schön das du wieder da bist')

<div>
    <div class="sm:mx-auto sm:w-full lg:max-w-screen-lg">
        <div class="grid grid-cols-2 gap-10">
            <div class="col-span-2 md:col-span-1 px-5 lg:px-0">
                <a href="{{ route('home') }}">
                    <x-logo class="w-auto h-16 mx-auto text-indigo-600"/>
                </a>

                <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
                    Endlich wieder da!
                </h2>
                <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
                    Noch nicht registriert?
                    <a href="{{ route('register') }}" class="font-medium focus:outline-none focus:underline transition ease-in-out duration-150">
                        hierhin
                    </a>
                </p>
            </div>
            <div class="col-span-2 md:col-span-1 px-5 lg:px-0">
                <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
                        <form wire:submit.prevent="authenticate">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                                    E-Mail Adresse
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus
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

                            <div class="flex items-center justify-between mt-6">
                                <div class="flex items-center">
                                    <input wire:model.lazy="remember" id="remember" type="checkbox" class="form-checkbox w-4 h-4 text-primary-logo transition duration-150 ease-in-out"/>
                                    <label for="remember" class="block ml-2 text-sm text-gray-900 leading-5">
                                        Merken
                                    </label>
                                </div>

                                <div class="text-sm leading-5">
                                    <a href="{{ route('password.request') }}" class="font-medium focus:outline-none focus:underline transition ease-in-out duration-150">
                                        Passwort vergessen?
                                    </a>
                                </div>
                            </div>

                            <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-primary-logo border border-transparent rounded-md hover:bg-primary-dark focus:outline-none focus:shadow-primary-dark active:bg-primary-dark transition duration-150 ease-in-out">
                            einloggen
                        </button>
                    </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
