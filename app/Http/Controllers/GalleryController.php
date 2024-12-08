<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{

    public function index(Request $request)
    {
        $category = $request->category;

        if ($category) {
            $galleries = Gallery::where('category', $category)->get();
        } else {
            $galleries = Gallery::all(); 
        }

        return view('gallery.index', compact('galleries', 'category'));
    }




    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->route('gallery.index');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'nullable|image',
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $gallery->image = $imagePath;
        }

        $gallery->title = $request->title;
        $gallery->category = $request->category;
        $gallery->save();

        return redirect()->route('gallery.index');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery item deleted successfully!');
    }

    public function home()
    {
        return view('gallery.gallery_home');
    }

    public function form($id = null)
    {
        $gallery = null;


        if ($id) {
            $gallery = Gallery::find($id);
        }

        return view('gallery.form', compact('gallery'));
    }




}
