@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow p-8 rounded">

    <h1 class="text-3xl font-bold mb-6">Contact Us</h1>

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
        @csrf

        {{-- NAME --}}
        <div>
            <label class="block text-gray-700 mb-1">Your Name</label>
            <input type="text" name="name" value="{{ old('name') }}"
                class="w-full p-3 border rounded @error('name') border-red-500 @enderror"
                placeholder="Enter your name">

            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- EMAIL --}}
        <div>
            <label class="block text-gray-700 mb-1">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}"
                class="w-full p-3 border rounded @error('email') border-red-500 @enderror"
                placeholder="Enter your email">

            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- MESSAGE --}}
        <div>
            <label class="block text-gray-700 mb-1">Your Message</label>
            <textarea name="message" rows="5"
                class="w-full p-3 border rounded @error('message') border-red-500 @enderror"
                placeholder="Write your message">{{ old('message') }}</textarea>

            @error('message')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- BUTTON --}}
        <button class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            Send Message
        </button>
    </form>
</div>
@endsection
