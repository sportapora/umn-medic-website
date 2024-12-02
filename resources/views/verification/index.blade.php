@extends('layouts.main', ['title' => 'Verification'])
@section('content')
<div class="bg-gray-50 block">
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-extrabold text-green-600 mb-6 border-b pb-3">List of Unverified Users</h1>
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif
            <div class="overflow-x-auto">
                <table class="table-auto min-w-full border border-green-200 rounded-lg">
                    <thead class="bg-green-200 text-green-700">
                        <tr>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Name</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Email</th>
                            <th class="py-3 px-6 text-center text-sm font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6 text-gray-800">{{ $user->name }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $user->email }}</td>
                            <td class="py-4 px-6 text-center">
                                <form action="{{ route('verify.user', $user->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('PUT')
                                    <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded transition">
                                        Accept
                                    </button>
                                </form>
                                <form action="{{ route('decline.user', $user->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">
                                        Decline
                                    </button>
                                </form>
                            </td>

                        </tr>
                        @endforeach
                        @if($users->isEmpty())
                        <tr>
                            <td colspan="3" class="py-4 px-6 text-center text-gray-500">
                                There is no user to verify
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
