@extends('layouts.app', ['title' => 'Gallery'])

@section('content')
    @include('partials.navbar')

    <div class="container mx-auto mt-10">
        <h1 class="text-center text-2xl font-bold text-green-600">Gallery</h1>

        <div class="flex justify-center space-x-4 mt-6">
            <a href="{{ route('gallery', 'psychological') }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'psychological' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Pelatihan Psychological
            </a>
            <a href="{{ route('gallery', 'eksternal') }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'eksternal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Pelatihan Eksternal
            </a>
            <a href="{{ route('gallery', 'bonding') }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'bonding' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Bonding
            </a>
            <a href="{{ route('gallery', 'internal') }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'internal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Pelatihan Internal
            </a>
        </div>

        <div class="flex justify-center w-full">
            <div class="grid grid-cols-3 gap-4 mt-10 w-full max-w-screen-lg">
                <!-- First Row -->
                <div class="bg-gray-300 rounded overflow-hidden h-40">
                    <img src="path/to/image1.jpg" alt="Image 1" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 rounded overflow-hidden h-40">
                    <img src="path/to/image2.jpg" alt="Image 2" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 rounded overflow-hidden h-40">
                    <img src="path/to/image3.jpg" alt="Image 3" class="w-full h-full object-cover">
                </div>
                <!-- Second Row -->
                <div class="bg-gray-300 rounded overflow-hidden h-40">
                    <img src="path/to/image4.jpg" alt="Image 4" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 rounded overflow-hidden h-40">
                    <img src="path/to/image5.jpg" alt="Image 5" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 rounded overflow-hidden h-40">
                    <img src="path/to/image6.jpg" alt="Image 6" class="w-full h-full object-cover">
                </div>
                <!-- Third Row -->
                <div class="bg-gray-300 rounded overflow-hidden h-80 row-span-2">
                    <img src="path/to/image7.jpg" alt="Image 7" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-300 rounded overflow-hidden h-80 row-span-2">
                    <img src="path/to/image8.jpg" alt="Image 8" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
@endsection
