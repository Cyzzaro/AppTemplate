@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-lg bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-green-400 to-teal-500 px-6 py-4">
                <h2 class="text-2xl font-semibold text-white">{{ __('Register') }}</h2>
            </div>

            <div class="px-6 py-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('Name') }}
                        </label>
                        <input id="name" type="text"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent @error('name') border-red-500 @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="text-red-500 text-xs mt-2">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('Email Address') }}
                        </label>
                        <input id="email" type="email"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent @error('email') border-red-500 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="text-red-500 text-xs mt-2">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('Password') }}
                        </label>
                        <input id="password" type="password"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent @error('password') border-red-500 @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="text-red-500 text-xs mt-2">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">
                            {{ __('Confirm Password') }}
                        </label>
                        <input id="password-confirm" type="password"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <button type="submit"
                            class="w-full bg-green-500 text-white font-bold py-3 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-50">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="bg-gray-50 px-6 py-4 border-t">
                <p class="text-sm text-gray-600 text-center">
                    {{ __('Do you have an account?') }}
                    <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:text-blue-500">
                        {{ __('Login') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
