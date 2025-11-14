<!DOCTYPE html>
<html lang="id">

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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>
        /* Custom Animations */
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

        @keyframes slideInFromTop {
            from {
                opacity: 0;
                transform: translateY(-30px) scale(0.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .animate-fadeInDown {
            animation: fadeInDown 0.5s ease-out;
        }

        .animate-slideInFromTop {
            animation: slideInFromTop 0.3s ease-out;
        }

        /* Hover Effects */
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active::after {
            width: 100%;
        }

        /* Glassmorphism Effect */
        .glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.18);
        }

        .glass-scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* Logo Animation */
        .logo-rotate {
            transition: transform 0.5s ease;
        }

        .logo-rotate:hover {
            transform: rotate(15deg);
        }

        /* Footer Styles */
        .footer-gradient {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }

        .footer-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .footer-link::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #ffffff;
            transition: width 0.3s ease;
        }

        .footer-link:hover::before {
            width: 100%;
        }

        .social-icon {
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }
    </style>
</head>

<body class="bg-gray-50 font-[Poppins] overflow-x-hidden">
    <!-- Navbar Component -->
    <nav id="navbar"
     class="fixed inset-x-0 top-0 z-50 glass transition-all duration-500 ease-out"
     data-aos="fade-down">
        <div class="max-w-7xl mx-auto px-6 md:px-12 flex items-center justify-between py-3">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="logo-rotate">
                    <img src="{{ asset('/images/logo.png') }}" class="" style="width: 100px; height: 100px;"
                        alt="Logo Jaya Abadi Konstruksi">
                </div>
                <span
                    class="text-xl font-bold bg-gradient-to-r from-blue-600 to-indigo-700 bg-clip-text text-transparent">Jaya
                    Abadi Konstruksi</span>
            </div>

            <!-- Menu Desktop -->
            <ul class="hidden md:flex items-center space-x-8 text-gray-700 font-medium">
                <li>
                    <a href="{{ route('home') }}"
                        class="nav-link transition-colors duration-300 {{ request()->routeIs('home') ? 'text-blue-600' : 'hover:text-blue-600' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="nav-link transition-colors duration-300 {{ request()->routeIs('about') ? 'text-blue-600' : 'hover:text-blue-600' }}">
                        About Us
                    </a>
                </li>

                <!-- Dropdown Pages -->
                <li class="relative group" id="pages-dropdown">
                    <button class="nav-link flex items-center hover:text-blue-600 transition-colors duration-300">
                        Pages <i
                            class="bi bi-chevron-down ml-1 text-sm transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>
                    <ul
                        class="absolute hidden group-hover:block animate-slideInFromTop bg-white/95 backdrop-blur-lg shadow-xl rounded-lg py-2 w-48 mt-2 overflow-hidden border border-gray-100">
                        <li>
                            <a href="#services"
                                class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200 group/item">
                                <i
                                    class="bi bi-tools mr-2 text-blue-500 group-hover/item:scale-110 transition-transform"></i>
                                <span>Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="#projects"
                                class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200 group/item">
                                <i
                                    class="bi bi-building mr-2 text-blue-500 group-hover/item:scale-110 transition-transform"></i>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="#team"
                                class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200 group/item">
                                <i
                                    class="bi bi-people mr-2 text-blue-500 group-hover/item:scale-110 transition-transform"></i>
                                <span>Our Team</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Blog -->
                <li class="relative group" id="blog-dropdown">
                    <button class="nav-link flex items-center hover:text-blue-600 transition-colors duration-300">
                        Blog <i
                            class="bi bi-chevron-down ml-1 text-sm transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>
                    <ul
                        class="absolute hidden group-hover:block animate-slideInFromTop bg-white/95 backdrop-blur-lg shadow-xl rounded-lg py-2 w-48 mt-2 overflow-hidden border border-gray-100">
                        <li>
                            <a href="#blog"
                                class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200 group/item">
                                <i
                                    class="bi bi-journal-text mr-2 text-blue-500 group-hover/item:scale-110 transition-transform"></i>
                                <span>All Posts</span>
                            </a>
                        </li>
                        <li>
                            <a href="#blog-single"
                                class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200 group/item">
                                <i
                                    class="bi bi-file-text mr-2 text-blue-500 group-hover/item:scale-110 transition-transform"></i>
                                <span>Single Post</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#contact" class="nav-link hover:text-blue-600 transition-colors duration-300">Contact
                        Us</a>
                </li>
            </ul>

            <!-- Hamburger Menu -->
            <button id="menu-btn"
                class="md:hidden text-2xl text-gray-700 focus:outline-none transition-transform duration-300 hover:scale-110">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden bg-white/95 backdrop-blur-lg shadow-xl border-t border-gray-100 overflow-hidden">
            <ul class="flex flex-col px-6 py-4 text-gray-700 font-medium space-y-1">
                <li>
                    <a href="{{ route('home') }}"
                        class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <i class="bi bi-house mr-3 text-blue-500"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <i class="bi bi-info-circle mr-3 text-blue-500"></i>
                        <span>About Us</span>
                    </a>
                </li>
                <li>
                    <a href="#services"
                        class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <i class="bi bi-tools mr-3 text-blue-500"></i>
                        <span>Services</span>
                    </a>
                </li>
                <li>
                    <a href="#projects"
                        class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <i class="bi bi-building mr-3 text-blue-500"></i>
                        <span>Projects</span>
                    </a>
                </li>
                <li>
                    <a href="#blog"
                        class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <i class="bi bi-journal-text mr-3 text-blue-500"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li>
                    <a href="#contact"
                        class="flex items-center px-4 py-3 rounded-lg hover:bg-blue-50 transition-all duration-200 group">
                        <i class="bi bi-telephone mr-3 text-blue-500"></i>
                        <span>Contact Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <main class="pt-24 flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-gradient text-white pt-16 pb-8" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <div class="flex items-center space-x-3 mb-6">
                        <img src="{{ asset('images/logo.png') }}" class="w-16 h-16" alt="Logo Jaya Abadi Konstruksi">
                        <span class="text-2xl font-bold text-white">Jaya Abadi Konstruksi</span>
                    </div>
                    <p class="text-blue-100 mb-6 max-w-md">
                        Perusahaan konstruksi terpercaya dengan pengalaman lebih dari 10 tahun.
                        Kami berkomitmen untuk memberikan hasil terbaik dalam setiap proyek.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="social-icon bg-white/10 p-3 rounded-full hover:bg-white/20 transition-all duration-300">
                            <i class="bi bi-facebook text-xl"></i>
                        </a>
                        <a href="#"
                            class="social-icon bg-white/10 p-3 rounded-full hover:bg-white/20 transition-all duration-300">
                            <i class="bi bi-twitter text-xl"></i>
                        </a>
                        <a href="#"
                            class="social-icon bg-white/10 p-3 rounded-full hover:bg-white/20 transition-all duration-300">
                            <i class="bi bi-instagram text-xl"></i>
                        </a>
                        <a href="#"
                            class="social-icon bg-white/10 p-3 rounded-full hover:bg-white/20 transition-all duration-300">
                            <i class="bi bi-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-xl font-semibold mb-6 relative inline-block">
                        Quick Links
                        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-blue-300"></span>
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="footer-link text-blue-100 hover:text-white">Home</a></li>
                        <li><a href="#about" class="footer-link text-blue-100 hover:text-white">About Us</a></li>
                        <li><a href="#services" class="footer-link text-blue-100 hover:text-white">Services</a></li>
                        <li><a href="#projects" class="footer-link text-blue-100 hover:text-white">Projects</a></li>
                        <li><a href="#contact" class="footer-link text-blue-100 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-semibold mb-6 relative inline-block">
                        Contact Info
                        <span class="absolute bottom-0 left-0 w-1/2 h-0.5 bg-blue-300"></span>
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="bi bi-geo-alt mr-3 text-blue-300"></i>
                            <span class="text-blue-100">Jl. Raya Tapos No. 72, Cimpaeun, Tapos, Depok, Indonesia</span>
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-telephone mr-3 text-blue-300"></i>
                            <span class="text-blue-100">0878-1769-5973</span>
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-envelope mr-3 text-blue-300"></i>
                            <span class="text-blue-100">lasjayaabadi123@gmail.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="bi bi-clock mr-3 text-blue-300"></i>
                            <span class="text-blue-100">8:00 - 17:00</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="border-t border-blue-500/30 pt-8 mb-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <h4 class="text-lg font-semibold mb-2">Berlangganan Newsletter</h4>
                        <p class="text-blue-100">Dapatkan update terbaru tentang proyek dan layanan kami</p>
                    </div>
                    <div class="flex w-full md:w-auto">
                        <input type="email" placeholder="Email Anda"
                            class="px-4 py-3 rounded-l-lg w-full md:w-64 text-gray-800 focus:outline-none">
                        <button
                            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-r-lg font-medium transition-colors duration-300">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-blue-500/30 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-blue-200 text-sm mb-4 md:mb-0">
                    &copy; 2025 Jaya Abadi Konstruksi. All rights reserved.
                </p>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="footer-link text-blue-100 hover:text-white">Privacy Policy</a>
                    <a href="#" class="footer-link text-blue-100 hover:text-white">Terms of Service</a>
                    <a href="#" class="footer-link text-blue-100 hover:text-white">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Efek navbar saat scroll
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.classList.add('glass-scrolled', 'shadow-lg');
                nav.classList.remove('glass');
            } else {
                nav.classList.remove('glass-scrolled', 'shadow-lg');
                nav.classList.add('glass');
            }
        });

        // Toggle menu mobile dengan animasi
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        let isMenuOpen = false;

        menuBtn.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;

            if (isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                // Animasi GSAP untuk menu mobile
                gsap.fromTo(mobileMenu, {
                    opacity: 0,
                    height: 0
                }, {
                    opacity: 1,
                    height: 'auto',
                    duration: 0.4,
                    ease: "power2.out"
                });
                // Animasi untuk item menu
                gsap.fromTo(mobileMenu.querySelectorAll('li'), {
                    opacity: 0,
                    x: -20
                }, {
                    opacity: 1,
                    x: 0,
                    stagger: 0.1,
                    duration: 0.3,
                    delay: 0.2
                });
                // Ubah ikon hamburger menjadi X
                menuBtn.innerHTML = '<i class="bi bi-x"></i>';
            } else {
                // Animasi keluar
                gsap.to(mobileMenu, {
                    opacity: 0,
                    height: 0,
                    duration: 0.3,
                    ease: "power2.in",
                    onComplete: () => {
                        mobileMenu.classList.add('hidden');
                    }
                });
                // Kembalikan ikon hamburger
                menuBtn.innerHTML = '<i class="bi bi-list"></i>';
            }

            // Animasi tombol menu
            gsap.to(menuBtn, {
                scale: 1.1,
                duration: 0.1,
                yoyo: true,
                repeat: 1
            });
        });

        // Animasi hover untuk dropdown
        document.querySelectorAll('.group').forEach(group => {
            const dropdown = group.querySelector('ul');

            group.addEventListener('mouseenter', () => {
                if (dropdown) {
                    gsap.fromTo(dropdown, {
                        opacity: 0,
                        y: -10,
                        scale: 0.95
                    }, {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        duration: 0.2
                    });
                }
            });
        });

        // Animasi untuk link aktif
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                // Hapus kelas aktif dari semua link
                document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
                // Tambahkan kelas aktif ke link yang diklik
                this.classList.add('active');
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
