@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 prose">
        <div class="bg-white shadow-md rounded-lg">
            <div class="bg-gray-200 px-6 py-4 font-semibold text-gray-700">
                {{ __('Dashboard') }}
            </div>

            <div class="px-6 py-4">
                @if (session('status'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                        role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="text-3xl font-bold underline">
                    {{ __('You are logged in!') }}
                </h1>
            </div>
        </div>
    </div>
@endsection
