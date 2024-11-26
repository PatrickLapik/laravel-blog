@extends('partials.layout')
@section('title', 'Dashboard')
@section('content')
    <div class="container mx-auto">
        <div class="card mx-auto bg-base-300 p-2">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-base-300">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
