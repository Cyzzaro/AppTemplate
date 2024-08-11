@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-gray-200 px-6 py-4 font-semibold text-gray-700">
                {{ __('Reset Password') }}
            </div>

            <div class="px-6 py-4">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">
                            {{ __('Email Address') }}
                        </label>
                        <input id="email" type="email"
                            class="block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300 @error('email') border-red-500 @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium mb-2">
                            {{ __('Password') }}
                        </label>
                        <input id="password" type="password"
                            class="block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300 @error('password') border-red-500 @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="text-red-500 text-sm mt-1">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="block text-gray-700 font-medium mb-2">
                            {{ __('Confirm Password') }}
                        </label>
                        <input id="password-confirm" type="password"
                            class="block w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring focus:border-blue-300"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
