@extends('layouts.barta')

@section('title', 'Home')

@section('content')
    <main class="container max-w-xl min-h-screen px-2 mx-auto mt-8 space-y-8 md:px-0">

        {{-- Aleart --}}
        @if (session('success'))
            <div class="flex items-center justify-center p-4 mb-4 text-sm font-medium text-green-800 border-2 border-green-300 rounded-lg bg-green-50"
                role="alert">
                <span class="sr-only">Success</span>
                <div class="text-center">{{ session('success') }}</div>
            </div>
        @endif

        <div class="p-12 text-center border border-gray-800 rounded-xl">
            <h1 class="items-center justify-center text-3xl">Welcome to Barta!</h1>
        </div>
    </main>
@endsection
