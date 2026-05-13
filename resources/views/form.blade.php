@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-8">
                <div class="flex items-center mb-6">
                    <a href="/" class="text-gray-500 hover:text-gray-700 mr-4">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                    </a>
                    <h1 class="text-2xl font-bold text-gray-900">Add New Contact</h1>
                </div>

                <form action="{{ route('create.post') }}" method="POST">
                    @csrf

                    <div class="mb-5">
                        <label class="block text-gray-700 font-medium mb-2">Full Name</label>
                        <input type="text" name="full_name"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-5">
                        <label class="block text-gray-700 font-medium mb-2">Phone Number</label>
                        <input type="text" name="phone"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-5">
                        <label class="block text-gray-700 font-medium mb-2">Email Address</label>
                        <input type="email" name="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 font-medium mb-2">Address</label>
                        <textarea name="address" rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"></textarea>
                    </div>

                    <div class="flex gap-3">
                        <button type="submit"
                            class="flex-1 bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                            Save Contact
                        </button>
                        <a href="/"
                            class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition text-center">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
