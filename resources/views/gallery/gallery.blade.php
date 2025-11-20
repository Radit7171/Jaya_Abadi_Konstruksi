@extends('layouts.app')

@section('title', 'Gallery | Jaya Abadi Konstruksi')

@section('content')
    <!-- Slimmer Hero Section -->
    <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Fallback Background -->
        <div class="absolute inset-0 bg-gray-900 z-0"></div>

        <!-- Animated Background Particles -->
        <div id="particles-js" class="absolute inset-0 z-1"></div>

        <!-- Background Overlay -->
        <div class="absolute inset-0 bg-black/40 z-2"></div>

        <!-- Background Image -->
        <div class="absolute inset-0 z-3">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-10"></div>
            <img src="{{ asset('images/projects/proyek3.jpg') }}" alt="Gallery Hero"
                class="w-full h-full object-cover transform scale-110 animate-slow-zoom" loading="eager"
                onerror="this.style.display='none'">
        </div>

        <!-- Floating Elements - Smaller -->
        <div class="absolute top-16 left-8 w-4 h-4 bg-cyan-400 rounded-full opacity-70 animate-float z-4"></div>
        <div class="absolute bottom-24 right-12 w-6 h-6 bg-blue-500 rounded-full opacity-50 animate-float-delayed z-4">
        </div>
        <div class="absolute top-1/3 right-1/4 w-5 h-5 bg-white rounded-full opacity-30 animate-pulse-slow z-4"></div>

        <!-- Content Hero - Slimmer -->
        <div class="relative z-20 max-w-6xl mx-auto px-4 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <div class="inline-block mb-3 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <span class="text-cyan-300 font-medium text-sm">Portofolio Karya</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent">
                        Gallery Karya
                    </span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-6 max-w-2xl mx-auto leading-relaxed font-light">
                    Jelajahi <span class="text-cyan-300 font-semibold">Koleksi Proyek Terbaik</span> Kami dalam Konstruksi
                    Besi dengan Berbagai Inovasi dan Kualitas
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="300" data-aos-once="true">
                    <a href="#gallery-grid"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center text-sm shadow-blue-500/20 hover:shadow-blue-500/30">
                        <span>Lihat Gallery</span>
                        <i class="bi bi-arrow-down ml-1 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#contact"
                        class="group border border-white/40 hover:border-white text-white px-6 py-3 rounded-xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center text-sm bg-white/5">
                        <span>Konsultasi Proyek</span>
                        <i class="bi bi-chat ml-1 group-hover:scale-105 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Gallery Filter Section -->
    <section class="py-12 bg-gradient-to-b from-white to-gray-50/30" id="filter">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-10" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-grid-3x3 mr-1"></i>
                    KATEGORI PROYEK
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Eksplorasi Karya Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Temukan berbagai jenis proyek konstruksi besi yang telah kami selesaikan dengan standar kualitas
                    tertinggi
                </p>
            </div>

            <!-- Filter Buttons - Slimmer -->
            <div class="flex flex-wrap justify-center gap-2 mb-10" data-aos="fade-up" data-aos-duration="600">
                <button
                    class="filter-btn active px-4 py-2 rounded-xl font-semibold transition-all duration-300 bg-gradient-to-r from-blue-600 to-cyan-500 text-white shadow-md transform hover:-translate-y-1 text-sm"
                    data-filter="all">
                    Semua Proyek
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-blue-500 hover:text-blue-600 hover:shadow-md transform hover:-translate-y-1 text-sm"
                    data-filter="structure">
                    Struktur Baja
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-cyan-500 hover:text-cyan-600 hover:shadow-md transform hover:-translate-y-1 text-sm"
                    data-filter="fabrication">
                    Fabrikasi Custom
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-green-500 hover:text-green-600 hover:shadow-md transform hover:-translate-y-1 text-sm"
                    data-filter="maintenance">
                    Perbaikan
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-purple-500 hover:text-purple-600 hover:shadow-md transform hover:-translate-y-1 text-sm"
                    data-filter="finishing">
                    Finishing
                </button>
            </div>

            <!-- Loading Indicator -->
            <div id="loading-indicator" class="hidden flex justify-center items-center py-8">
                <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-blue-600"></div>
                <span class="ml-3 text-gray-600 text-sm">Memuat gallery...</span>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="gallery-grid" data-aos="fade-up"
                data-aos-duration="800">
                @include('gallery.partials.gallery_items')
            </div>

            <!-- Pagination Container -->
            <div id="pagination-container">
                @include('gallery.partials.pagination')
            </div>
        </div>
    </section>

    <!-- Slimmer Project Statistics -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @php
                    $stats = [
                        [
                            'icon' => 'bi-building',
                            'value' => '50+',
                            'label' => 'Proyek Terselesaikan',
                            'color' => 'blue',
                        ],
                        [
                            'icon' => 'bi-check-circle',
                            'value' => '100%',
                            'label' => 'Kepuasan Klien',
                            'color' => 'green',
                        ],
                        [
                            'icon' => 'bi-clock',
                            'value' => '5+',
                            'label' => 'Tahun Pengalaman',
                            'color' => 'cyan',
                        ],
                        [
                            'icon' => 'bi-geo-alt',
                            'value' => '25+',
                            'label' => 'Lokasi Proyek',
                            'color' => 'purple',
                        ],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div class="bg-white rounded-xl p-4 text-center shadow-md border border-gray-100 group hover:shadow-lg transition-all duration-300 hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $loop->index * 100 }}">
                        <div
                            class="bg-gradient-to-br from-{{ $stat['color'] }}-500 to-{{ $stat['color'] }}-600 w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-3 shadow-md group-hover:scale-105 transition-transform duration-300">
                            <i class="bi {{ $stat['icon'] }} text-lg text-white"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-xl mb-1">{{ $stat['value'] }}</h4>
                        <p class="text-gray-600 text-xs">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Slimmer CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 via-blue-700 to-cyan-600 text-white relative overflow-hidden"
        id="contact">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 left-0 w-60 h-60 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-cyan-500/10 rounded-full translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-3xl mx-auto px-4 text-center relative z-10" data-aos="fade-up"
            data-aos-duration="800">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Tertarik dengan Karya Kami?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                Diskusikan kebutuhan konstruksi besi Anda dengan tim ahli kami dan dapatkan solusi terbaik untuk proyek Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="{{ route('home') }}#quote"
                    class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group text-sm"
                    data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <i class="bi bi-chat-quote mr-2"></i>
                    Konsultasi Gratis
                    <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="https://wa.me/6287817695973"
                    class="border border-white text-white hover:bg-white/10 px-6 py-3 rounded-xl font-semibold backdrop-blur-sm transition-all duration-300 flex items-center justify-center group text-sm bg-white/5"
                    data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                    <i class="bi bi-whatsapp mr-2"></i>
                    WhatsApp Kami
                    <i class="bi bi-arrow-up-right ml-1 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                </a>
            </div>
            <p class="text-blue-200 mt-4 text-xs">
                Respons cepat dalam 1 jam kerja
            </p>
        </div>
    </section>

    <!-- Slimmer Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-3xl w-full max-h-[85vh]">
            <button id="closeModal"
                class="absolute -top-8 right-0 text-white text-xl hover:text-cyan-300 transition-colors duration-300 z-10">
                <i class="bi bi-x-circle"></i>
            </button>
            <div class="bg-white rounded-lg overflow-hidden">
                <img id="modalImage" src="" alt="" class="w-full h-auto max-h-[50vh] object-contain"
                    loading="lazy">
                <div class="p-4">
                    <h3 id="modalTitle" class="text-base font-bold text-gray-800 mb-1"></h3>
                    <p id="modalDescription" class="text-gray-600 mb-2 text-sm"></p>
                    <div class="flex justify-between items-center">
                        <span id="modalCategory"
                            class="inline-flex items-center px-2 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-medium">
                            <i class="bi bi-tag mr-1 text-xs"></i>
                        </span>
                        <span id="modalDuration" class="text-cyan-600 font-semibold text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Include Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        // Slimmer initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS dengan pengaturan yang lebih cepat
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 600,
                    easing: 'ease-out-cubic',
                    once: true,
                    offset: 80,
                    disable: window.innerWidth < 768
                });
            }

            // Initialize Particles.js dengan error handling
            initParticles();

            // Initialize gallery functionality
            initGalleryFilters();
            initImageModal();
            initSmoothScroll();
            initAjaxPagination();

            // Refresh AOS on load and resize
            window.addEventListener('load', function() {
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            });
        });

        // Particles.js Initialization dengan fallback - Fewer particles
        function initParticles() {
            if (typeof particlesJS !== 'undefined' && document.getElementById('particles-js')) {
                try {
                    particlesJS('particles-js', {
                        particles: {
                            number: {
                                value: 30,
                                density: {
                                    enable: true,
                                    value_area: 600
                                }
                            },
                            color: {
                                value: "#ffffff"
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
                                color: "#ffffff",
                                opacity: 0.15,
                                width: 1
                            },
                            move: {
                                enable: true,
                                speed: 0.8,
                                direction: "none",
                                random: true,
                                out_mode: "out"
                            }
                        },
                        interactivity: {
                            detect_on: "canvas",
                            events: {
                                onhover: {
                                    enable: true,
                                    mode: "grab"
                                },
                                resize: true
                            }
                        },
                        retina_detect: true
                    });
                } catch (error) {
                    console.error('Particles.js error:', error);
                }
            }
        }

        // AJAX Pagination Functionality
        function initAjaxPagination() {
            const galleryGrid = document.getElementById('gallery-grid');
            const paginationContainer = document.getElementById('pagination-container');
            const loadingIndicator = document.getElementById('loading-indicator');

            // Event delegation untuk pagination links
            document.addEventListener('click', function(e) {
                if (e.target.closest('.ajax-pagination-link')) {
                    e.preventDefault();
                    const link = e.target.closest('.ajax-pagination-link');
                    const url = link.getAttribute('href');

                    loadPage(url);
                }
            });

            async function loadPage(url) {
                let serverText = null;

                try {
                    setLoadingState(true);

                    // Forces HTTPS-safe relative URL
                    let fixedUrl = url.replace(/^https?:\/\/[^/]+/, '');
                    if (!fixedUrl.startsWith('/')) fixedUrl = '/' + fixedUrl;

                    const response = await fetch(fixedUrl, {
                        method: 'GET',
                        credentials: 'same-origin',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    // Basic response check
                    if (!response.ok) {
                        serverText = await response.text();
                        throw new Error(`HTTP ${response.status}`);
                    }

                    // Safe JSON parse
                    let data;
                    try {
                        data = await response.json();
                    } catch (e) {
                        serverText = await response.text();
                        throw new Error("Invalid JSON response");
                    }

                    if (!data || !data.html) {
                        throw new Error("Malformed JSON");
                    }

                    // Update gallery items
                    galleryGrid.style.opacity = '0';
                    setTimeout(() => {
                        galleryGrid.innerHTML = data.html;
                        galleryGrid.style.opacity = '1';
                    }, 200);

                    // Update pagination
                    paginationContainer.innerHTML = data.pagination;

                    // Update URL safely
                    window.history.pushState({}, '', fixedUrl);

                    // Scroll to section
                    const gallerySection = document.querySelector('#filter, #gallery, .gallery-section');
                    setTimeout(() => {
                        gallerySection?.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 100);

                    // Re-init
                    if (typeof AOS !== 'undefined') AOS.refresh();
                    initImageModal();
                    initGalleryFilters();

                } catch (error) {
                    console.error("Error:", error);
                    if (serverText) console.error("RAW:", serverText);
                    showError('Gagal memuat halaman. Silakan cek console / server logs.');
                } finally {
                    setLoadingState(false);
                }
            }

            // Handle browser back/forward buttons
            window.addEventListener('popstate', () => {
                loadPage(window.location.pathname + window.location.search);
            });
        }

        // Gallery Filters dengan improved performance
        function initGalleryFilters() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            function applyFilter(filterValue) {
                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.dataset.category === filterValue) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(15px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 200);
                    }
                });
            }

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class dari semua buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-cyan-500',
                            'text-white', 'shadow-md');
                        btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    });

                    // Add active class ke button yang diklik
                    this.classList.add('active');
                    this.classList.remove('bg-white', 'text-gray-700', 'border-gray-200');
                    this.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-cyan-500', 'text-white',
                        'shadow-md');

                    const filterValue = this.dataset.filter;
                    applyFilter(filterValue);
                });
            });
        }

        // Image Modal dengan improved functionality
        function initImageModal() {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalCategory = document.getElementById('modalCategory');
            const modalDuration = document.getElementById('modalDuration');
            const closeModal = document.getElementById('closeModal');

            // Event delegation untuk view detail buttons
            document.addEventListener('click', function(e) {
                if (e.target.closest('.view-detail-btn')) {
                    const button = e.target.closest('.view-detail-btn');
                    const imageSrc = button.dataset.image;
                    const title = button.dataset.title;
                    const description = button.dataset.description;
                    const category = button.dataset.category;
                    const duration = button.dataset.duration;

                    // Set modal content
                    modalImage.src = imageSrc;
                    modalImage.alt = title;
                    modalTitle.textContent = title;
                    modalDescription.textContent = description;
                    modalCategory.innerHTML = `<i class="bi bi-tag mr-1 text-xs"></i>${category}`;
                    modalDuration.textContent = duration;

                    // Show modal dengan animation
                    modal.classList.remove('hidden');
                    setTimeout(() => {
                        modal.classList.add('flex');
                    }, 10);
                    document.body.style.overflow = 'hidden';
                }
            });

            // Close modal functionality
            function closeModalFunc() {
                modal.classList.remove('flex');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 200);
                document.body.style.overflow = 'auto';
            }

            closeModal.addEventListener('click', closeModalFunc);

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModalFunc();
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.classList.contains('flex')) {
                    closeModalFunc();
                }
            });
        }

        // Smooth Scroll
        function initSmoothScroll() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#' && document.querySelector(href)) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        const headerOffset = 80;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        }

        // Error Handling
        function showError(message) {
            // Remove existing error messages
            const existingErrors = document.querySelectorAll('.error-message');
            existingErrors.forEach(error => error.remove());

            const errorDiv = document.createElement('div');
            errorDiv.className =
                'error-message fixed top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg shadow-md z-50 transform translate-x-full transition-transform duration-300';
            errorDiv.innerHTML = `
                <div class="flex items-center text-sm">
                    <i class="bi bi-exclamation-triangle mr-2"></i>
                    <span>${message}</span>
                </div>
            `;
            document.body.appendChild(errorDiv);

            // Animate in
            setTimeout(() => {
                errorDiv.style.transform = 'translateX(0)';
            }, 100);

            // Auto remove after 4 seconds
            setTimeout(() => {
                errorDiv.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    errorDiv.remove();
                }, 200);
            }, 4000);
        }

        // Loading state management
        function setLoadingState(loading) {
            const galleryGrid = document.getElementById('gallery-grid');
            const loadingIndicator = document.getElementById('loading-indicator');

            if (loading) {
                loadingIndicator.classList.remove('hidden');
                galleryGrid.style.opacity = '0.5';
                galleryGrid.style.pointerEvents = 'none';
            } else {
                loadingIndicator.classList.add('hidden');
                galleryGrid.style.opacity = '1';
                galleryGrid.style.pointerEvents = 'auto';
            }
        }
    </script>

    <style>
        /* Slimmer custom animations */
        @keyframes slow-zoom {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.03);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes float-delayed {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 0.3;
            }
            50% {
                opacity: 0.5;
            }
        }

        .animate-slow-zoom {
            animation: slow-zoom 20s ease-in-out infinite;
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 6s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }

        /* Gallery item transitions */
        .gallery-item {
            transition: all 0.2s ease;
        }

        /* Custom scroll behavior */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        /* Loading animation */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .animate-spin {
            animation: spin 0.8s linear infinite;
        }

        /* Z-index layering untuk hero section */
        .relative {
            position: relative;
        }

        .absolute {
            position: absolute;
        }

        /* Pastikan konten di atas background */
        .z-0 {
            z-index: 0;
        }

        .z-1 {
            z-index: 1;
        }

        .z-2 {
            z-index: 2;
        }

        .z-3 {
            z-index: 3;
        }

        .z-4 {
            z-index: 4;
        }

        .z-10 {
            z-index: 10;
        }

        .z-20 {
            z-index: 20;
        }

        .z-50 {
            z-index: 50;
        }

        /* Smooth transitions untuk AJAX content */
        #gallery-grid {
            transition: opacity 0.2s ease;
        }

        /* Pagination link states */
        .ajax-pagination-link {
            cursor: pointer;
        }

        .ajax-pagination-link:disabled {
            opacity: 0.5;
            cursor: not-allowed;
            transform: none !important;
        }

        /* Error message animation */
        .error-message {
            transition: transform 0.2s ease;
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .filter-btn {
                flex: 1 0 auto;
                min-width: 120px;
            }
        }

        /* Smooth transitions untuk pagination */
.ajax-pagination-link {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 150ms;
}

/* Hover effects yang lebih subtle */
.ajax-pagination-link:hover {
    transform: translateY(-1px);
}

/* Active state */
.ajax-pagination-link:active {
    transform: translateY(0);
}

/* Loading state untuk AJAX */
.ajax-pagination-link.loading {
    opacity: 0.6;
    pointer-events: none;
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .pagination-container {
        gap: 0.5rem;
    }
}
    </style>
@endsection