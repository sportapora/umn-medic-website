<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        // Fetch unique categories
        $categories = Gallery::getUniqueCategories();

        $category = $request->get('category');
        
        $galleries = $category ? Gallery::where('category', $category)->get() : Gallery::all(); // Fetch all galleries if no category is selected

        return view('gallery.index', compact('galleries', 'categories', 'category')); // Return to the public gallery view
    }

    public function create()
    {
        // Fetch unique categories
        $categories = Gallery::getUniqueCategories();

        return view('gallery.form', [
            'galleries' => Gallery::all(),
            'categories' => $categories,
            'category' => null,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'category' => 'required',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Gallery::create([
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('gallery.form')->with('success', 'Gallery item created successfully.'); // Redirect to the form page
    }

    public function edit(Gallery $gallery)
    {
        $categories = Gallery::getUniqueCategories();

        return view('gallery.edit', [
            'gallery' => $gallery,
            'categories' => $categories,
            'category' => $gallery->category,
        ]);
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'category' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($gallery->image);
            $imagePath = $request->file('image')->store('images', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->category = $request->category;
        $gallery->save();

        return redirect()->route('gallery.form')->with('success', 'Gallery item updated successfully.'); // Redirect to the form page
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->image) {
            Storage::delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('gallery.form')->with('success', 'Gallery item deleted successfully!'); // Redirect to the form page
    }

    public function form()
    {

        // $gallery = Gallery::filter(request()->get('category'))->get();

        $galleries = Gallery::all();

        return view('gallery.form', compact('galleries'));
    }
}