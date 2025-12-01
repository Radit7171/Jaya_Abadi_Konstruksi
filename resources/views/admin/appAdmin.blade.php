<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - Jaya Abadi Konstruksi')</title>

    <!-- Laravel CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

        .upload-area:hover,
        .upload-area.dragover {
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
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
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

        .table th,
        .table td {
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

        /* Upload button disabled state */
        .btn-primary:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .btn-primary:disabled:hover {
            transform: none;
            box-shadow: none;
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
                    <a href="{{ route('dashboard') }}" class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }} flex items-center px-2 py-2 rounded text-white">
                        <i class="bi bi-speedometer2 mr-2 text-sm"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="#"
                        class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
                        <i class="bi bi-images mr-2 text-sm"></i>
                        <span>Gallery</span>
                    </a>
                    <a href="#"
                        class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
                        <i class="bi bi-collection-play mr-2 text-sm"></i>
                        <span>Projects</span>
                    </a>
                    <a href="#"
                        class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
                        <i class="bi bi-people mr-2 text-sm"></i>
                        <span>Users</span>
                    </a>
                    <a href="#"
                        class="sidebar-item flex items-center px-2 py-2 rounded text-slate-300 hover:text-white">
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
                        <!-- Dynamic User Data -->
                        <p class="text-xs font-medium truncate" id="sidebarUserName">Loading...</p>
                        <p class="text-xs text-slate-400 truncate" id="sidebarUserEmail">Loading...</p>
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
                    <h1 class="text-lg font-semibold text-slate-800">@yield('page-title', 'Dashboard')</h1>
                </div>

                <div class="flex items-center space-x-3">
                    <!-- Notifications -->
                    <div class="relative">
                        <button class="text-slate-600 hover:text-slate-800">
                            <i class="bi bi-bell text-lg"></i>
                            <span
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-3 h-3 flex items-center justify-center text-[10px]">3</span>
                        </button>
                    </div>

                    <!-- User Menu -->
                    <div class="relative">
                        <button class="flex items-center space-x-2 text-slate-700">
                            <div
                                class="w-7 h-7 rounded-full bg-slate-600 flex items-center justify-center text-white text-sm">
                                <i class="bi bi-person"></i>
                            </div>
                            <span class="hidden md:block text-sm font-medium" id="headerUserName">Loading...</span>
                            <i class="bi bi-chevron-down text-xs"></i>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-4">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- General Scripts -->
    <script>
        // Mobile sidebar toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
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

            // General notification function
            window.showNotification = function(message, type = 'info') {
                const notification = document.createElement('div');
                notification.className =
                    `fixed top-3 right-3 p-3 rounded shadow-lg z-50 transform transition-transform duration-200 translate-x-full max-w-xs`;

                if (type === 'success') {
                    notification.classList.add('bg-green-500', 'text-white');
                } else if (type === 'error') {
                    notification.classList.add('bg-red-500', 'text-white');
                } else {
                    notification.classList.add('bg-blue-500', 'text-white');
                }

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

                setTimeout(() => {
                    notification.classList.remove('translate-x-full');
                }, 10);

                setTimeout(() => {
                    notification.classList.add('translate-x-full');
                    setTimeout(() => {
                        if (document.body.contains(notification)) {
                            document.body.removeChild(notification);
                        }
                    }, 200);
                }, 3000);
            };

            // Format numbers with commas
            window.formatNumber = function(num) {
                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            };
        });
    </script>

    <!-- Page Specific Scripts -->
    @yield('scripts')
</body>

</html>
