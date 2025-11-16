<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function gallery()
    {
        $path = public_path('images/gallery');
        $files = File::files($path);

        $images = [];

        foreach ($files as $file) {
            $images[] = 'images/gallery/' . $file->getFilename();
        }

        return view('gallery.gallery', compact('images'));
    }
}
