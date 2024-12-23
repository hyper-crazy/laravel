@extends('layouts.app')

@section('content')
<div class="container flex flex-col justify-center items-center min-h-screen px-6 bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500 via-golden
 bg-gradient-animation">
    <!-- Profile Section -->
    <div class="bg-white shadow-lg rounded-3xl p-8 w-full max-w-3xl flex items-center space-x-8 mb-8">
        <!-- Profile Picture -->
        <div class="flex-shrink-0">
            <img src="https://uxwing.com/default-profile-picture-male-icon/{{ md5(auth()->user()->email) }}" alt="Profile" class="w-24 h-24 rounded-full border-4 border-purple-600 shadow-lg">
        </div>
        <!-- User Info -->
        <div class="flex-grow">
            <h2 class="text-2xl font-bold text-gray-800">Hello, {{ auth()->user()->name }}</h2>
            <p class="text-md text-gray-600 mt-1">Welcome to your personalized dashboard.</p>
        </div>
    </div>

    <!-- Account Details Section -->
    <div class="bg-white shadow-lg rounded-3xl p-8 w-full max-w-3xl mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-6">Account Information</h2>
        <div class="space-y-4">
            <div class="flex justify-between">
                <p class="text-gray-600">Email Address:</p>
                <p class="text-gray-800">{{ auth()->user()->email }}</p>
            </div>
            <div class="flex justify-between">
                <p class="text-gray-600">Phone Number:</p>
                <p class="text-gray-800">{{ auth()->user()->mobile }}</p>
            </div>
            <div class="flex justify-between">
                <p class="text-gray-600">Account Created On:</p>
                <p class="text-gray-800">{{ auth()->user()->created_at->format('M d, Y') }}</p>
            </div>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex space-x-4">
        <!-- Check Eligibility Button -->
        <a href="{{ route('loans.eligibility') }}" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-3 px-6 rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
            Check Eligibility
        </a>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit" class="bg-gradient-to-r from-red-500 to-pink-600 text-white font-semibold py-3 px-6 rounded-full shadow-lg transform hover:scale-105 transition-all duration-300">
                Logout
            </button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @keyframes gradientAnimation {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    .bg-gradient-animation {
        background-size: 200% 200%;
        animation: gradientAnimation 10s ease infinite;
    }

    a:hover, button:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 768px) {
        .container {
            padding: 16px;
        }

        .bg-white {
            padding: 4px;
        }

        .flex {
            flex-direction: column;
            align-items: center;
        }

        img {
            width: 60px;
            height: 60px;
        }
    }
</style>
@endpush
