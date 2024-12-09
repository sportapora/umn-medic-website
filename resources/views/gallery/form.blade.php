@extends('layouts.main', ['title' => 'Gallery Form'])

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Gallery Form</h1>

    <div class="mb-6">
        <h2 class="text-xl font-semibold mb-2">Filter by Category:</h2>
        <form action="{{ route('gallery.form') }}" method="GET" class="flex flex-wrap mb-4">
            <button type="submit" name="category" value="pelatihan psychological" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-2 mb-2">Pelatihan Psychological</button>
            <button type="submit" name="category" value="pelatihan eksternal" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-2 mb-2">Pelatihan Eksternal</button>
            <button type="submit" name="category" value="bonding" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-2 mb-2">Bonding</button>
            <button type="submit" name="category" value="pelatihan internal" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mr-2 mb-2">Pelatihan Internal</button>
            <button type="submit" name="category" value="" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Show All</button>
        </form>
    </div>

    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="mb-6">
        @csrf

        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Select Category:</label>
            <select name="category" id="category" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500">
                <option value="">Select a category</option>
                <option value="pelatihan psychological">Pelatihan Psychological</option>
                <option value="pelatihan eksternal">Pelatihan Eksternal</option>
                <option value="bonding">Bonding</option>
                <option value="pelatihan internal">Pelatihan Internal</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image:</label>
            <input type="file" name="image" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Upload</button>
    </form>

    <h2 class="text-xl font-semibold mb-2">Uploaded Images</h2>
    <div id="imageGallery">
        @if($galleries->isEmpty())
            <p class="text-gray-500">No images uploaded yet.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($galleries as $gallery)
                    <div class="border border-gray-300 rounded-md p-2 text-center image-item" data-category="{{ $gallery->category }}">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="w-full h-auto mb-2 rounded">
                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection