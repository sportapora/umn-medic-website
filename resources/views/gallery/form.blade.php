@extends('layouts.main', ['title' => 'Gallery Form'])

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold text-green-600 mb-4">Gallery Form</h1>

        <div class="mb-6">
            <div class="flex flex-wrap mb-4">
                <a href="{{ route('gallery.form', ['category' => 'psychological']) }}"
                   class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-500 mr-2 mb-2">Pelatihan Psychological</a>
                <a href="{{ route('gallery.form', ['category' => 'eksternal']) }}"
                   class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-500 mr-2 mb-2">Pelatihan Eksternal</a>
                <a href="{{ route('gallery.form', ['category' => 'bonding']) }}"
                   class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-500 mr-2 mb-2">Bonding</a>
                <a href="{{ route('gallery.form', ['category' => 'internal']) }}"
                   class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-500 mr-2 mb-2">Pelatihan Internal</a>
                <a href="{{ route('gallery.form') }}"
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-500 mr-2 mb-2">Show All</a>
            </div>
        </div>

        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data" class="mb-6">
            @csrf

            <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700">Select Category:</label>
                <select name="category" id="category" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Select a category</option>
                    <option value="psychological">Pelatihan Psychological</option>
                    <option value="eksternal">Pelatihan Eksternal</option>
                    <option value="bonding">Bonding</option>
                    <option value="internal">Pelatihan Internal</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Upload Image:</label>
                <input type="file" name="image" required
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500">
            </div>

            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Upload</button>
        </form>

        <h2 class="text-xl font-semibold mb-2">Uploaded Images</h2>
        <div class="overflow-x-auto">
            @if($galleries->isEmpty())
                <p class="text-gray-500">No images uploaded yet.</p>
            @else
                <table class="w-full table-auto border border-gray-300 rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Image</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Category</th>
                            <th class="py-3 px-6 text-left text-sm font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                            @if(request('category') == null || request('category') == $gallery->category)
                                <tr class="border-b hover:bg-gray-100">
                                    <td class="py-4 px-6">
                                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                                             class="w-16 h-16 object-cover rounded">
                                    </td>
                                    <td class="py-4 px-6 text-gray-800">{{ ucfirst($gallery->category) }}</td>
                                    <td class="py-4 px-6">
                                        <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection
