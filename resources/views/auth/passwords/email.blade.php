@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-lg bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-400 to-indigo-500 px-6 py-4">
                <h2 class="text-2xl font-semibold text-white">{{ __('Reset Password') }}</h2>
            </div>

            <div class="px-6 py-8">
                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">
                            {{ __('Email Address') }}
                        </label>
                        <input id="email" type="email"
                            class="block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300 @error('email') border-red-500 @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-6">
                        <button type="submit"
                            class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
            <div class="bg-gray-50 px-6 py-4 border-t">
                <p class="text-sm text-gray-600 text-center">
                    @php
                        $previousUrl = url()->previous();
                        $currentUrl = url()->current();
                        $loginRoute = route('login');
                        $redirectUrl = $previousUrl !== $currentUrl ? $previousUrl : $loginRoute;
                    @endphp
                    <a href="{{ $redirectUrl }}" class="text-blue-600 font-medium hover:text-blue-500">
                        {{ __('Come back') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
