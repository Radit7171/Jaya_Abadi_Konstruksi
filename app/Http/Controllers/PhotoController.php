<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver; // atau Imagick\Driver

class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        try {

            $request->validate([
                'title'       => 'required|string',
                'category'    => 'required|string',
                'description' => 'nullable|string',
                'photos.*'    => 'required|image|mimes:jpg,jpeg,png,webp|max:5120'
            ]);

            // Create image manager with GD driver
            $manager = new ImageManager(new Driver());

            $uploadedFiles = [];

            foreach ($request->file('photos') as $file) {

                // Buat nama file baru .webp
                $filename = uniqid('img_') . '.webp';

                // Path tujuan
                $storagePath = storage_path('app/public/upload/gallery/' . $filename);

                // Buat folder jika belum ada
                if (!file_exists(dirname($storagePath))) {
                    mkdir(dirname($storagePath), 0777, true);
                }

                // Convert ke webp (quality 60%) - CARA BARU di v3
                $image = $manager->read($file);
                $image->toWebp(60)->save($storagePath);

                // Hitung size (KB)
                $sizeKB = round(filesize($storagePath) / 1024, 2);

                // Simpan ke database
                $photo = Photo::create([
                    'title'       => $request->title,
                    'category'    => $request->category,
                    'description' => $request->description,
                    'file_path'   => 'upload/gallery/' . $filename,
                    'size_kb'     => $sizeKB,
                ]);

                // Siapkan response
                $uploadedFiles[] = [
                    'id'   => $photo->id,
                    'url'  => asset('storage/upload/gallery/' . $filename),
                    'size' => $sizeKB,
                ];
            }

            return response()->json([
                'success' => true,
                'message' => 'Photos uploaded & converted to WebP!',
                'files'   => $uploadedFiles
            ]);

        } catch (\Throwable $e) {

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
