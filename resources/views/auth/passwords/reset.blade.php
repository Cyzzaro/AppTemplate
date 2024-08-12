@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="max-w-md w-full bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-yellow-500 to-red-500 p-6 text-center">
                <h2 class="text-2xl font-bold text-white">
                    {{ __('Reset Password') }}
                </h2>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-5">
                        <label for="email" class="block text-gray-700 font-medium mb-2">
                            {{ __('Email Address') }}
                        </label>
                        <input id="email" type="email"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent @error('email') border-red-500 @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-red-500 text-sm mt-2">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password" class="block text-gray-700 font-medium mb-2">
                            {{ __('Password') }}
                        </label>
                        <input id="password" type="password"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent @error('password') border-red-500 @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="text-red-500 text-sm mt-2">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label for="password-confirm" class="block text-gray-700 font-medium mb-2">
                            {{ __('Confirm Password') }}
                        </label>
                        <input id="password-confirm" type="password"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full bg-red-500 text-white font-bold py-3 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="bg-gray-50 px-6 py-4 border-t">
                <p class="text-sm text-gray-600 text-center">
                    <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:text-blue-500">
                        {{ __('Come back') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
