@extends('layouts.app', ['title' => 'Absen'])

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-center text-4xl font-bold mb-6 text-medic-primary-dark">Absen</h1>

    @if (session('success'))
    <div class="flex justify-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative text-center mb-4 w-full max-w-sm mx-auto"
     role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M14.348 5.652a1 1 0 011.415 1.415L11.415 11l4.348 4.348a1 1 0 01-1.415 1.415L10 12.415l-4.348 4.348a1 1 0 01-1.415-1.415L8.585 11 4.237 6.652a1 1 0 011.415-1.415L10 9.585l4.348-4.348z" />
            </svg>
        </button>
    </div>
    @endif


    @if ($errors->any())
    <div class="flex justify-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative text-center mb-4 w-full max-w-sm mx-auto">
        @foreach ($errors->all() as $error)
        <span class="block sm:inline">{{ $error }}</span>
        @endforeach
        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M14.348 5.652a1 1 0 011.415 1.415L11.415 11l4.348 4.348a1 1 0 01-1.415 1.415L10 12.415l-4.348 4.348a1 1 0 01-1.415-1.415L8.585 11 4.237 6.652a1 1 0 011.415-1.415L10 9.585l4.348-4.348z" />
            </svg>
        </button>
    </div>
    @endif

    <form action="/attendance" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 space-y-4 mb-5">
        @csrf
        <div>
            <label for="shift" class="block text-sm font-medium text-gray-700">Pilih shift:</label>
            <select id="shift" name="shift" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-medic-primary focus:ring-medic-primary" require>
                <option class="bg-[#F1F5F9]" value="">Pilih shift</option>
                @foreach ($shifts as $shift)
                    <option class="bg-[#F1F5F9]" value="{{$shift->id}}">{{$shift->shift_start}}-{{$shift->shift_end}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="tekanan" class="block text-sm font-medium text-gray-700">Tekanan</label>
            <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-medic-primary focus:ring-medic-primary" name="tekanan" id="tekanan" placeholder="Ex: 120/80" require/>
        </div>

        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />

        <div>
            <label for="photo" class="block text-sm font-medium text-gray-700">Bukti Foto</label>
            <input type="file" name="photo" class="mt-1 mb-3 block w-full border border-gray-300 rounded-md shadow-sm focus:border-medic-primary focus:ring-medic-primary transition duration-150" require/>
        </div>

        <button type="submit"
            id="submit_button"
            class="w-full py-2 px-4 bg-medic-primary text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none disabled:opacity-50 disabled:cursor-not-allowed transition duration-150">
            Submit
        </button>
    </form>

</div>
@endsection

