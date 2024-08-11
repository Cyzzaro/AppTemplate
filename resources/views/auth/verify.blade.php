@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-gray-200 px-6 py-4 font-semibold text-gray-700">
                {{ __('Verify Your Email Address') }}
            </div>

            <div class="px-6 py-4">
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
