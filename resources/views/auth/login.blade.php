<x-guest-layout>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('import/asset/image/logo.svg') }}" alt="" width="40%">
        </div>
        <div class="row g-0">
            <div class="col-md-4 login-img">
                <img src="{{ asset('import/asset/image/mhs.png') }}" class="img-fluid rounded-start" alt="mhs">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="mb-5">Log in to your account</h2>
                    <div>
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="password" :value="__('Password')" />
                            <div class="position-relative">
                                <x-text-input id="password" class="block w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                                <span class="toggle-password" onclick="togglePasswordVisibility()"><img
                                    class="position-absolute" src="{{ asset('import/asset/image/eye-off.svg') }}"
                                    alt="Toggle Password"></span>
    
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            </div>
                            <div class="forgot">
                                <div class="forgot flex items-center justify-end ">
                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif
                        
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>
                            <x-primary-button class="">
                                {{ __('Log in') }}
                            </x-primary-button>
                            <div class="afterreg">
                                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</x-guest-layout>

