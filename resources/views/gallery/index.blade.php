@extends('layouts.app', ['title' => 'Gallery'])

@section('content')
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

    <div class="grid grid-cols-3 gap-4 mt-10">
        @foreach ($images as $image)
            <div class="w-full h-40 bg-gray-300 rounded">
                <p class="text-center pt-16">{{ $image }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
