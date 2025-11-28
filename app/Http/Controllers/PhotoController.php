<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PhotoController extends Controller
{
    /**
     * Upload new photos
     */
    public function uploadPhoto(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'description' => 'nullable|string',
                'photos' => 'required|array',
                'photos.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:51200', // 50MB
                'featured' => 'sometimes|boolean'
            ]);

            // Create image manager with GD driver
            $manager = new ImageManager(new Driver());

            $uploadedPhotos = [];
            $uploadCount = 0;

            foreach ($request->file('photos') as $photo) {
                // Generate unique filename dengan format webp
                $filename = 'photo_' . time() . '_' . uniqid() . '.webp';

                // Path untuk disimpan di storage
                $directory = 'upload/gallery';
                $storagePath = $directory . '/' . $filename;

                // Buat direktori jika belum ada
                if (!Storage::disk('public')->exists($directory)) {
                    Storage::disk('public')->makeDirectory($directory);
                }

                // Convert ke webp dengan kualitas 60% menggunakan Intervention Image v3
                $image = $manager->read($photo);
                $webpImage = $image->toWebp(60);

                // Simpan gambar ke storage
                Storage::disk('public')->put($storagePath, $webpImage->toString());

                // Dapatkan ukuran file setelah kompresi
                $fileSize = Storage::disk('public')->size($storagePath);

                // Create photo record in database
                $photoRecord = Photo::create([
                    'title' => $request->title,
                    'category' => $request->category,
                    'description' => $request->description,
                    'file_path' => $storagePath,
                    'size_kb' => round($fileSize / 1024),
                    'featured' => $request->boolean('featured', false)
                ]);

                $uploadedPhotos[] = $photoRecord;
                $uploadCount++;
            }

            return response()->json([
                'success' => true,
                'message' => $uploadCount . ' photos uploaded and converted to WebP successfully!',
                'photos' => $uploadedPhotos
            ]);

        } catch (\Exception $e) {
            \Log::error('Photo upload error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Upload failed: ' . $e->getMessage(),
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get recent uploads
     */
    public function getRecentUploads()
    {
        try {
            $recentUploads = Photo::orderBy('created_at', 'desc')
                ->take(10)
                ->get(['id', 'title', 'category', 'created_at', 'file_path']);

            return response()->json([
                'success' => true,
                'data' => $recentUploads->map(function($upload) {
                    return [
                        'id' => $upload->id,
                        'title' => $upload->title,
                        'timeAgo' => $upload->created_at->diffForHumans(),
                        'category' => $upload->category,
                        'thumbnail' => $upload->file_path
                    ];
                })
            ]);

        } catch (\Exception $e) {
            \Log::error('Recent uploads error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to load recent uploads'
            ], 500);
        }
    }

    /**
     * Get gallery photos
     */
    public function getGalleryPhotos()
    {
        try {
            $gallery = Photo::orderBy('created_at', 'desc')
                ->take(20)
                ->get(['id', 'title', 'file_path', 'category']);

            return response()->json([
                'success' => true,
                'data' => $gallery->map(function($photo) {
                    return [
                        'id' => $photo->id,
                        'title' => $photo->title,
                        'thumbnail' => $photo->file_path,
                        'category' => $photo->category
                    ];
                })
            ]);

        } catch (\Exception $e) {
            \Log::error('Gallery photos error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to load gallery photos'
            ], 500);
        }
    }

    /**
     * Delete photo
     */
    public function deletePhoto($id)
    {
        try {
            $photo = Photo::findOrFail($id);

            // Delete file from storage
            if (Storage::disk('public')->exists($photo->file_path)) {
                Storage::disk('public')->delete($photo->file_path);
            }

            // Delete record from database
            $photo->delete();

            return response()->json([
                'success' => true,
                'message' => 'Photo deleted successfully'
            ]);

        } catch (\Exception $e) {
            \Log::error('Delete photo error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to delete photo'
            ], 500);
        }
    }
}
