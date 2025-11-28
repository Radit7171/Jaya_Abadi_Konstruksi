<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class GalleryController extends Controller
{
    public function gallery(Request $request)
    {
        // Ambil data dari database
        $photosQuery = Photo::orderBy('created_at', 'desc');

        // Filter by category jika ada
        if ($request->has('category') && $request->category != 'all') {
            $photosQuery->where('category', $request->category);
        }

        // Search jika ada
        if ($request->has('search') && !empty($request->search)) {
            $photosQuery->where('title', 'like', '%' . $request->search . '%')
                       ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $photos = $photosQuery->get();

        // Map data dari database ke format yang diharapkan view
        $images = $photos->map(function ($photo, $index) {
            return [
                'path' => $photo->file_path, // path dari database
                'category' => $photo->category,
                'title' => $photo->title,
                'description' => $photo->description,
                'duration' => $this->getDuration($index),
                'category_text' => $this->getCategoryText($photo->category)
            ];
        });

        // Pagination setup
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 12;
        $currentItems = $images->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $paginatedImages = new LengthAwarePaginator(
            $currentItems,
            count($images),
            $perPage,
            $currentPage,
            [
                'path' => url()->current(),
                'pageName' => 'page',
            ]
        );

        // Handle AJAX requests
        if ($request->ajax()) {
            try {
                $paginatedImages->withPath(url()->current());
                $html = view('gallery.partials.gallery_items', compact('paginatedImages'))->render();
                $pagination = view('gallery.partials.pagination', compact('paginatedImages'))->render();

                return response()->json([
                    'success' => true,
                    'html' => $html,
                    'pagination' => $pagination,
                    'current_page' => $currentPage,
                    'total_pages' => $paginatedImages->lastPage(),
                    'total_items' => count($images)
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'error' => 'Failed to load gallery content',
                    'message' => $e->getMessage()
                ], 500);
            }
        }

        // Get unique categories for filter
        $categories = Photo::distinct('category')->whereNotNull('category')->pluck('category');

        // Regular request
        return view('gallery.gallery', compact('paginatedImages', 'categories'));
    }

    private function getCategoryText($category)
    {
        $categoryMap = [
            'construction' => 'Konstruksi Projek',
            'design' => 'Desain Konsep',
            'completed' => 'Projek Selesai',
            'process' => 'Proses Pengerjaan',
            'structure' => 'Struktur Baja',
            'fabrication' => 'Fabrikasi Custom',
            'maintenance' => 'Perbaikan & Maintenance',
            'finishing' => 'Finishing & Coating'
        ];

        return $categoryMap[$category] ?? ucfirst($category);
    }

    private function getDuration($index)
    {
        $durations = ['6 Bulan', '3 Minggu', '2 Minggu', '1 Minggu', '4 Bulan', '2 Bulan'];
        return $durations[$index % 6];
    }
}
