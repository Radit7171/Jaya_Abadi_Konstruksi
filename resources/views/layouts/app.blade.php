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
            --glass-bg: rgba(255, 255, 255, 0.92);
            --glass-border: rgba(255, 255, 255, 0.15);
        }

        /* Enhanced Glassmorphism Effect - Slimmer */
        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
        }

        .glass-scrolled {
            background: rgba(255, 255, 255, 0.98);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }

        /* Slimmer Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-5px);
            }
        }

        .animate-fadeInDown {
            animation: fadeInDown 0.4s ease-out;
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Slimmer Navbar Styles */
        .nav-link {
            position: relative;
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            padding: 6px 0;
            font-size: 0.9rem;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: var(--primary-gradient);
            border-radius: 1px;
            transition: width 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover {
            transform: translateY(-1px);
        }

        /* Slimmer Logo */
        .logo-container {
            transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .logo-container:hover {
            transform: scale(1.03);
        }

        /* Slimmer Footer */
        .footer-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 50%, #06b6d4 100%);
            position: relative;
            overflow: hidden;
        }

        .footer-link {
            position: relative;
            transition: all 0.2s ease;
            padding: 3px 0;
            font-size: 0.9rem;
        }

        .footer-link::before {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: 0;
            left: 0;
            background: linear-gradient(90deg, #ffffff, #93c5fd);
            transition: width 0.2s ease;
            border-radius: 1px;
        }

        .footer-link:hover::before {
            width: 100%;
        }

        .social-icon {
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .social-icon:hover {
            transform: translateY(-3px) scale(1.05);
            background: rgba(255, 255, 255, 0.15);
        }

        /* Slimmer Mobile Menu */
        .mobile-menu {
            transform: translateX(-100%);
            transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 9999;
            background: white !important;
            width: 100vw !important;
            height: 100vh !important;
            max-width: 100% !important;
        }

        .mobile-menu.open {
            transform: translateX(0);
        }

        .mobile-menu-item {
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
            font-size: 0.95rem;
        }

        .mobile-menu-item:hover {
            border-left-color: currentColor;
            background: rgba(59, 130, 246, 0.05);
        }

        /* Loading Bar */
        .loading-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 2px;
            background: var(--primary-gradient);
            z-index: 9999;
            transition: width 0.3s ease;
        }

        /* Back to Top Button - Slimmer */
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--primary-gradient);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            z-index: 100;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .back-to-top.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .back-to-top:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        }

        /* Slimmer Form Styles */
        .form-input {
            transition: all 0.2s ease;
            border: 1px solid #e2e8f0;
            font-size: 0.9rem;
        }

        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.1);
        }

        /* Gradient Text */
        .gradient-text {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Slimmer Button Styles */
        .btn-primary {
            background: var(--primary-gradient);
            transition: all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            position: relative;
            overflow: hidden;
            font-size: 0.9rem;
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
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(59, 130, 246, 0.3);
        }

        /* Custom Scrollbar - Slimmer */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #1d4ed8, #1e40af);
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
        <i class="bi bi-chevron-up text-lg"></i>
    </div>

    <!-- Slimmer Navbar Component -->
    <nav id="navbar" class="fixed inset-x-0 top-0 z-50 glass transition-all duration-300 ease-out"
        data-aos="fade-down">
        <!-- Background Particles -->
        <div id="particles-js"></div>

        <div class="max-w-7xl mx-auto px-4 md:px-8 flex items-center justify-between py-2">
            <!-- Slimmer Logo -->
            <div class="flex items-center space-x-3">
                <div class="logo-container">
                    <img src="{{ asset('/images/logo.png') }}" class="logo-glow" style="width: 50px; height: 50px;"
                        alt="Logo Jaya Abadi Konstruksi">
                </div>
                <div>
                    <span class="text-xl font-bold gradient-text">Jaya Abadi Konstruksi</span>
                    <p class="text-xs text-gray-600 font-medium mt-0.5">Spesialis Konstruksi Besi</p>
                </div>
            </div>

            <!-- Slimmer Menu Desktop -->
            <ul class="hidden lg:flex items-center space-x-6 text-gray-700 font-medium">
                <li>
                    <a href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-house mr-1.5"></i>Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="nav-link {{ request()->routeIs('about') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-info-circle mr-1.5"></i>About Us
                    </a>
                </li>

                <!-- Services Menu -->
                <li>
                    <a href="{{ route('services') }}"
                        class="nav-link {{ request()->routeIs('services') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-tools mr-1.5"></i>Services
                    </a>
                </li>

                <!-- Gallery Menu -->
                <li>
                    <a href="{{ route('gallery') }}"
                        class="nav-link {{ request()->routeIs('gallery') ? 'active text-blue-600' : 'hover:text-blue-600' }}">
                        <i class="bi bi-images mr-1.5"></i>Gallery
                    </a>
                </li>

                <li>
                    <a href="{{ route('contackus') }}"
                        class="nav-link hover:text-blue-600 transition-all duration-300">
                        <i class="bi bi-telephone mr-1.5"></i>Contact Us
                    </a>
                </li>
            </ul>

            <!-- CTA Button - Slimmer -->
            <div class="hidden lg:flex items-center space-x-3">
                <a href="https://wa.me/6287817695973"
                    class="btn-primary text-white px-4 py-2 rounded-lg font-medium flex items-center">
                    <i class="bi bi-whatsapp mr-1.5"></i>Hubungi Kami
                </a>
            </div>

            <!-- Slimmer Hamburger Menu -->
            <button id="menu-btn"
                class="lg:hidden text-xl text-gray-700 focus:outline-none transition-all duration-300 hover:scale-105 hover:text-blue-600 p-1.5 rounded-md bg-white/50 backdrop-blur-sm">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <!-- Slimmer Mobile Menu - FULL SCREEN -->
        <div id="mobile-menu" class="mobile-menu fixed inset-0 z-50 lg:hidden">
            <div class="flex flex-col h-full bg-white">
                <!-- Mobile Menu Header - Slimmer -->
                <div class="flex items-center justify-between p-4 border-b border-gray-200 bg-white">
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('/images/logo.png') }}" class="w-10 h-10" alt="Logo">
                        <span class="text-base font-bold text-gray-800">Jaya Abadi Konstruksi</span>
                    </div>
                    <button id="close-menu" class="text-xl text-gray-600 hover:text-red-500 transition-colors p-1.5">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>

                <!-- Mobile Menu Content - Slimmer -->
                <div class="flex-1 overflow-y-auto py-4 bg-white">
                    <ul class="flex flex-col space-y-1 px-4">
                        <li>
                            <a href="{{ route('home') }}"
                                class="mobile-menu-item flex items-center px-3 py-3 rounded-lg hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-medium">
                                <i
                                    class="bi bi-house mr-3 text-blue-600 text-lg group-hover:scale-105 transition-transform"></i>
                                <span class="flex-1">Home</span>
                                <i class="bi bi-chevron-right text-gray-400 text-sm"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="mobile-menu-item flex items-center px-3 py-3 rounded-lg hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-medium">
                                <i
                                    class="bi bi-info-circle mr-3 text-green-600 text-lg group-hover:scale-105 transition-transform"></i>
                                <span class="flex-1">About Us</span>
                                <i class="bi bi-chevron-right text-gray-400 text-sm"></i>
                            </a>
                        </li>

                        <!-- Services Section -->
                        <li>
                            <a href="{{ route('services') }}"
                                class="mobile-menu-item flex items-center px-3 py-3 rounded-lg hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-medium">
                                <i
                                    class="bi bi-tools mr-3 text-purple-600 text-lg group-hover:scale-105 transition-transform"></i>
                                <span class="flex-1">Services</span>
                                <i class="bi bi-chevron-right text-gray-400 text-sm"></i>
                            </a>
                        </li>

                        <!-- Gallery Section -->
                        <li>
                            <a href="{{ route('gallery') }}"
                                class="mobile-menu-item flex items-center px-3 py-3 rounded-lg hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-medium">
                                <i
                                    class="bi bi-images mr-3 text-cyan-600 text-lg group-hover:scale-105 transition-transform"></i>
                                <span class="flex-1">Gallery</span>
                                <i class="bi bi-chevron-right text-gray-400 text-sm"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contackus') }}"
                                class="mobile-menu-item flex items-center px-3 py-3 rounded-lg hover:bg-blue-50 transition-all duration-300 group text-gray-800 font-medium">
                                <i
                                    class="bi bi-telephone mr-3 text-indigo-600 text-lg group-hover:scale-105 transition-transform"></i>
                                <span class="flex-1">Contact Us</span>
                                <i class="bi bi-chevron-right text-gray-400 text-sm"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Mobile Menu Footer - Slimmer -->
                <div class="p-4 border-t border-gray-200 bg-gray-50">
                    <div class="flex space-x-3 justify-center mb-4">
                        <a href="#" class="social-icon p-2 rounded-lg">
                            <i class="bi bi-facebook text-blue-600 text-lg"></i>
                        </a>
                        <a href="#" class="social-icon p-2 rounded-lg">
                            <i class="bi bi-twitter text-sky-500 text-lg"></i>
                        </a>
                        <a href="#" class="social-icon p-2 rounded-lg">
                            <i class="bi bi-instagram text-pink-600 text-lg"></i>
                        </a>
                        <a href="#" class="social-icon p-2 rounded-lg">
                            <i class="bi bi-linkedin text-blue-700 text-lg"></i>
                        </a>
                    </div>
                    <a href="https://wa.me/6287817695973"
                        class="btn-primary text-white px-4 py-3 rounded-lg font-medium flex items-center justify-center w-full">
                        <i class="bi bi-whatsapp mr-1.5"></i>WhatsApp Kami
                    </a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-overlay" class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>
    </nav>

    <!-- Konten Halaman - Slimmer padding top -->
    <main class="pt-20 flex-grow">
        @yield('content')
    </main>

    <!-- Slimmer Footer -->
    <footer class="footer-gradient text-white pt-16 pb-10 relative overflow-hidden" data-aos="fade-up">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="absolute top-0 left-0 w-60 h-60 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-500/10 rounded-full translate-x-1/2 translate-y-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-4 md:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Slimmer Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="logo-container">
                            <img src="{{ asset('images/logo.png') }}" class="w-16 h-16 logo-glow"
                                alt="Logo Jaya Abadi Konstruksi">
                        </div>
                        <div>
                            <span class="text-2xl font-bold text-white">Jaya Abadi Konstruksi</span>
                            <p class="text-blue-200 text-sm font-medium mt-0.5">Spesialis Konstruksi Besi sejak 2013</p>
                        </div>
                    </div>
                    <p class="text-blue-100 mb-6 max-w-lg text-base leading-relaxed">
                        Perusahaan konstruksi terpercaya dengan pengalaman lebih dari 10 tahun.
                        Kami berkomitmen untuk memberikan hasil terbaik dalam setiap proyek dengan standar kualitas
                        tertinggi.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-facebook text-xl"></i>
                        </a>
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-twitter text-xl"></i>
                        </a>
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-instagram text-xl"></i>
                        </a>
                        <a href="#" class="social-icon p-3 rounded-xl">
                            <i class="bi bi-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Slimmer Quick Links -->
                <div>
                    <h3 class="text-xl font-bold mb-6 relative inline-block">
                        Quick Links
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-300 rounded-full"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}"
                                class="footer-link text-blue-100 hover:text-white font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-1.5 text-blue-300 text-sm"></i>Home
                            </a></li>
                        <li><a href="{{ route('about') }}"
                                class="footer-link text-blue-100 hover:text-white font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-1.5 text-blue-300 text-sm"></i>About Us
                            </a></li>
                        <li><a href="{{ route('services') }}"
                                class="footer-link text-blue-100 hover:text-white font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-1.5 text-blue-300 text-sm"></i>Services
                            </a></li>
                        <li><a href="{{ route('gallery') }}"
                                class="footer-link text-blue-100 hover:text-white font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-1.5 text-blue-300 text-sm"></i>Gallery
                            </a></li>
                        <li><a href="{{ route('contackus') }}"
                                class="footer-link text-blue-100 hover:text-white font-medium flex items-center">
                                <i class="bi bi-chevron-right mr-1.5 text-blue-300 text-sm"></i>Contact Us
                            </a></li>
                    </ul>
                </div>

                <!-- Slimmer Contact Info -->
                <div>
                    <h3 class="text-xl font-bold mb-6 relative inline-block">
                        Contact Info
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-blue-300 rounded-full"></span>
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-2 rounded-lg mr-3 group-hover:scale-105 transition-transform">
                                <i class="bi bi-geo-alt text-blue-300 text-lg"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-medium block text-sm">Alamat</span>
                                <span class="text-blue-200 text-sm">Jl. Raya Tapos No. 72, Cimpaeun, Tapos, Depok,
                                    Indonesia</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-2 rounded-lg mr-3 group-hover:scale-105 transition-transform">
                                <i class="bi bi-telephone text-blue-300 text-lg"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-medium block text-sm">Telepon</span>
                                <span class="text-blue-200 text-sm">0878-1769-5973</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-2 rounded-lg mr-3 group-hover:scale-105 transition-transform">
                                <i class="bi bi-envelope text-blue-300 text-lg"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-medium block text-sm">Email</span>
                                <span class="text-blue-200 text-sm">lasjayaabadi123@gmail.com</span>
                            </div>
                        </li>
                        <li class="flex items-start group">
                            <div class="bg-white/10 p-2 rounded-lg mr-3 group-hover:scale-105 transition-transform">
                                <i class="bi bi-clock text-blue-300 text-lg"></i>
                            </div>
                            <div>
                                <span class="text-blue-100 font-medium block text-sm">Jam Operasional</span>
                                <span class="text-blue-200 text-sm">8:00 - 17:00</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Slimmer Newsletter -->
            <div class="border-t border-blue-500/30 pt-8 mb-8">
                <div
                    class="flex flex-col lg:flex-row justify-between items-center bg-white/10 backdrop-blur-sm rounded-xl p-6">
                    <div class="mb-4 lg:mb-0 lg:mr-6">
                        <h4 class="text-xl font-bold mb-2">Berlangganan Newsletter</h4>
                        <p class="text-blue-100 text-sm">Dapatkan update terbaru tentang proyek dan layanan kami</p>
                    </div>
                    <div class="flex w-full lg:w-auto flex-col sm:flex-row gap-3">
                        <input type="email" placeholder="Email Anda"
                            class="form-input px-4 py-3 rounded-lg w-full lg:w-64 text-gray-800 focus:outline-none text-sm">
                        <button
                            class="btn-primary text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 text-sm whitespace-nowrap">
                            <i class="bi bi-send mr-1.5"></i>Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Slimmer Copyright -->
            <div class="border-t border-blue-500/30 pt-6 flex flex-col lg:flex-row justify-between items-center">
                <p class="text-blue-200 text-sm mb-3 lg:mb-0">
                    &copy; 2025 <span class="font-bold">Jaya Abadi Konstruksi</span>. All rights reserved.
                </p>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="footer-link text-blue-100 hover:text-white font-medium">Privacy
                        Policy</a>
                    <a href="#" class="footer-link text-blue-100 hover:text-white font-medium">Terms of
                        Service</a>
                    <a href="#" class="footer-link text-blue-100 hover:text-white font-medium">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- GSAP ScrollTo Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Particle.js Library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        // Slimmer initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 80,
                easing: 'ease-out-cubic'
            });

            // Initialize Particles.js for navbar
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 25,
                        density: {
                            enable: true,
                            value_area: 600
                        }
                    },
                    color: {
                        value: "#3b82f6"
                    },
                    shape: {
                        type: "circle"
                    },
                    opacity: {
                        value: 0.2,
                        random: true
                    },
                    size: {
                        value: 2,
                        random: true
                    },
                    line_linked: {
                        enable: true,
                        distance: 120,
                        color: "#3b82f6",
                        opacity: 0.15,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 0.8,
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

            // Slimmer navbar scroll effect
            const nav = document.getElementById('navbar');
            const loadingBar = document.getElementById('loadingBar');
            const backToTop = document.getElementById('backToTop');

            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const maxScroll = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = (scrolled / maxScroll) * 100;

                // Navbar effect
                if (scrolled > 30) {
                    nav.classList.add('glass-scrolled', 'shadow-lg');
                    nav.classList.remove('glass');
                } else {
                    nav.classList.remove('glass-scrolled', 'shadow-lg');
                    nav.classList.add('glass');
                }

                // Loading bar
                loadingBar.style.width = scrollPercent + '%';

                // Back to top button
                if (scrolled > 300) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });

            // Slimmer mobile menu functionality
            const menuBtn = document.getElementById('menu-btn');
            const closeMenu = document.getElementById('close-menu');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileOverlay = document.getElementById('mobile-overlay');
            let isMenuOpen = false;

            function toggleMenu() {
                isMenuOpen = !isMenuOpen;

                if (isMenuOpen) {
                    // Open menu
                    mobileMenu.classList.add('open');
                    mobileOverlay.classList.remove('hidden');
                    mobileOverlay.classList.add('block');
                    document.body.style.overflow = 'hidden';

                    // Force reflow untuk trigger animasi
                    mobileMenu.offsetHeight;

                    // Animate menu items dengan delay
                    gsap.fromTo(mobileMenu.querySelectorAll('li'), {
                        opacity: 0,
                        x: -20
                    }, {
                        opacity: 1,
                        x: 0,
                        stagger: 0.08,
                        duration: 0.4,
                        ease: "power2.out",
                        delay: 0.15
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

            // Slimmer active link animation
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
            backToTop.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Kill semua animasi GSAP
                gsap.killTweensOf('html, body');

                // Scroll langsung dengan requestAnimationFrame
                const startPos = window.pageYOffset;
                const duration = 500; // ms
                const startTime = performance.now();

                function easeOutCubic(t) {
                    return 1 - Math.pow(1 - t, 3);
                }

                function animateScroll(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const ease = easeOutCubic(progress);

                    window.scrollTo(0, startPos * (1 - ease));

                    if (progress < 1) {
                        requestAnimationFrame(animateScroll);
                    }
                }

                requestAnimationFrame(animateScroll);
            });

            // Slimmer form interactions
            document.querySelectorAll('.form-input').forEach(input => {
                input.addEventListener('focus', function() {
                    gsap.to(this, {
                        y: -1,
                        duration: 0.2,
                        ease: "power2.out"
                    });
                });

                input.addEventListener('blur', function() {
                    gsap.to(this, {
                        y: 0,
                        duration: 0.2,
                        ease: "power2.out"
                    });
                });
            });
        });

        // Slimmer page load animation
        window.addEventListener('load', function() {
            gsap.to('#loadingBar', {
                width: '100%',
                duration: 0.4,
                onComplete: function() {
                    gsap.to('#loadingBar', {
                        opacity: 0,
                        duration: 0.2,
                        delay: 0.1
                    });
                }
            });

            // Animate main content
            gsap.from('main', {
                y: 20,
                opacity: 0,
                duration: 0.6,
                delay: 0.2,
                ease: "power2.out"
            });
        });
    </script>

    @yield('scripts')
</body>

</html>