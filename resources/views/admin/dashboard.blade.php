<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Jaya Abadi Konstruksi</title>

    <!-- Laravel CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            --sidebar-bg: #0f172a;
            --header-bg: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
            font-size: 0.875rem;
        }

        .sidebar {
            background: var(--sidebar-bg);
            transition: all 0.2s ease;
        }

        .sidebar-item {
            transition: all 0.15s ease;
            border-left: 2px solid transparent;
            font-size: 0.8rem;
        }

        .sidebar-item:hover {
            background: rgba(255, 255, 255, 0.03);
            border-left-color: #3b82f6;
        }

        .sidebar-item.active {
            background: rgba(255, 255, 255, 0.05);
            border-left-color: #3b82f6;
        }

        .header {
            background: var(--header-bg);
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
            border: 1px solid #f1f5f9;
            transition: all 0.2s ease;
        }

        .card:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .btn-primary {
            background: var(--primary-gradient);
            transition: all 0.2s ease;
            font-size: 0.8rem;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(59, 130, 246, 0.25);
        }

        .upload-area {
            border: 1.5px dashed #cbd5e1;
            transition: all 0.2s ease;
            background: #f8fafc;
        }

        .upload-area:hover, .upload-area.dragover {
            border-color: #3b82f6;
            background: #eff6ff;
        }

        .image-preview {
            transition: all 0.2s ease;
            border-radius: 6px;
            overflow: hidden;
        }

        .image-preview:hover {
            transform: scale(1.01);
        }

        .stats-card {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
            border-left: 3px solid;
        }

        .loading-spinner {
            display: inline-block;
            width: 0.875rem;
            height: 0.875rem;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Preview Image Styles */
        .preview-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 8px;
            margin-top: 12px;
        }

        .preview-item {
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            aspect-ratio: 1;
            background: #f1f5f9;
        }

        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-remove {
            position: absolute;
            top: 4px;
            right: 4px;
            background: rgba(239, 68, 68, 0.9);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.2s;
        }

        .preview-item:hover .preview-remove {
            opacity: 1;
        }

        .preview-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 4px;
            font-size: 9px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Mobile responsive improvements */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                position: fixed;
                z-index: 50;
                height: 100vh;
                width: 280px;
            }

            .sidebar.mobile-open {
                transform: translateX(0);
            }

            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.4);
                z-index: 40;
            }

            .mobile-overlay.active {
                display: block;
            }

            .stats-card {
                padding: 0.75rem;
            }

            .preview-container {
                grid-template-columns: repeat(auto-fill, minmax(70px, 1fr));
                gap: 6px;
            }

            .card {
                margin-bottom: 1rem;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 0.75rem 1rem;
            }

            main {
                padding: 1rem;
            }

            .preview-container {
                grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
            }
        }

        /* Slim scrollbar */
        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 2px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Compact table styles */
        .table-responsive {
            overflow-x: auto;
            font-size: 0.8rem;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 0.5rem 0.75rem;
            text-align: left;
            border-bottom: 1px solid #f1f5f9;
        }

        .table th {
            background: #f8fafc;
            font-weight: 500;
            color: #475569;
            font-size: 0.75rem;
        }

        .table tr:hover {
            background: #f8fafc;
        }
    </style>
</head>

<body class="bg-gray-50 overflow-x-hidden">
    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <div class="flex h-screen">
        <!-- Sidebar - Slim -->
        <div class="sidebar w-56 flex-shrink-0 hidden md:flex flex-col text-white" id="sidebar">
            <!-- Logo -->
            <div class="p-4 border-b border-slate-700">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" class="w-8 h-8" alt="Logo">
                    <div>
                        <h1 class="text-sm font-bold">Jaya Abadi</h1>
                        <p class="text-xs text-slate-400">Admin</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex-1 py-3">
                <nav class="space-y-0.5 px-3">
                    <a href="#" class="sidebar-item active flex items-center px-2 py-2 rounded text-white">
                        <i class="bi bi-speedometer2 mr-2 text-sm"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
                        <i class="bi bi-images mr-2 text-sm"></i>
                        <span>Gallery</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
                        <i class="bi bi-collection-play mr-2 text-sm"></i>
                        <span>Projects</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
                        <i class="bi bi-people mr-2 text-sm"></i>
                        <span>Users</span>
                    </a>
                    <a href="#" class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
                        <i class="bi bi-gear mr-2 text-sm"></i>
                        <span>Settings</span>
                    </a>
                </nav>
            </div>

            <!-- User Profile -->
            <div class="p-3 border-t border-slate-700">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 rounded-full bg-slate-600 flex items-center justify-center">
                        <i class="bi bi-person text-white text-sm"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-xs font-medium truncate">Admin User</p>
                        <p class="text-xs text-slate-400 truncate">admin@jayakonstruksi.com</p>
                    </div>
                    <a href="{{ route('logout') }}" class="text-slate-400 hover:text-white text-sm">
                        <i class="bi bi-box-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header - Slim -->
            <header class="header py-3 px-4 flex items-center justify-between">
                <div class="flex items-center">
                    <button id="sidebarToggle" class="md:hidden text-slate-700 mr-3">
                        <i class="bi bi-list text-lg"></i>
                    </button>
                    <h1 class="text-lg font-semibold text-slate-800">Dashboard</h1>
                </div>

                <div class="flex items-center space-x-3">
                    <!-- Notifications -->
                    <div class="relative">
                        <button class="text-slate-600 hover:text-slate-800">
                            <i class="bi bi-bell text-lg"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-3 h-3 flex items-center justify-center text-[10px]">3</span>
                        </button>
                    </div>

                    <!-- User Menu -->
                    <div class="relative">
                        <button class="flex items-center space-x-2 text-slate-700">
                            <div class="w-7 h-7 rounded-full bg-slate-600 flex items-center justify-center text-white text-sm">
                                <i class="bi bi-person"></i>
                            </div>
                            <span class="hidden md:block text-sm font-medium">Admin</span>
                            <i class="bi bi-chevron-down text-xs"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-4">
                <!-- Stats Overview - Compact -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <div class="stats-card border-l-blue-500">
                        <div class="flex items-center">
                            <div class="p-2 rounded bg-blue-50 text-blue-600 mr-3">
                                <i class="bi bi-images text-sm"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500">Total Photos</p>
                                <h3 class="text-lg font-semibold text-slate-800">1,248</h3>
                            </div>
                        </div>
                    </div>

                    <div class="stats-card border-l-green-500">
                        <div class="flex items-center">
                            <div class="p-2 rounded bg-green-50 text-green-600 mr-3">
                                <i class="bi bi-collection-play text-sm"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500">Projects</p>
                                <h3 class="text-lg font-semibold text-slate-800">42</h3>
                            </div>
                        </div>
                    </div>

                    <div class="stats-card border-l-purple-500">
                        <div class="flex items-center">
                            <div class="p-2 rounded bg-purple-50 text-purple-600 mr-3">
                                <i class="bi bi-eye text-sm"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500">Views This Month</p>
                                <h3 class="text-lg font-semibold text-slate-800">5,892</h3>
                            </div>
                        </div>
                    </div>

                    <div class="stats-card border-l-orange-500">
                        <div class="flex items-center">
                            <div class="p-2 rounded bg-orange-50 text-orange-600 mr-3">
                                <i class="bi bi-upload text-sm"></i>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500">Uploads Today</p>
                                <h3 class="text-lg font-semibold text-slate-800">12</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upload Section - Compact -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <!-- Upload Form -->
                    <div class="card p-4">
                        <h2 class="text-base font-semibold text-slate-800 mb-3">Upload New Photos</h2>

                        <form id="uploadForm" class="space-y-3">
                            @csrf

                            <div>
                                <label for="photoTitle" class="block text-xs font-medium text-slate-700 mb-1">Photo Title</label>
                                <input
                                    type="text"
                                    id="photoTitle"
                                    name="title"
                                    class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Enter photo title"
                                >
                            </div>

                            <div>
                                <label for="photoCategory" class="block text-xs font-medium text-slate-700 mb-1">Category</label>
                                <select
                                    id="photoCategory"
                                    name="category"
                                    class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                                >
                                    <option value="">Select Category</option>
                                    <option value="construction">Construction Projects</option>
                                    <option value="design">Design Concepts</option>
                                    <option value="completed">Completed Works</option>
                                    <option value="process">Work in Progress</option>
                                </select>
                            </div>

                            <div>
                                <label for="photoDescription" class="block text-xs font-medium text-slate-700 mb-1">Description</label>
                                <textarea
                                    id="photoDescription"
                                    name="description"
                                    rows="2"
                                    class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="Enter photo description"
                                ></textarea>
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-700 mb-1">Upload Photos</label>
                                <div
                                    id="uploadArea"
                                    class="upload-area border-1.5 border-dashed rounded p-4 text-center cursor-pointer"
                                >
                                    <i class="bi bi-cloud-arrow-up text-2xl text-slate-400 mb-1"></i>
                                    <p class="text-slate-600 text-xs mb-1">Drag & drop your photos here</p>
                                    <p class="text-slate-500 text-xs">or</p>
                                    <button
                                        type="button"
                                        id="browseButton"
                                        class="btn-primary text-white px-3 py-1.5 rounded text-xs mt-1 inline-flex items-center"
                                    >
                                        <i class="bi bi-folder2-open mr-1"></i> Browse Files
                                    </button>
                                    <input
                                        type="file"
                                        id="fileInput"
                                        name="photos[]"
                                        multiple
                                        accept="image/*"
                                        class="hidden"
                                    >
                                    <p class="text-slate-500 text-xs mt-1">Supports: JPG, PNG, GIF (Max 5MB each)</p>
                                </div>

                                <!-- Image Previews -->
                                <div id="imagePreviews" class="preview-container mt-3 hidden"></div>

                                <div id="fileList" class="mt-3 space-y-1 hidden">
                                    <h4 class="text-xs font-medium text-slate-700">Selected Files:</h4>
                                    <ul id="fileNames" class="text-xs text-slate-600 space-y-0.5"></ul>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    id="featured"
                                    name="featured"
                                    class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-slate-300 rounded"
                                >
                                <label for="featured" class="ml-2 text-xs text-slate-700">
                                    Mark as featured photo
                                </label>
                            </div>

                            <button
                                type="submit"
                                id="uploadButton"
                                class="btn-primary text-white w-full py-2 rounded text-sm flex items-center justify-center"
                            >
                                <i class="bi bi-cloud-upload mr-1.5"></i> Upload Photos
                            </button>
                        </form>
                    </div>

                    <!-- Recent Uploads - Compact -->
                    <div class="card p-4">
                        <div class="flex justify-between items-center mb-3">
                            <h2 class="text-base font-semibold text-slate-800">Recent Uploads</h2>
                            <a href="#" class="text-blue-600 hover:text-blue-800 text-xs font-medium">
                                View All
                            </a>
                        </div>

                        <div class="space-y-2">
                            <div class="flex items-center space-x-3 p-2 border border-slate-200 rounded">
                                <div class="w-12 h-12 bg-slate-200 rounded flex items-center justify-center flex-shrink-0">
                                    <i class="bi bi-image text-slate-400 text-sm"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-slate-800 truncate">Construction Site A</h4>
                                    <p class="text-xs text-slate-500">Added 2 hours ago</p>
                                </div>
                                <div class="flex space-x-1">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 text-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3 p-2 border border-slate-200 rounded">
                                <div class="w-12 h-12 bg-slate-200 rounded flex items-center justify-center flex-shrink-0">
                                    <i class="bi bi-image text-slate-400 text-sm"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-slate-800 truncate">Project Blueprint</h4>
                                    <p class="text-xs text-slate-500">Added yesterday</p>
                                </div>
                                <div class="flex space-x-1">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 text-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3 p-2 border border-slate-200 rounded">
                                <div class="w-12 h-12 bg-slate-200 rounded flex items-center justify-center flex-shrink-0">
                                    <i class="bi bi-image text-slate-400 text-sm"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-slate-800 truncate">Completed Building</h4>
                                    <p class="text-xs text-slate-500">Added 3 days ago</p>
                                </div>
                                <div class="flex space-x-1">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 text-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Photo Gallery - Compact -->
                <div class="card p-4">
                    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 gap-2">
                        <h2 class="text-base font-semibold text-slate-800">Photo Gallery</h2>
                        <div class="flex space-x-2">
                            <select class="px-2 py-1.5 border border-slate-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500">
                                <option>All Categories</option>
                                <option>Construction Projects</option>
                                <option>Design Concepts</option>
                                <option>Completed Works</option>
                            </select>
                            <input
                                type="text"
                                placeholder="Search photos..."
                                class="px-2 py-1.5 border border-slate-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500 w-32"
                            >
                        </div>
                    </div>

                    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-3">
                        <!-- Sample Gallery Items -->
                        <div class="image-preview bg-slate-200 rounded aspect-square flex items-center justify-center">
                            <i class="bi bi-image text-slate-400 text-lg"></i>
                        </div>
                        <div class="image-preview bg-slate-200 rounded aspect-square flex items-center justify-center">
                            <i class="bi bi-image text-slate-400 text-lg"></i>
                        </div>
                        <div class="image-preview bg-slate-200 rounded aspect-square flex items-center justify-center">
                            <i class="bi bi-image text-slate-400 text-lg"></i>
                        </div>
                        <div class="image-preview bg-slate-200 rounded aspect-square flex items-center justify-center">
                            <i class="bi bi-image text-slate-400 text-lg"></i>
                        </div>
                        <div class="image-preview bg-slate-200 rounded aspect-square flex items-center justify-center">
                            <i class="bi bi-image text-slate-400 text-lg"></i>
                        </div>
                        <div class="image-preview bg-slate-200 rounded aspect-square flex items-center justify-center">
                            <i class="bi bi-image text-slate-400 text-lg"></i>
                        </div>
                    </div>

                    <div class="mt-4 flex justify-center">
                        <button class="px-3 py-1.5 border border-slate-300 rounded text-slate-700 hover:bg-slate-50 text-xs font-medium">
                            Load More Photos
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile sidebar toggle
            const sidebarToggle = document.getElementById('sidebarToggle');
            const sidebar = document.getElementById('sidebar');
            const mobileOverlay = document.getElementById('mobileOverlay');

            if (sidebarToggle && sidebar && mobileOverlay) {
                sidebarToggle.addEventListener('click', function() {
                    sidebar.classList.toggle('mobile-open');
                    mobileOverlay.classList.toggle('active');
                });

                mobileOverlay.addEventListener('click', function() {
                    sidebar.classList.remove('mobile-open');
                    mobileOverlay.classList.remove('active');
                });
            }

            // File upload functionality
            const uploadArea = document.getElementById('uploadArea');
            const browseButton = document.getElementById('browseButton');
            const fileInput = document.getElementById('fileInput');
            const fileList = document.getElementById('fileList');
            const fileNames = document.getElementById('fileNames');
            const imagePreviews = document.getElementById('imagePreviews');
            const uploadForm = document.getElementById('uploadForm');
            const uploadButton = document.getElementById('uploadButton');

            // Store selected files for preview
            let selectedFiles = [];

            if (uploadArea && browseButton && fileInput) {
                // Click on upload area or browse button to trigger file input
                uploadArea.addEventListener('click', function() {
                    fileInput.click();
                });

                browseButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    fileInput.click();
                });

                // Drag and drop functionality
                uploadArea.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    uploadArea.classList.add('dragover');
                });

                uploadArea.addEventListener('dragleave', function() {
                    uploadArea.classList.remove('dragover');
                });

                uploadArea.addEventListener('drop', function(e) {
                    e.preventDefault();
                    uploadArea.classList.remove('dragover');

                    if (e.dataTransfer.files.length) {
                        handleFiles(e.dataTransfer.files);
                    }
                });

                // File input change
                fileInput.addEventListener('change', function() {
                    if (fileInput.files.length) {
                        handleFiles(fileInput.files);
                    }
                });

                // Handle selected files
                function handleFiles(files) {
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];

                        // Check if file is an image
                        if (!file.type.match('image.*')) {
                            showNotification('Please select only image files', 'error');
                            continue;
                        }

                        // Check file size (5MB limit)
                        if (file.size > 5 * 1024 * 1024) {
                            showNotification(`File ${file.name} is too large. Max size is 5MB.`, 'error');
                            continue;
                        }

                        // Add to selected files if not already there
                        if (!selectedFiles.some(f => f.name === file.name && f.size === file.size)) {
                            selectedFiles.push(file);
                        }
                    }

                    // Update previews and file list
                    updatePreviews();
                    updateFileList();
                }

                // Update image previews
                function updatePreviews() {
                    imagePreviews.innerHTML = '';

                    if (selectedFiles.length > 0) {
                        imagePreviews.classList.remove('hidden');

                        selectedFiles.forEach((file, index) => {
                            const reader = new FileReader();

                            reader.onload = function(e) {
                                const previewItem = document.createElement('div');
                                previewItem.className = 'preview-item';
                                previewItem.innerHTML = `
                                    <img src="${e.target.result}" alt="${file.name}" class="preview-image">
                                    <div class="preview-remove" data-index="${index}">
                                        <i class="bi bi-x"></i>
                                    </div>
                                    <div class="preview-info">${file.name}</div>
                                `;

                                imagePreviews.appendChild(previewItem);

                                // Add remove functionality
                                const removeBtn = previewItem.querySelector('.preview-remove');
                                removeBtn.addEventListener('click', function() {
                                    const removeIndex = parseInt(this.getAttribute('data-index'));
                                    selectedFiles.splice(removeIndex, 1);
                                    updatePreviews();
                                    updateFileList();
                                });
                            };

                            reader.readAsDataURL(file);
                        });
                    } else {
                        imagePreviews.classList.add('hidden');
                    }
                }

                // Update file list display
                function updateFileList() {
                    if (selectedFiles.length > 0) {
                        fileNames.innerHTML = '';

                        selectedFiles.forEach((file, index) => {
                            const listItem = document.createElement('li');
                            listItem.className = 'flex items-center justify-between';
                            listItem.innerHTML = `
                                <span class="truncate flex-1">${file.name}</span>
                                <span class="text-slate-500 text-xs ml-2">${formatFileSize(file.size)}</span>
                            `;
                            fileNames.appendChild(listItem);
                        });

                        fileList.classList.remove('hidden');
                    } else {
                        fileList.classList.add('hidden');
                    }
                }

                // Format file size
                function formatFileSize(bytes) {
                    if (bytes === 0) return '0 Bytes';

                    const k = 1024;
                    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                    const i = Math.floor(Math.log(bytes) / Math.log(k));

                    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
                }
            }

            // Form submission
            if (uploadForm && uploadButton) {
                uploadForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Basic validation
                    const title = document.getElementById('photoTitle').value;
                    const category = document.getElementById('photoCategory').value;

                    if (!title) {
                        showNotification('Please enter a photo title', 'error');
                        return;
                    }

                    if (!category) {
                        showNotification('Please select a category', 'error');
                        return;
                    }

                    if (selectedFiles.length === 0) {
                        showNotification('Please select at least one photo', 'error');
                        return;
                    }

                    // Show loading state
                    const originalText = uploadButton.innerHTML;
                    uploadButton.innerHTML = '<span class="loading-spinner mr-1.5"></span> Uploading...';
                    uploadButton.disabled = true;

                    // In a real application, you would submit the form via AJAX
                    // For now, we'll simulate the upload process
                    simulateUpload();
                });

                // Simulate upload process
                function simulateUpload() {
                    let progress = 0;
                    const interval = setInterval(() => {
                        progress += 10;
                        if (progress >= 100) {
                            clearInterval(interval);

                            // Reset button
                            uploadButton.innerHTML = '<i class="bi bi-cloud-upload mr-1.5"></i> Upload Photos';
                            uploadButton.disabled = false;

                            // Show success message
                            showNotification(`${selectedFiles.length} photos uploaded successfully!`, 'success');

                            // Reset form
                            uploadForm.reset();
                            selectedFiles = [];
                            updatePreviews();
                            updateFileList();
                        }
                    }, 200);
                }
            }

            // Notification function
            function showNotification(message, type = 'info') {
                // Create notification element
                const notification = document.createElement('div');
                notification.className = `fixed top-3 right-3 p-3 rounded shadow-lg z-50 transform transition-transform duration-200 translate-x-full max-w-xs`;

                // Set background color based on type
                if (type === 'success') {
                    notification.classList.add('bg-green-500', 'text-white');
                } else if (type === 'error') {
                    notification.classList.add('bg-red-500', 'text-white');
                } else {
                    notification.classList.add('bg-blue-500', 'text-white');
                }

                // Add icon based on type
                let icon = 'bi-info-circle';
                if (type === 'success') icon = 'bi-check-circle';
                if (type === 'error') icon = 'bi-exclamation-circle';

                notification.innerHTML = `
                    <div class="flex items-center text-sm">
                        <i class="bi ${icon} mr-2"></i>
                        <span>${message}</span>
                    </div>
                `;

                document.body.appendChild(notification);

                // Animate in
                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 10);

                // Remove after 3 seconds
                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        if (document.body.contains(notification)) {
                            document.body.removeChild(notification);
                        }
                    }, 200);
                }, 3000);
            }
        });
    </script>
</body>

</html>
