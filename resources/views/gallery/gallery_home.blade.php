@extends('layouts.app') 

@section('content')
<div class="container mx-auto py-10">
    <div class="text-center">
        <h1 class="text-3xl font-semibold text-green-700">Gallery</h1>
    </div>
    <div class="flex justify-center mt-8">
        <div class="grid grid-cols-1 gap-4">
            <a href="{{ route('gallery.index', ['category' => 'psychological']) }}" 
                class="block text-center py-3 px-6 bg-green-100 border border-green-600 text-green-700 font-medium rounded-md hover:bg-green-200">
                Pelatihan Psychological
            </a>
            <a href="{{ route('gallery.index', ['category' => 'external']) }}" 
                class="block text-center py-3 px-6 bg-green-100 border border-green-600 text-green-700 font-medium rounded-md hover:bg-green-200">
                Pelatihan External
            </a>
            <a href="{{ route('gallery.index', ['category' => 'bonding']) }}" 
                class="block text-center py-3 px-6 bg-green-100 border border-green-600 text-green-700 font-medium rounded-md hover:bg-green-200">
                Bonding
            </a>
            <a href="{{ route('gallery.index', ['category' => 'internal']) }}" 
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

@endsection
