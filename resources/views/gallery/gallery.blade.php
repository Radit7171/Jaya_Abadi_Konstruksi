@extends('layouts.app')

@section('title', 'Gallery | Jaya Abadi Konstruksi')

@section('content')
    <!-- Enhanced Hero Section with Particles & Parallax -->
    <section
        class="relative min-h-[90vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
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

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-6 h-6 bg-cyan-400 rounded-full opacity-70 animate-float z-4"></div>
        <div class="absolute bottom-32 right-16 w-10 h-10 bg-blue-500 rounded-full opacity-50 animate-float-delayed z-4">
        </div>
        <div class="absolute top-1/3 right-1/4 w-8 h-8 bg-white rounded-full opacity-30 animate-pulse-slow z-4"></div>

        <!-- Content Hero -->
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                <div class="inline-block mb-4 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <span class="text-cyan-300 font-medium">Portofolio Karya</span>
                </div>
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent">
                        Gallery Karya
                    </span>
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed font-light">
                    Jelajahi <span class="text-cyan-300 font-semibold">Koleksi Proyek Terbaik</span> Kami dalam Konstruksi
                    Besi dengan Berbagai Inovasi dan Kualitas
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="400" data-aos-once="true">
                    <a href="#gallery-grid"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 md:px-8 md:py-4 rounded-xl md:rounded-2xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-blue-500/30 hover:shadow-blue-500/50">
                        <span>Lihat Gallery</span>
                        <svg class="w-5 h-5 ml-2 group-hover:translate-y-1 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                    <a href="#contact"
                        class="group border-2 border-white/40 hover:border-white text-white px-6 py-3 md:px-8 md:py-4 rounded-xl md:rounded-2xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center bg-white/5">
                        <span>Konsultasi Proyek</span>
                        <svg class="w-5 h-5 ml-2 group-hover:scale-110 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Filter Section -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50/30" id="filter">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M3 3h8v8H3V3zm0 10h8v8H3v-8zM13 3h8v8h-8V3zm0 10h8v8h-8v-8z" />
                    </svg>
                    KATEGORI PROYEK
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-800 mb-4">Eksplorasi Karya Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg">
                    Temukan berbagai jenis proyek konstruksi besi yang telah kami selesaikan dengan standar kualitas
                    tertinggi
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-duration="800">
                <button
                    class="filter-btn active px-4 py-2 md:px-6 md:py-3 rounded-xl md:rounded-2xl font-semibold transition-all duration-300 bg-gradient-to-r from-blue-600 to-cyan-500 text-white shadow-lg transform hover:-translate-y-1 text-sm md:text-base"
                    data-filter="all">
                    Semua Proyek
                </button>
                <button
                    class="filter-btn px-4 py-2 md:px-6 md:py-3 rounded-xl md:rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-blue-500 hover:text-blue-600 hover:shadow-lg transform hover:-translate-y-1 text-sm md:text-base"
                    data-filter="structure">
                    Struktur Baja
                </button>
                <button
                    class="filter-btn px-4 py-2 md:px-6 md:py-3 rounded-xl md:rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-cyan-500 hover:text-cyan-600 hover:shadow-lg transform hover:-translate-y-1 text-sm md:text-base"
                    data-filter="fabrication">
                    Fabrikasi Custom
                </button>
                <button
                    class="filter-btn px-4 py-2 md:px-6 md:py-3 rounded-xl md:rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-green-500 hover:text-green-600 hover:shadow-lg transform hover:-translate-y-1 text-sm md:text-base"
                    data-filter="maintenance">
                    Perbaikan
                </button>
                <button
                    class="filter-btn px-4 py-2 md:px-6 md:py-3 rounded-xl md:rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-purple-500 hover:text-purple-600 hover:shadow-lg transform hover:-translate-y-1 text-sm md:text-base"
                    data-filter="finishing">
                    Finishing
                </button>
            </div>

            <!-- Loading Indicator -->
            <div id="loading-indicator" class="hidden flex justify-center items-center py-12">
                <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
                <span class="ml-3 text-gray-600">Memuat gallery...</span>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid" data-aos="fade-up"
                data-aos-duration="1000">
                @include('gallery.partials.gallery_items')
            </div>

            <!-- Pagination Container -->
            <div id="pagination-container">
                @include('gallery.partials.pagination')
            </div>
        </div>
    </section>

    <!-- Project Statistics -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $stats = [
                        [
                            'icon' =>
                                'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                            'value' => '50+',
                            'label' => 'Proyek Terselesaikan',
                            'color' => 'blue',
                        ],
                        [
                            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                            'value' => '100%',
                            'label' => 'Kepuasan Klien',
                            'color' => 'green',
                        ],
                        [
                            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
                            'value' => '5+',
                            'label' => 'Tahun Pengalaman',
                            'color' => 'cyan',
                        ],
                        [
                            'icon' =>
                                'M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z',
                            'value' => '25+',
                            'label' => 'Lokasi Proyek',
                            'color' => 'purple',
                        ],
                    ];
                @endphp

                @foreach ($stats as $stat)
                    <div class="bg-white rounded-2xl p-6 text-center shadow-lg border border-gray-100 group hover:shadow-xl transition-all duration-500 hover:-translate-y-1"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                        <div
                            class="bg-gradient-to-br from-{{ $stat['color'] }}-500 to-{{ $stat['color'] }}-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="{{ $stat['icon'] }}" />
                            </svg>
                        </div>
                        <h4 class="font-bold text-gray-800 text-2xl md:text-3xl mb-2">{{ $stat['value'] }}</h4>
                        <p class="text-gray-600 text-sm md:text-base">{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-blue-700 to-cyan-600 text-white relative overflow-hidden"
        id="contact">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center relative z-10" data-aos="fade-up"
            data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6">Tertarik dengan Karya Kami?</h2>
            <p class="text-blue-100 text-lg md:text-xl mb-10 max-w-2xl mx-auto leading-relaxed">
                Diskusikan kebutuhan konstruksi besi Anda dengan tim ahli kami dan dapatkan solusi terbaik untuk proyek Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}#quote"
                    class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 md:px-8 md:py-4 rounded-xl md:rounded-2xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group"
                    data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Konsultasi Gratis
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="https://wa.me/6287817695973"
                    class="border-2 border-white text-white hover:bg-white/10 px-6 py-3 md:px-8 md:py-4 rounded-xl md:rounded-2xl font-semibold backdrop-blur-sm transition-all duration-300 flex items-center justify-center group bg-white/5"
                    data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893c0-3.189-1.248-6.189-3.515-8.444" />
                    </svg>
                    WhatsApp Kami
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
            <p class="text-blue-200 mt-6 text-sm">
                Respons cepat dalam 1 jam kerja
            </p>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-4xl w-full max-h-[90vh]">
            <button id="closeModal"
                class="absolute -top-10 right-0 text-white text-2xl hover:text-cyan-300 transition-colors duration-300 z-10">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
            <div class="bg-white rounded-xl overflow-hidden">
                <img id="modalImage" src="" alt="" class="w-full h-auto max-h-[60vh] object-contain"
                    loading="lazy">
                <div class="p-4">
                    <h3 id="modalTitle" class="text-lg font-bold text-gray-800 mb-2"></h3>
                    <p id="modalDescription" class="text-gray-600 mb-3"></p>
                    <div class="flex justify-between items-center">
                        <span id="modalCategory"
                            class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                            </svg>
                        </span>
                        <span id="modalDuration" class="text-cyan-600 font-semibold"></span>
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
        // Enhanced initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    easing: 'ease-out-cubic',
                    once: true,
                    offset: 100,
                    disable: window.innerWidth < 768
                });
            }

            // Initialize Particles.js dengan error handling
            initParticles();

            // Initialize gallery functionality
            initGalleryFilters();
            initImageModal();
            initSmoothScroll();
            initAjaxPagination(); // Tambahkan ini

            // Refresh AOS on load and resize
            window.addEventListener('load', function() {
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            });
        });

        // Particles.js Initialization dengan fallback
        function initParticles() {
            if (typeof particlesJS !== 'undefined' && document.getElementById('particles-js')) {
                try {
                    particlesJS('particles-js', {
                        particles: {
                            number: {
                                value: 40,
                                density: {
                                    enable: true,
                                    value_area: 800
                                }
                            },
                            color: {
                                value: "#ffffff"
                            },
                            shape: {
                                type: "circle"
                            },
                            opacity: {
                                value: 0.3,
                                random: true
                            },
                            size: {
                                value: 3,
                                random: true
                            },
                            line_linked: {
                                enable: true,
                                distance: 150,
                                color: "#ffffff",
                                opacity: 0.2,
                                width: 1
                            },
                            move: {
                                enable: true,
                                speed: 1,
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
                try {
                    // Show loading
                    loadingIndicator.classList.remove('hidden');
                    galleryGrid.style.opacity = '0.5';
                    galleryGrid.style.pointerEvents = 'none';

                    const response = await fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    });

                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }

                    const data = await response.json();

                    // Update gallery grid dengan fade effect
                    galleryGrid.style.opacity = '0';
                    setTimeout(() => {
                        galleryGrid.innerHTML = data.html;
                        galleryGrid.style.opacity = '1';
                    }, 300);

                    // Update pagination
                    paginationContainer.innerHTML = data.pagination;

                    // Update URL tanpa reload page
                    window.history.pushState({}, '', url);

                    // Scroll ke atas gallery section
                    const gallerySection = document.getElementById('filter');
                    if (gallerySection) {
                        gallerySection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }

                    // Re-initialize components
                    if (typeof AOS !== 'undefined') {
                        AOS.refresh();
                    }
                    initImageModal();
                    initGalleryFilters();
                    initAjaxPagination(); // Re-initialize untuk pagination baru

                } catch (error) {
                    console.error('Error loading page:', error);
                    showError('Gagal memuat halaman. Silakan coba lagi.');

                    // Fallback ke reload page biasa
                    window.location.href = url;
                } finally {
                    // Hide loading
                    loadingIndicator.classList.add('hidden');
                    galleryGrid.style.opacity = '1';
                    galleryGrid.style.pointerEvents = 'auto';
                }
            }

            // Handle browser back/forward buttons
            window.addEventListener('popstate', function() {
                loadPage(window.location.href);
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
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            }

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class dari semua buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-cyan-500',
                            'text-white', 'shadow-lg');
                        btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-200');
                    });

                    // Add active class ke button yang diklik
                    this.classList.add('active');
                    this.classList.remove('bg-white', 'text-gray-700', 'border-gray-200');
                    this.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-cyan-500', 'text-white',
                        'shadow-lg');

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
                    modalCategory.innerHTML = `<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>${category}`;
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
                }, 300);
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
            errorDiv.className = 'error-message fixed top-4 right-4 bg-red-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 transform translate-x-full transition-transform duration-300';
            errorDiv.innerHTML = `
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>${message}</span>
                </div>
            `;
            document.body.appendChild(errorDiv);

            // Animate in
            setTimeout(() => {
                errorDiv.style.transform = 'translateX(0)';
            }, 100);

            // Auto remove after 5 seconds
            setTimeout(() => {
                errorDiv.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    errorDiv.remove();
                }, 300);
            }, 5000);
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
        /* Enhanced custom animations */
        @keyframes slow-zoom {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes float-delayed {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }

        .animate-slow-zoom {
            animation: slow-zoom 30s ease-in-out infinite;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        /* Gallery item transitions */
        .gallery-item {
            transition: all 0.3s ease;
        }

        /* Custom scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Responsive improvements */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem !important;
            }

            .filter-buttons {
                flex-wrap: wrap;
            }

            .filter-btn {
                flex: 1 0 auto;
                min-width: 140px;
            }
        }

        /* Loading animation */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .animate-spin {
            animation: spin 1s linear infinite;
        }

        /* Z-index layering untuk hero section */
        .relative { position: relative; }
        .absolute { position: absolute; }

        /* Pastikan konten di atas background */
        .z-0 { z-index: 0; }
        .z-1 { z-index: 1; }
        .z-2 { z-index: 2; }
        .z-3 { z-index: 3; }
        .z-4 { z-index: 4; }
        .z-10 { z-index: 10; }
        .z-20 { z-index: 20; }
        .z-50 { z-index: 50; }

        /* Smooth transitions untuk AJAX content */
        #gallery-grid {
            transition: opacity 0.3s ease;
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
            transition: transform 0.3s ease;
        }
    </style>
@endsection
