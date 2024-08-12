@extends('layouts.auth')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="w-full max-w-lg bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-400 to-indigo-500 px-6 py-4">
                <h2 class="text-2xl font-semibold text-white">{{ __('Verify Your Email Address') }}</h2>
            </div>

            <div class="px-6 py-8">
                @if (session('resent'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                <p class="text-gray-700 mb-4">
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                </p>

                <form method="POST" action="{{ route('verification.resend') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-blue-500 hover:text-blue-700 font-medium">
                        {{ __('click here to request another') }}
                    </button>.
                </form>
            </div>
            <div class="bg-gray-50 px-6 py-4 border-t">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                    class="w-full flex items-center justify-center px-4 py-2 text-red-500 rounded-lg hover:bg-red-700 hover:text-white transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                    </svg>
                    {{ __('Logout') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </div>
@endsection
