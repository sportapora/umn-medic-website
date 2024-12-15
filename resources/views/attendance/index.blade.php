@extends('layouts.main', ['title' => 'Rekap Absensi'])
@section('content')
    <div class="container mx-auto p-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-3xl font-extrabold text-green-600 mb-6 border-b pb-3">Rekap Absensi</h1>
            
            <div class="flex justify-between items-center mb-6">
                <form id="filter-form" method="GET" action="/attendance" class="flex items-center space-x-4">
                    <label for="date" class="font-medium text-gray-700">Tanggal Absensi:</label>
                    <input
                        type="date"
                        id="date"
                        name="date"
                        value="{{$date}}"
                        class="border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-medic-primary focus:border focus:border-medic-primary"
                        onchange="document.getElementById('filter-form').submit();"/>
                </form>
            </div>
            
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border border-green-200 rounded-lg">
                    <thead class="bg-green-200 text-green-700">
                        <tr>
                            <th class="py-3 px-6 text-left text-sm font-semibold">NIM</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Name</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Shift Start</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Absen</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Tekanan Darah</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Bukti</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendances as $attendance)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-4 px-6 text-sm text-gray-800">{{$attendance->user->nim}}</td>
                                <td class="py-4 px-6 text-sm text-gray-800">{{$attendance->user->name}}</td>
                                <td class="py-4 px-6 text-sm text-gray-800">{{$attendance->shift->shift_start}}</td>
                                <td class="py-4 px-6 text-sm font-semibold {{ $attendance->status == 'late' ? 'text-red-500' : 'text-green-500' }}">
                                    {{$attendance->absen_time}}
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-800">{{$attendance->tekanan}}</td>
                                <td class="py-4 px-6">
                                    <img src="{{asset($attendance->photo_url)}}" alt="Bukti Absensi" class="max-w-xs max-h-48"/>
                                </td>
                                <td class="py-4 px-6">
                                    <form action="/attendance/{{$attendance->id}}" method="POST" class="inline-block">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                            type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded transition">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @if($attendances->isEmpty())
                            <tr>
                                <td colspan="7" class="py-4 px-6 text-center text-gray-500">
                                    No attendance records found
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
