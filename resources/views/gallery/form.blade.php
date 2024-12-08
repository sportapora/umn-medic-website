@extends('layouts.app', ['title' => 'Gallery Management'])


@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-center text-2xl font-bold text-green-600">
        {{ isset($gallery) ? 'Edit Gallery Item' : 'Gallery Management' }}
    </h1>

    <div class="flex justify-center space-x-4 mt-6">
        <a href="{{ route('gallery.index', ['category' => 'pelatihan psychological']) }}"
            class="py-2 px-4 border-2 rounded {{ request('category') === 'pelatihan psychological' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
            Pelatihan Psychological
        </a>
        <a href="{{ route('gallery.index', ['category' => 'pelatihan eksternal']) }}"
            class="py-2 px-4 border-2 rounded {{ request('category') === 'pelatihan eksternal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
            Pelatihan Eksternal
        </a>
        <a href="{{ route('gallery.index', ['category' => 'bonding']) }}"
            class="py-2 px-4 border-2 rounded {{ request('category') === 'bonding' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
            Bonding
        </a>
        <a href="{{ route('gallery.index', ['category' => 'pelatihan internal']) }}"
            class="py-2 px-4 border-2 rounded {{ request('category') === 'pelatihan internal' ? 'bg-green-500 text-white' : 'border-green-500 text-green-500 hover:bg-green-100' }}">
            Pelatihan Internal
        </a>
    </div>

    <div class="grid grid-cols-3 gap-4 mt-10 w-full max-w-screen-lg mx-auto">
        @forelse($galleries as $gallery)
            <div class="relative bg-gray-300 rounded overflow-hidden h-60">
                <img 
                    src="{{ asset('storage/' . $gallery->image) }}" 
                    alt="{{ $gallery->title }}" 
                    class="w-full h-full object-cover"
                >
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white p-2 text-sm">
                    <h5 class="font-bold">{{ $gallery->title }}</h5>
                    <p>Category: {{ $gallery->category }}</p>
                </div>
                <div class="absolute top-0 right-0 flex space-x-1 p-2">
                    <a href="{{ route('gallery.form', $gallery->id) }}"
                       class="bg-yellow-500 text-white px-2 py-1 text-xs rounded hover:bg-yellow-600">Edit</a>
                    <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 text-white px-2 py-1 text-xs rounded hover:bg-red-600"
                                onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-center text-gray-500 col-span-3">No images available for this category.</p>
        @endforelse
    </div>

    <div class="mt-10 text-center">
        <a href="{{ route('gallery.form') }}" 
           class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
           Upload New Image
        </a>
    </div>
</div>
@endsection
