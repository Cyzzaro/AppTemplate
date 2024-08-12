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
        </div>
    </div>
@endsection
