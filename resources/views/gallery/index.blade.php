@extends('layouts.app', ['title' => 'Gallery'])

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-center text-3xl md:text-4xl font-bold text-green-600">Gallery</h1>

        <div class="overflow-x-auto">
            <div class="flex justify-center space-x-6 mt-6 ms-36 sm:ms-0">
                <a href="{{ route('gallery', 'psychological') }}"
                   class="py-2 px-6 border-2 rounded {{ $category === 'psychological' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                    Pelatihan Psychological
                </a>
                <a href="{{ route('gallery', 'eksternal') }}"
                   class="py-2 px-6 border-2 rounded {{ $category === 'eksternal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                    Pelatihan Eksternal
                </a>
                <a href="{{ route('gallery', 'bonding') }}"
                   class="py-2 px-6 border-2 rounded {{ $category === 'bonding' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                    Bonding
                </a>
                <a href="{{ route('gallery', 'internal') }}"
                   class="py-2 px-6 border-2 rounded {{ $category === 'internal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                    Pelatihan Internal
                </a>
            </div>
        </div>

        <div class="flex md:block justify-center md:justify-normal w-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-10 w-full">
                @foreach ($images as $image)
                    <div class="w-full h-40 bg-gray-300 rounded">
                        <p class="text-center pt-16">{{ $image }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
