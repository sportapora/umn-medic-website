@extends('layouts.main', ['title' => 'Rekap Absensi'])

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-center text-4xl font-bold mb-6 text-medic-primary">Rekap Absensi</h1>
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
    <div class="overflow-x-auto shadow rounded-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">NIM</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Name</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Shift Start</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Absen</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Tekanan Darah</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Bukti</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($attendances as $attendance)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-800">{{$attendance->user->nim}}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{$attendance->user->name}}</td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{$attendance->shift->shift_start}}</td>
                    <td class="px-4 py-2 text-sm font-semibold {{ $attendance->status == 'late' ? 'text-red-500' : 'text-green-500' }}">
                            {{$attendance->absen_time}}
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-800">{{$attendance->tekanan}}</td>
                    <td class="px-4 py-2">
                        <img src="{{asset($attendance->photo_url)}}" alt="Bukti Absensi" style="padding: 10px; max-width: 200px; max-height: 200px;"/>
                    </td>
                    <td>
                        <form action="/attendance/{{$attendance->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
