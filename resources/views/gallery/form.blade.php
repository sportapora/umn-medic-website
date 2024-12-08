@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($gallery) ? 'Edit Gallery Item' : 'Upload New Image' }}</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form 
        action="{{ isset($gallery) ? route('gallery.update', $gallery->id) : route('gallery.store') }}" 
        method="POST" 
        enctype="multipart/form-data"
    >
        @csrf
        @if(isset($gallery))
            @method('PUT')
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input 
                type="text" 
                class="form-control" 
                id="title" 
                name="title" 
                value="{{ isset($gallery) ? $gallery->title : '' }}" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input 
                type="text" 
                class="form-control" 
                id="category" 
                name="category" 
                value="{{ isset($gallery) ? $gallery->category : '' }}" 
                required
            >
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            @if(isset($gallery) && $gallery->image)
                <div class="mb-2">
                    <img 
                        src="{{ asset('storage/' . $gallery->image) }}" 
                        alt="{{ $gallery->title }}" 
                        class="img-thumbnail" 
                        style="max-width: 200px;"
                    >
                </div>
            @endif
            <input 
                type="file" 
                class="form-control" 
                id="image" 
                name="image" 
                {{ isset($gallery) ? '' : 'required' }}
            >
            @if(isset($gallery))
                <small>Leave blank to keep the current image.</small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">
            {{ isset($gallery) ? 'Update' : 'Upload' }}
        </button>
    </form>
</div>
@endsection
