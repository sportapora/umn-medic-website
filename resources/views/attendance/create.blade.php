@extends('layouts.app', ['title' => 'Absen'])

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-center text-4xl font-bold mb-6 text-medic-primary">Absen</h1>

    <form action="/attendance" method="post" enctype="multipart/form-data" class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 space-y-4 mb-5">
        @csrf

        <!-- Shift Time Selection -->
        <div class="form-control">
            <label for="shift_time" class="block text-sm font-medium text-gray-700">Pilih Shift:</label>
            <select 
                id="shift_time" 
                name="shift_time" 
                onchange="checkShiftTime()"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-medic-primary focus:ring-medic-primary">
                <option class="bg-[#F1F5F9]" value="8:00">8:00-10:00</option>
                <option class="bg-[#F1F5F9]" value="10:00">10:00-12:00</option>
                <option class="bg-[#F1F5F9]" value="12:00">12:00-14:00</option>
                <option class="bg-[#F1F5F9]" value="14:00">14:00-16:00</option>
                <option class="bg-[#F1F5F9]" value="16:00">16:00-18:00</option>
            </select>
        </div>

        <!-- Hidden User ID -->
        <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />

        <!-- Photo Upload -->
        <div class="form-control">
            <label for="photo" class="block text-sm font-medium text-gray-700">Bukti Foto</label>
            <input 
                type="file" 
                name="photo" 
                required 
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-medic-primary focus:ring-medic-primary">
        </div>

        <!-- Submit Button -->
        <button 
            type="submit" 
            id="submit_button" 
            disabled 
            class="w-full py-2 px-4 bg-medic-primary text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none disabled:opacity-50 disabled:cursor-not-allowed">
            Submit
        </button>
    </form>

    <!-- Back Link -->
    <a href="./" class="underline hover:text-medic-primary transition duration-150">
        ← Kembali ke Rekap Absensi
    </a>
</div>

<script>
    function checkShiftTime() {
        const shiftSelect = document.getElementById("shift_time");
        const submitButton = document.getElementById("submit_button");

        const shiftTime = shiftSelect.value;
        const [shiftHour, shiftMinute] = shiftTime.split(":").map(Number);

        const currentTime = new Date();
        const currentHour = currentTime.getHours();
        const currentMinute = currentTime.getMinutes();

        const shiftInMinutes = shiftHour * 60 + shiftMinute;
        const currentInMinutes = currentHour * 60 + currentMinute;

        if (shiftInMinutes - currentInMinutes <= 15) {
            submitButton.disabled = true;
            alert('You cannot submit attendance for this shift. Please choose another shift.');
        } else {
            submitButton.disabled = false;
        }
    }
    window.onload = checkShiftTime;
</script>
@endsection
