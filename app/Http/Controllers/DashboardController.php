<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Visitor; // <-- tambahkan ini
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    /**
     * Get dashboard data for admin
     */
    public function getDashboardData()
    {
        try {
            // Total Photos - count all photos
            $totalPhotos = Photo::count();

            // Total Projects - count distinct categories
            $totalProjects = Photo::whereNotNull('category')
                                ->where('category', '!=', '')
                                ->distinct('category')
                                ->count('category');

            // REAL Views This Month (bukan dummy)
            $viewsThisMonth = Visitor::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count();

            // Uploads Today - count photos uploaded today
            $uploadsToday = Photo::whereDate('created_at', today())->count();

            // Recent Uploads (5 terbaru)
            $recentUploads = Photo::orderBy('created_at', 'desc')
                ->take(5)
                ->get(['id', 'title', 'category', 'created_at', 'file_path']);

            // Gallery Photos (12 terbaru)
            $gallery = Photo::orderBy('created_at', 'desc')
                ->take(12)
                ->get(['id', 'title', 'file_path']);

            // User data
            $user = auth()->user();

            return response()->json([
                'success' => true,
                'data' => [
                    'user' => [
                        'name' => $user->name,
                        'email' => $user->email
                    ],
                    'stats' => [
                        'totalPhotos' => $totalPhotos,
                        'totalProjects' => $totalProjects,
                        'viewsThisMonth' => $viewsThisMonth,
                        'uploadsToday' => $uploadsToday
                    ],
                    'recentUploads' => $recentUploads->map(function($upload) {
                        return [
                            'id' => $upload->id,
                            'title' => $upload->title,
                            'timeAgo' => $upload->created_at->diffForHumans(),
                            'category' => $upload->category,
                            'thumbnail' => $upload->file_path
                        ];
                    }),
                    'gallery' => $gallery->map(function($photo) {
                        return [
                            'id' => $photo->id,
                            'title' => $photo->title,
                            'thumbnail' => $photo->file_path
                        ];
                    })
                ]
            ]);

        } catch (\Exception $e) {
            \Log::error('Dashboard data error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Failed to load dashboard data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
