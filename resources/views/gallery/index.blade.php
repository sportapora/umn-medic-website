@extends('layouts.app', ['title' => 'Gallery'])

@section('content')
    <div class="container mx-auto mt-10">
        <h1 class="text-center text-2xl font-bold text-green-600">Gallery</h1>

        <div class="flex justify-center space-x-4 mt-6">
            <a href="{{ route('gallery.index', ['category' => 'psychological']) }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'pelatihan psychological' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Pelatihan Psychological
            </a>
            <a href="{{ route('gallery.index', ['category' => 'eksternal']) }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'pelatihan eksternal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Pelatihan Eksternal
            </a>
            <a href="{{ route('gallery.index', ['category' => 'bonding']) }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'bonding' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Bonding
            </a>
            <a href="{{ route('gallery.index', ['category' => 'internal']) }}"
                class="py-2 px-4 border-2 rounded {{ $category === 'pelatihan internal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
                Pelatihan Internal
            </a>
        </div>

        <div class="grid grid-cols-3 gap-4 mt-10 w-full max-w-screen-lg ml-30">

            <div class="space-y-4">
                @foreach($galleries->take(3) as $gallery) 
                    <div class="bg-gray-300 rounded overflow-hidden h-40">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>

            <div class="space-y-4">
                @foreach($galleries->slice(3, 3) as $gallery) 
                    <div class="bg-gray-300 rounded overflow-hidden h-40">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>

            <div class="space-y-4">
                @foreach($galleries->slice(6, 2) as $gallery)
                    <div class="bg-gray-300 rounded overflow-hidden h-80">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-full object-cover">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
