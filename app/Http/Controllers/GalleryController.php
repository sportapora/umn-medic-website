<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($category = 'psychological')
    {
        $galleryImages = [
            'psychological' => [
                'Pelatihan Psychological Image 1',
                'Pelatihan Psychological Image 2',
                'Pelatihan Psychological Image 3',
                'Pelatihan Psychological Image 4',
                'Pelatihan Psychological Image 5',
                'Pelatihan Psychological Image 6',
            ],
            'eksternal' => [
                'Pelatihan Eksternal Image 1',
                'Pelatihan Eksternal Image 2',
                'Pelatihan Eksternal Image 3',
                'Pelatihan Eksternal Image 4',
            ],
            'bonding' => [
                'Bonding Image 1',
                'Bonding Image 2',
                'Bonding Image 3',
            ],
            'internal' => [
                'Pelatihan Internal Image 1',
                'Pelatihan Internal Image 2',
                'Pelatihan Internal Image 3',
                'Pelatihan Internal Image 4',
            ],
        ];

        $images = $galleryImages[$category] ?? $galleryImages['psychological'];

        return view('gallery', compact('category', 'images'));
    }
}
