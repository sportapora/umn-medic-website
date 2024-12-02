@extends('layouts.app', ['title' => 'Absen'])

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-center text-4xl font-bold mb-6 text-medic-primary">Absen</h1>
    @if ($errors->any())
        <div class="alert alert-danger text-center mb-2">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
            </ul>
        </div>
    @endif


    <form action="/attendance" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 space-y-4 mb-5">
        @csrf
        <div>
            <label for="shift" class="block text-sm font-medium text-gray-700">Pilih shift:</label>
            <select id="shift" name="shift" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-medic-primary focus:ring-medic-primary" required>
                <option class="bg-[#F1F5F9]" value="">Pilih shift</option>
                @foreach ($shifts as $shift)
                    <option class="bg-[#F1F5F9]" value="{{$shift->id}}">{{$shift->shift_start}}-{{$shift->shift_end}}</option>
                @endforeach
            </select>
        </div>

        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />

        <div>
            <label for="photo" class="block text-sm font-medium text-gray-700">Bukti Foto</label>
            <input type="file" name="photo" class="mt-1 mb-3 block w-full border border-gray-300 rounded-md shadow-sm focus:border-medic-primary focus:ring-medic-primary transition duration-150" required />
        </div>

        <button type="submit"
            id="submit_button"
            class="w-full py-2 px-4 bg-medic-primary text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none disabled:opacity-50 disabled:cursor-not-allowed transition duration-150">
            Submit
        </button>
    </form>

</div>
@endsection

