@extends('layouts.welcome')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center">
            <h1 class="text-4xl font-semibold text-gray-700">
                {{ __('Welcome') }}
            </h1>
            <p class="mt-4 text-gray-800">
                {{ __('We are glad to have you back. Ready to start?') }}
            </p>
            <div class="mt-6">
                <a href="{{ route('home') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block transition duration-300 ease-in-out">
                    {{ __('Continue to Dashboard') }}
                </a>
            </div>
        </div>
    </div>
@endsection
