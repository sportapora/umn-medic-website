<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $galleries = Gallery::when($category, function ($query) use ($category) {
            return $query->where('category', $category);
        })->get();

        return view('gallery.index', compact('galleries', 'category'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
            'category' => 'required|string'
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'image' => $imagePath,
            'category' => $request->category,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery item added successfully!');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'category' => 'required|string'
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('gallery', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->title = $request->title;
        $gallery->category = $request->category;
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery item updated successfully!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery item deleted successfully!');
    }
}
