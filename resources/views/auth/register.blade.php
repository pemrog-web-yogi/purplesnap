<x-guest-layout>
    <body>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('import/asset/image/logo.svg') }}" alt="" width="40%">
            </div>
            <div class="row g-0">
                <div class="col-md-4 register-img">
                    <img src="{{ asset('import/asset/image/mhs.png') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="mb-5">Register your account</h2>
                        <div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                {{-- NAME --}}
                                <div class="mb-3">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                {{-- Email --}}
                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                {{-- Password --}}
                                <div>
                                    <x-input-label for="password" :value="__('Password')" />
                                    <div class="position-relative">
                                    <x-text-input id="password" class="block  w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                                    <span class="toggle-password" onclick="togglePasswordVisibility()"><img
                                        class="position-absolute" src="{{ asset('import/asset/image/eye-off.svg') }}"
                                        alt="Toggle Password"></span>

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                </div>
                                {{-- Confirm Password --}}
                                <div>
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <div class="position-relative">
                                    <x-text-input id="password_confirmation" class="block w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                                    <span class="toggle-password-confirm" onclick="togglePasswordVisibilityConfirm()"><img
                                        class="position-absolute" src="{{ asset('import/asset/image/eye-off.svg') }}"
                                        alt="Toggle Password"></span>

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                </div>
                                <div class="flex items-center justify-end mb-4">
                                    <a class="" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                            

                                    <x-primary-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-guest-layout>
