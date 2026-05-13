@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto">
        <div class="bg-white rounded-xl shadow-md overflow-hidden">

            <div class="p-6 border-b flex items-center justify-between">
                <h1 class="text-2xl font-bold text-gray-900">All Contacts</h1>

                <a href="{{ route('index.create') }}"
                    class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                    Add Contact
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left">

                    <thead class="bg-gray-100 border-b">
                        <tr>
                            <th class="px-6 py-4 text-gray-700 font-semibold">Full Name</th>
                            <th class="px-6 py-4 text-gray-700 font-semibold">Phone</th>
                            <th class="px-6 py-4 text-gray-700 font-semibold">Email</th>
                            <th class="px-6 py-4 text-gray-700 font-semibold">Address</th>
                            <th class="px-6 py-4 text-gray-700 font-semibold">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr class="border-b hover:bg-gray-50 transition">
                                <td class="px-6 py-4">{{ $contact->full_name }}</td>
                                <td class="px-6 py-4"> {{ $contact->phone }}</td>
                                <td class="px-6 py-4">{{ $contact->email }}</td>
                                <td class="px-6 py-4">{{ $contact->address }}</td>

                                <td class="px-6 py-4 flex gap-2">
                                    <button
                                        class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
                                        Edit
                                    </button>

                                    <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
