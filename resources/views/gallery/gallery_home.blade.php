@extends('layouts.app') 

@section('content')
<div class="container mx-auto py-10">
    <div class="text-center">
        <h1 class="text-3xl font-semibold text-green-700">Gallery</h1>
    </div>
    <div class="flex justify-center mt-8">
        <div class="grid grid-cols-1 gap-4">
            <a href="{{ route('gallery', ['category' => 'psychological']) }}" 
                class="block text-center py-3 px-6 bg-green-100 border border-green-600 text-green-700 font-medium rounded-md hover:bg-green-200">
                Pelatihan Psychological
            </a>
            <a href="{{ route('gallery', ['category' => 'external']) }}" 
                class="block text-center py-3 px-6 bg-green-100 border border-green-600 text-green-700 font-medium rounded-md hover:bg-green-200">
                Pelatihan External
            </a>
            <a href="{{ route('gallery', ['category' => 'bonding']) }}" 
                class="block text-center py-3 px-6 bg-green-100 border border-green-600 text-green-700 font-medium rounded-md hover:bg-green-200">
                Bonding
            </a>
            <a href="{{ route('gallery', ['category' => 'internal']) }}" 
                class="block text-center py-3 px-6 bg-green-100 border border-green-600 text-green-700 font-medium rounded-md hover:bg-green-200">
                Pelatihan Internal
            </a>
        </div>
    </div>
    <div class="mt-10 flex justify-center">
        <div class="w-full max-w-lg h-64 bg-gray-200 rounded-lg">
            <p class="text-gray-500 text-center pt-28">Preview Area</p>
        </div>
    </div>
</div>

<footer class="bg-green-100 mt-10">
    <div class="container mx-auto py-10 text-center">
        <div class="text-green-700 font-semibold">Medical Center</div>
        <p class="text-sm text-green-700">Universitas Multimedia Nusantara<br>
        Jl. Scientia Boulevard, Curug Sangereng<br>
        Kec. Klp. Dua, Kab. Tangerang, Banten 15810</p>
        <p class="text-sm text-green-700 mt-2">Weekdays: 8:00 - 17:00<br>Saturday: 8:00 - 11:00</p>
        <div class="flex justify-center gap-3 mt-4">
            <a href="#" class="text-green-700"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-green-700"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-green-700"><i class="fab fa-tiktok"></i></a>
        </div>
    </div>
</footer>
@endsection
