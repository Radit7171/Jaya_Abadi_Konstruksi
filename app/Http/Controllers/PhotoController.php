<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Validator;

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
     * Get photos with pagination, filter, and search
     */
    public function getPhotos(Request $request)
    {
        try {
            $query = Photo::query();

            // Filter by category
            if ($request->has('category') && $request->category != '') {
                $query->where('category', $request->category);
            }

            // Search by title
            if ($request->has('search') && $request->search != '') {
                $query->where('title', 'like', '%' . $request->search . '%');
            }

            // Get paginated results
            $perPage = $request->get('per_page', 12);
            $photos = $query->orderBy('created_at', 'desc')->paginate($perPage);

            return response()->json([
                'success' => true,
                'data' => $photos->items(),
                'meta' => [
                    'current_page' => $photos->currentPage(),
                    'last_page' => $photos->lastPage(),
                    'per_page' => $photos->perPage(),
                    'total' => $photos->total(),
                ]
            ]);

        } catch (\Exception $e) {
            \Log::error('Get photos error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to load photos',
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
                ->get(['id', 'title', 'category', 'created_at', 'file_path', 'featured']);

            return response()->json([
                'success' => true,
                'data' => $recentUploads->map(function($upload) {
                    return [
                        'id' => $upload->id,
                        'title' => $upload->title,
                        'timeAgo' => $upload->created_at->diffForHumans(),
                        'category' => $upload->category,
                        'thumbnail' => $upload->file_path,
                        'featured' => $upload->featured
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
                ->get(['id', 'title', 'file_path', 'category', 'featured']);

            return response()->json([
                'success' => true,
                'data' => $gallery->map(function($photo) {
                    return [
                        'id' => $photo->id,
                        'title' => $photo->title,
                        'thumbnail' => $photo->file_path,
                        'category' => $photo->category,
                        'featured' => $photo->featured
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
     * Get photo for editing
     */
    public function edit($id)
    {
        try {
            $photo = Photo::findOrFail($id);

            return response()->json([
                'success' => true,
                'data' => $photo
            ]);

        } catch (\Exception $e) {
            \Log::error('Edit photo error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Photo not found',
                'error' => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update photo
     */
    public function update(Request $request, $id)
    {
        try {
            $photo = Photo::findOrFail($id);

            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'category' => 'required|string|max:255',
                'description' => 'nullable|string',
                'featured' => 'sometimes|boolean',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:51200'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            // Update photo data
            $photo->title = $request->title;
            $photo->category = $request->category;
            $photo->description = $request->description;
            $photo->featured = $request->boolean('featured', false);

            // Handle new photo upload if provided
            if ($request->hasFile('photo')) {
                // Delete old photo
                if ($photo->file_path && Storage::disk('public')->exists($photo->file_path)) {
                    Storage::disk('public')->delete($photo->file_path);
                }

                // Create image manager with GD driver
                $manager = new ImageManager(new Driver());

                $file = $request->file('photo');
                $filename = 'photo_' . time() . '_' . uniqid() . '.webp';
                $directory = 'upload/gallery';
                $storagePath = $directory . '/' . $filename;

                // Buat direktori jika belum ada
                if (!Storage::disk('public')->exists($directory)) {
                    Storage::disk('public')->makeDirectory($directory);
                }

                // Convert ke webp dengan kualitas 60% menggunakan Intervention Image v3
                $image = $manager->read($file);
                $webpImage = $image->toWebp(60);

                // Simpan gambar ke storage
                Storage::disk('public')->put($storagePath, $webpImage->toString());

                // Dapatkan ukuran file setelah kompresi
                $fileSize = Storage::disk('public')->size($storagePath);

                $photo->file_path = $storagePath;
                $photo->size_kb = round($fileSize / 1024);
            }

            $photo->save();

            return response()->json([
                'success' => true,
                'message' => 'Photo updated successfully',
                'data' => $photo
            ]);

        } catch (\Exception $e) {
            \Log::error('Update photo error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to update photo',
                'error' => $e->getMessage()
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
