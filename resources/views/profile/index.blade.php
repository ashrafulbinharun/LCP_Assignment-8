@extends('layouts.barta')

@section('title', 'Profile')

@section('content')
    <main class="container max-w-2xl min-h-screen px-2 mx-auto mt-8 space-y-8">
        {{-- Aleart --}}
        @if (session('success'))
            <div class="flex items-center justify-center p-4 mb-4 text-sm font-medium text-green-800 border-2 border-green-300 rounded-lg bg-green-50"
                role="alert">
                <span class="sr-only">Success</span>
                <div class="text-center">{{ session('success') }}</div>
            </div>
        @endif

        <section
            class="bg-white border-2 p-8 border-gray-800 rounded-xl min-h-[400px] space-y-8 flex items-center flex-col justify-center">
            {{-- Profile Info --}}
            <div class="flex flex-col items-center justify-center gap-4 text-center">

                {{-- User Meta --}}
                <div>
                    <h1 class="font-bold md:text-2xl">{{ auth()->user()->name }}</h1>
                    <p class="text-gray-700">{{ auth()->user()->bio }}</p>
                </div>
            </div>

            {{-- Profile Info --}}

            {{-- Edit Profile Button  --}}
            <a href="{{ route('profile.edit', auth()->user()->username) }}" type="button"
                class="flex items-center gap-2 px-4 py-2 -m-2 font-semibold text-gray-700 bg-gray-100 rounded-full hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125">
                    </path>
                </svg>
                Edit Profile
            </a>
        </section>
    </main>
@endsection
