<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jaya Abadi Konstruksi')</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link rel="preload" href="https://cdn.tailwindcss.com" as="script">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- icon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        /* Custom Variables */
        :root {
            --primary-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            --secondary-gradient: linear-gradient(135deg, #06b6d4 0%, #3b82f6 100%);
            --accent-gradient: linear-gradient(135deg, #10b981 0%, #059669 100%);
            --glass-bg: rgba(255, 255, 255, 0.85);
            --glass-border: rgba(255, 255, 255, 0.18);
        }

        /* Custom Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInFromTop {
            from {
                opacity: 0;
                transform: translateY(-40px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
            }

            50% {
                box-shadow: 0 0 30px rgba(59, 130, 246, 0.8);
            }
        }

        @keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-fadeInDown {
            animation: fadeInDown 0.6s ease-out;
        }

        .animate-slideInFromTop {
            animation: slideInFromTop 0.4s ease-out;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        .animate-gradient-shift {
            background: linear-gradient(-45deg, #3b82f6, #1d4ed8, #06b6d4, #10b981);
            background-size: 400% 400%;
            animation: gradient-shift 8s ease infinite;
        }

        /* Enhanced Glassmorphism Effect */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--glass-border);
        }

        .glass-scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.12);
            backdrop-filter: blur(30px);
            -webkit-backdrop-filter: blur(30px);
        }

        .glass-dark {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Enhanced Hover Effects */
        .nav-link {
            position: relative;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            padding: 8px 0;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 0;
            left: 0;
            background: var(--primary-gradient);
            border-radius: 2px;
            transition: width 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover {
            transform: translateY(-2px);
        }

        /* Enhanced Logo Animation */
        .logo-container {
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .logo-container:hover {
            transform: scale(1.05) rotate(5deg);
        }

        .logo-glow {
            filter: drop-shadow(0 0 20px rgba(59, 130, 246, 0.3));
        }

        /* Enhanced Footer Styles */
        .footer-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #06b6d4 100%);
            position: relative;
            overflow: hidden;
        }

        .footer-gradient::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            animation: float 20s ease-in-out infinite;
        }

        .footer-link {
            position: relative;
            transition: all 0.3s ease;
            padding: 4px 0;
        }

        .footer-link::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #ffffff, #93c5fd);
            transition: width 0.3s ease;
            border-radius: 1px;
        }

        .footer-link:hover::before {
            width: 100%;
        }

        .social-icon {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .social-icon:hover {
            transform: translateY(-5px) scale(1.1);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }

        /* Enhanced Dropdown Styles */
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px) scale(0.95);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .group:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0) scale(1);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
        }

        /* Enhanced Mobile Menu - FULL SCREEN */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 9999;
            background: white !important;
            width: 100vw !important;
            height: 100vh !important;
            max-width: 100% !important;
            border-right: none !important;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        /* #mobile-overlay {
            z-index: 9998;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(10px);
        } */

        /* Pastikan konten mobile menu readable */
        .mobile-menu .text-gray-700 {
            color: #374151 !important;
            font-weight: 600;
        }

        .mobile-menu .hover\:bg-blue-50:hover {
            background: rgba(59, 130, 246, 0.1) !important;
        }

        /* Perbaikan scroll untuk konten panjang */
        .mobile-menu .flex-1 {
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        /* Pastikan tombol menu visible */
        #menu-btn {
            z-index: 10000;
            position: relative;
        }

        /* Mobile menu item styles */
        .mobile-menu-item {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .mobile-menu-item:hover {
            border-left-color: currentColor;
            background: rgba(59, 130, 246, 0.05);
        }

        /* Loading Animation */
        .loading-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: var(--primary-gradient);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Back to Top Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--primary-gradient);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 100;
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 12px 30px rgba(59, 130, 246, 0.6);
        }

        /* Enhanced Form Styles */
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #e2e8f0;
        }

        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            transform: translateY(-2px);
        }

        /* Gradient Text */
        .gradient-text {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Enhanced Button Styles */
        .btn-primary {
            background: var(--primary-gradient);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.4);
        }

        /* Particle Background */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        /* Full screen mobile menu adjustments */
        @media (max-width: 1024px) {
            .mobile-menu {
                width: 100vw !important;
                height: 100vh !important;
                max-width: 100% !important;
                border-radius: 0 !important;
            }
        }
    </style>
</head>

<body class="bg-gray-50 font-[Poppins] overflow-x-hidden">
    <!-- Loading Bar -->
    <div class="loading-bar" id="loadingBar"></div>

    <!-- Back to Top Button -->
    <div class="back-to-top" id="backToTop">
        <i class="bi bi-chevron-up text-xl"></i>
    </div>

    <!-- Enhanced Navbar Component -->
    <nav id="navbar" class="fixed inset-x-0 top-0 z-50 glass transition-all duration-500 ease-out"
        data-aos="fade-down">
        <!-- Background Particles -->
        <div id="particles-js"></div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 flex items-center justify-between py-3">
            <!-- Enhanced Logo -->
            <div class="flex items-center space-x-4">
                <div class="logo-container">
                    <img src="{{ asset('/images/logo.png') }}" class="logo-glow" style="width: 80px; height: 80px;"
                        alt="Logo Jaya Abadi Konstruksi">
                </div>
                <div>
                    <span class="text-2xl font-black gradient-text">Jaya Abadi Konstruksi</span>
                    <p class="text-xs text-gray-600 font-medium mt-1">Spesialis Konstruksi Besi</p>
                </div>
            </div>

            <!-- Enhanced Menu Desktop -->
            <ul class="hidden lg:flex items-center space-x-8 text-gray-700 font-semibold">
                <li>
                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-house mr-2"></i>Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="nav-link {{ request()->routeIs('about') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-info-circle mr-2"></i>About Us
                    </a>
                </li>

                <!-- Services Menu -->
                <li>
                    <a href="{{ route('services') }}"
                        class="nav-link {{ request()->routeIs('services') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-tools mr-2"></i>Services
                    </a>
                </li>

                <!-- Gallery Menu -->
                <li>
                    <a href="#gallery"
                        class="nav-link {{ request()->routeIs('gallery') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-images mr-2"></i>Gallery
                    </a>
                </li>

                <li>
                    <a href="#contact" class="nav-link hover:text-blue-600 transition-all duration-300">
                        <i class="bi bi-telephone mr-2"></i>Contact Us
                    </a>
                </li>
            </ul>

            <!-- CTA Button -->
            <div class="hidden lg:flex items-center space-x-4">
                <a href="https://wa.me/6287817695973"
                    class="btn-primary text-white px-6 py-3 rounded-xl font-semibold flex items-center">
                    <i class="bi bi-whatsapp mr-2"></i>Hubungi Kami
                </a>
            </div>

            <!-- Enhanced Hamburger Menu -->
            <button id="menu-btn"
                class="lg:hidden text-2xl text-gray-700 focus:outline-none transition-all duration-300 hover:scale-110 hover:text-blue-600 p-2 rounded-lg bg-white/50 backdrop-blur-sm">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <!-- Enhanced Mobile Menu - FULL SCREEN -->
        <div id="mobile-menu" class="mobile-menu fixed inset-0 z-50 lg:hidden">
            <div class="flex flex-col h-full bg-white">
                <!-- Mobile Menu Header -->
                <div class="flex items-center justify-between p-6 border-b border-gray-200 bg-white">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('/images/logo.png') }}" class="w-12 h-12" alt="Logo">
                        <span class="text-lg font-bold text-gray-800">Jaya Abadi Konstruksi</span>
                    </div>
                    <button id="close-menu" class="text-2xl text-gray-600 hover:text-red-500 transition-colors p-2">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>

                <!-- Mobile Menu Content -->
                <div class="flex-1 overflow-y-auto py-6 bg-white">
                    <ul class="flex flex-col space-y-2 px-6">
                        <li>
                            <a href="{{ route('home') }}"
                                class="mobile-menu-item flex items-center px-4 py-4 rounded-xl hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-semibold text-lg">
                                <i
                                    class="bi bi-house mr-4 text-blue-600 text-xl group-hover:scale-110 transition-transform"></i>
                                <span class="flex-1">Home</span>
                                <i class="bi bi-chevron-right text-gray-400"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="mobile-menu-item flex items-center px-4 py-4 rounded-xl hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-semibold text-lg">
                                <i
                                    class="bi bi-info-circle mr-4 text-green-600 text-xl group-hover:scale-110 transition-transform"></i>
                                <span class="flex-1">About Us</span>
                                <i class="bi bi-chevron-right text-gray-400"></i>
                            </a>
                        </li>

                        <!-- Services Section -->
                        <li>
                            <a href="#services"
                                class="mobile-menu-item flex items-center px-4 py-4 rounded-xl hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-semibold text-lg">
                                <i
                                    class="bi bi-tools mr-4 text-purple-600 text-xl group-hover:scale-110 transition-transform"></i>
                                <span class="flex-1">Services</span>
                                <i class="bi bi-chevron-right text-gray-400"></i>
                            </a>
                        </li>

                        <!-- Gallery Section -->
                        <li>
                            <a href="#gallery"
                                class="mobile-menu-item flex items-center px-4 py-4 rounded-xl hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-semibold text-lg">
                                <i
                                    class="bi bi-images mr-4 text-cyan-600 text-xl group-hover:scale-110 transition-transform"></i>
                                <span class="flex-1">Gallery</span>
                                <i class="bi bi-chevron-right text-gray-400"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#contact"
                                class="mobile-menu-item flex items-center px-4 py-4 rounded-xl hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-semibold text-lg">
                                <i
                                    class="bi bi-telephone mr-4 text-indigo-600 text-xl group-hover:scale-110 transition-transform"></i>
                                <span class="flex-1">Contact Us</span>
                                <i class="bi bi-chevron-right text-gray-400"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Mobile Menu Footer -->
                <div class="p-6 border-t border-gray-200 bg-gray-50">
                    <div class="flex space-x-4 justify-center mb-6">
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-facebook text-blue-600 text-xl"></i>
                        </a>
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-twitter text-sky-500 text-xl"></i>
                        </a>
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-instagram text-pink-600 text-xl"></i>
                        </a>
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-linkedin text-blue-700 text-xl"></i>
                        </a>
                    </div>
                    <a href="https://wa.me/6287817695973"
                        class="btn-primary text-white px-6 py-4 rounded-xl font-semibold flex items-center justify-center w-full text-lg">
                        <i class="bi bi-whatsapp mr-2"></i>WhatsApp Kami
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-overlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>
    </nav>

    <!-- Konten Halaman -->
    <main class="pt-24 flex-grow">
        @yield('content')
    </main>

    <!-- Enhanced Footer -->
    <footer class="footer-gradient text-white pt-20 pb-12 relative overflow-hidden" data-aos="fade-up">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute top-0 left-0 w-72 h-72 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full translate-x-1/2 translate-y-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-12 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-16">
                <!-- Enhanced Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="logo-container">
                            <img src="{{ asset('images/logo.png') }}" class="w-20 h-20 logo-glow"
                                alt="Logo Jaya Abadi Konstruksi">
                        </div>
                        <div>
                            <span class="text-3xl font-black text-white">Jaya Abadi Konstruksi</span>
                            <p class="text-blue-200 text-sm font-medium mt-1">Spesialis Konstruksi Besi sejak 2013</p>
                        </div>
                    </div>
                    <p class="text-blue-100 mb-8 max-w-lg text-lg leading-relaxed">
                        Perusahaan konstruksi terpercaya dengan pengalaman lebih dari 10 tahun.
                        Kami berkomitmen untuk memberikan hasil terbaik dalam setiap proyek dengan standar kualitas
                        tertinggi.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="social-icon p-4 rounded-2xl">
                            <i class="bi bi-facebook text-2xl"></i>
                        </a>
                        <a href="#" class="social-icon p-4 rounded-2xl">
                            <i class="bi bi-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="social-icon p-4 rounded-2xl">
                            <i class="bi bi-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="social-icon p-4 rounded-2xl">
                            <i class="bi bi-linkedin text-2xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Enhanced Quick Links -->
                <div>
                    <h3 class="text-2xl font-bold mb-8 relative inline-block">
                        Quick Links
                        <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-300 rounded-full"></span>
                    </h3>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}"
                                class="footer-link text-blue-100 hover:text-white text-lg font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-2 text-blue-300"></i>Home
                            </a></li>
                        <li><a href="{{ route('about') }}"
                                class="footer-link text-blue-100 hover:text-white text-lg font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-2 text-blue-300"></i>About Us
                            </a></li>
                        <li><a href="#services"
                                class="footer-link text-blue-100 hover:text-white text-lg font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-2 text-blue-300"></i>Services
                            </a></li>
                        <li><a href="#gallery"
                                class="footer-link text-blue-100 hover:text-white text-lg font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-2 text-blue-300"></i>Gallery
                            </a></li>
                        <li><a href="#contact"
                                class="footer-link text-blue-100 hover:text-white text-lg font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-2 text-blue-300"></i>Contact Us
                            </a></li>
                    </ul>
                </div>

                <!-- Enhanced Contact Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-8 relative inline-block">
                        Contact Info
                        <span class="absolute bottom-0 left-0 w-full h-1 bg-blue-300 rounded-full"></span>
                    </h3>
                    <ul class="space-y-6">
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-3 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                <i class="bi bi-geo-alt text-blue-300 text-xl"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-semibold block">Alamat</span>
                                <span class="text-blue-200">Jl. Raya Tapos No. 72, Cimpaeun, Tapos, Depok,
                                    Indonesia</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-3 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                <i class="bi bi-telephone text-blue-300 text-xl"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-semibold block">Telepon</span>
                                <span class="text-blue-200">0878-1769-5973</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-3 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                <i class="bi bi-envelope text-blue-300 text-xl"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-semibold block">Email</span>
                                <span class="text-blue-200">lasjayaabadi123@gmail.com</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-3 rounded-xl mr-4 group-hover:scale-110 transition-transform">
                                <i class="bi bi-clock text-blue-300 text-xl"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-semibold block">Jam Operasional</span>
                                <span class="text-blue-200">8:00 - 17:00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Enhanced Newsletter -->
            <div class="border-t border-blue-500/30 pt-12 mb-12">
                <div
                    class="flex flex-col lg:flex-row justify-between items-center bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                    <div class="mb-6 lg:mb-0 lg:mr-8">
                        <h4 class="text-2xl font-bold mb-3">Berlangganan Newsletter</h4>
                        <p class="text-blue-100 text-lg">Dapatkan update terbaru tentang proyek dan layanan kami</p>
                    </div>
                    <div class="flex w-full lg:w-auto flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Email Anda"
                            class="form-input px-6 py-4 rounded-xl w-full lg:w-80 text-gray-800 focus:outline-none text-lg">
                        <button
                            class="btn-primary text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 text-lg whitespace-nowrap">
                            <i class="bi bi-send mr-2"></i>Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Enhanced Copyright -->
            <div class="border-t border-blue-500/30 pt-8 flex flex-col lg:flex-row justify-between items-center">
                <p class="text-blue-200 text-lg mb-4 lg:mb-0">
                    &copy; 2025 <span class="font-bold">Jaya Abadi Konstruksi</span>. All rights reserved.
                </p>
                <div class="flex space-x-8 text-lg">
                    <a href="#" class="footer-link text-blue-100 hover:text-white font-medium">Privacy
                        Policy</a>
                    <a href="#" class="footer-link text-blue-100 hover:text-white font-medium">Terms of
                        Service</a>
                    <a href="#" class="footer-link text-blue-100 hover:text-white font-medium">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Particle.js Library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        // Enhanced initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });

            // Initialize Particles.js for navbar
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 30,
                        density: {
                            enable: true,
                            value_area: 800
                        }
                    },
                    color: {
                        value: "#3b82f6"
                    },
                    shape: {
                        type: "circle"
                    },
                    opacity: {
                        value: 0.3,
                        random: true
                    },
                    size: {
                        value: 2,
                        random: true
                    },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#3b82f6",
                        opacity: 0.2,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 1,
                        direction: "none",
                        random: true,
                        straight: false,
                        out_mode: "out",
                        bounce: false
                    }
                },
                interactivity: {
                    detect_on: "canvas",
                    events: {
                        onhover: {
                            enable: true,
                            mode: "repulse"
                        },
                        onclick: {
                            enable: true,
                            mode: "push"
                        },
                        resize: true
                    }
                }
            });

            // Enhanced navbar scroll effect
            const nav = document.getElementById('navbar');
            const loadingBar = document.getElementById('loadingBar');
            const backToTop = document.getElementById('backToTop');

            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const maxScroll = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = (scrolled / maxScroll) * 100;

                // Navbar effect
                if (scrolled > 50) {
                    nav.classList.add('glass-scrolled', 'shadow-xl');
                    nav.classList.remove('glass');
                } else {
                    nav.classList.remove('glass-scrolled', 'shadow-xl');
                    nav.classList.add('glass');
                }

                // Loading bar
                loadingBar.style.width = scrollPercent + '%';

                // Back to top button
                if (scrolled > 500) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });

            // Enhanced mobile menu functionality - FULL SCREEN
            const menuBtn = document.getElementById('menu-btn');
            const closeMenu = document.getElementById('close-menu');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileOverlay = document.getElementById('mobile-overlay');
            let isMenuOpen = false;

            function toggleMenu() {
                isMenuOpen = !isMenuOpen;

                if (isMenuOpen) {
                    // Open menu - FULL SCREEN
                    mobileMenu.classList.add('open');
                    mobileOverlay.classList.remove('hidden');
                    mobileOverlay.classList.add('block');
                    document.body.style.overflow = 'hidden';

                    // Force reflow untuk trigger animasi
                    mobileMenu.offsetHeight;

                    // Animate menu items dengan delay
                    gsap.fromTo(mobileMenu.querySelectorAll('li'), {
                        opacity: 0,
                        x: -30
                    }, {
                        opacity: 1,
                        x: 0,
                        stagger: 0.1,
                        duration: 0.5,
                        ease: "power2.out",
                        delay: 0.2
                    });
                } else {
                    // Close menu
                    mobileMenu.classList.remove('open');
                    mobileOverlay.classList.add('hidden');
                    mobileOverlay.classList.remove('block');
                    document.body.style.overflow = 'auto';
                }
            }

            // Event listeners dengan error handling
            if (menuBtn && mobileMenu && closeMenu && mobileOverlay) {
                menuBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleMenu();
                });

                closeMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleMenu();
                });

                mobileOverlay.addEventListener('click', function(e) {
                    e.stopPropagation();
                    toggleMenu();
                });

                // Prevent menu close ketika klik di dalam menu
                mobileMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            } else {
                console.error('Mobile menu elements not found');
            }

            // Enhanced active link animation
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', function() {
                    document.querySelectorAll('.nav-link').forEach(l => l.classList.remove(
                        'active'));
                    this.classList.add('active');

                    // Add click animation
                    gsap.to(this, {
                        scale: 0.95,
                        duration: 0.1,
                        yoyo: true,
                        repeat: 1
                    });
                });
            });

            // Back to top functionality
            backToTop.addEventListener('click', function() {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: {
                        y: 0
                    },
                    ease: "power2.inOut"
                });
            });

            // Enhanced form interactions
            document.querySelectorAll('.form-input').forEach(input => {
                input.addEventListener('focus', function() {
                    gsap.to(this, {
                        y: -2,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });

                input.addEventListener('blur', function() {
                    gsap.to(this, {
                        y: 0,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                });
            });

            // Enhanced logo animation on scroll
            gsap.to('.logo-container', {
                y: -10,
                scrollTrigger: {
                    trigger: 'body',
                    start: 'top top',
                    end: 'bottom bottom',
                    scrub: true
                }
            });

            // Parallax effect for footer background elements
            gsap.to('.footer-gradient::before', {
                y: 50,
                scrollTrigger: {
                    trigger: 'footer',
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true
                }
            });
        });

        // Enhanced page load animation
        window.addEventListener('load', function() {
            gsap.to('#loadingBar', {
                width: '100%',
                duration: 0.5,
                onComplete: function() {
                    gsap.to('#loadingBar', {
                        opacity: 0,
                        duration: 0.3,
                        delay: 0.2
                    });
                }
            });

            // Animate main content
            gsap.from('main', {
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 0.3,
                ease: "power2.out"
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
