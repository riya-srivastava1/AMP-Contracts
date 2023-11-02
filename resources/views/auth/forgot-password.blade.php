<x-guest-layout>
    <div class="mb-2">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>
    <!-- Session Status -->

    @if (session('status'))
        <div class="status-msg">
            <x-auth-session-status class="mb-4" :status="session('status')" />
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <!-- Email Address -->
        <div class="form-floating mb-20px">
            <input class="form-control fs-13px h-45px border-0" placeholder="Email Address" type="email" name="email"
                :value="old('email')" required />
            <label for="email" class="d-flex align-items-center text-gray-600 fs-13px">Email
                Address</label>

            @error('email')
                <div class="status-msg">
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                </div>
            @enderror

        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
            <a href="{{ route('login') }}" style=" text-decoration: none;" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">  {{ __('Back To Login') }}</a>
    </form>
</x-guest-layout>
