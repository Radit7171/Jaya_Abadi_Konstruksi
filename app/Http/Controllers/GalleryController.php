<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(Request $request)
    {
        $path = public_path('images/gallery');

        // Check if directory exists
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
            $images = collect([]);
        } else {
            $files = File::files($path);

            $images = collect($files)->map(function ($file, $index) {
                return [
                    'path' => 'images/gallery/' . $file->getFilename(),
                    'category' => $this->getCategory($index),
                    'title' => 'Proyek ' . ($index + 1),
                    'description' => $this->getDescription($index),
                    'duration' => $this->getDuration($index),
                    'category_text' => $this->getCategoryText($index)
                ];
            });
        }

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

        // Regular request
        return view('gallery.gallery', compact('paginatedImages'));
    }

    private function getCategory($index)
    {
        $categories = ['structure', 'fabrication', 'maintenance', 'finishing'];
        return $categories[$index % 4];
    }

    private function getCategoryText($index)
    {
        $categories = ['Struktur Baja', 'Fabrikasi Custom', 'Perbaikan & Maintenance', 'Finishing & Coating'];
        return $categories[$index % 4];
    }

    private function getDescription($index)
    {
        $descriptions = [
            'Konstruksi struktur baja untuk gedung komersial dengan standar internasional',
            'Fabrikasi custom tangga dan railing besi dengan desain modern',
            'Perbaikan dan maintenance struktur besi untuk industri',
            'Finishing powder coating dengan warna custom dan tahan lama'
        ];
        return $descriptions[$index % 4];
    }

    private function getDuration($index)
    {
        $durations = ['6 Bulan', '3 Minggu', '2 Minggu', '1 Minggu'];
        return $durations[$index % 4];
    }
}
