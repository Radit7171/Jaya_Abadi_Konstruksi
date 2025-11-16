@extends('layouts.app')

@section('title', 'Gallery | Jaya Abadi Konstruksi')

@section('content')
    <!-- Enhanced Hero Section with Particles -->
    <section
        class="relative min-h-[90vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Animated Background Particles -->
        <div id="particles-js" class="absolute inset-0 z-0"></div>
        <div class="absolute inset-0 bg-black/40 z-0"></div>
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-10"></div>
            <img src="{{ asset('images/projects/proyek3.jpg') }}" alt="Gallery Hero"
                class="w-full h-full object-cover transform scale-110 animate-slow-zoom">
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-6 h-6 bg-cyan-400 rounded-full opacity-70 animate-float"></div>
        <div class="absolute bottom-32 right-16 w-10 h-10 bg-blue-500 rounded-full opacity-50 animate-float-delayed"></div>
        <div class="absolute top-1/3 right-1/4 w-8 h-8 bg-white rounded-full opacity-30 animate-pulse-slow"></div>

        <!-- Content Hero -->
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                <div class="inline-block mb-4 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <span class="text-cyan-300 font-medium">Portofolio Karya</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    <span
                        class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Gallery Karya
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed font-light">
                    Jelajahi <span class="text-cyan-300 font-semibold">Koleksi Proyek Terbaik</span> Kami dalam Konstruksi
                    Besi dengan Berbagai Inovasi dan Kualitas
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="400" data-aos-once="true">
                    <a href="#gallery-grid"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-blue-500/30 hover:shadow-blue-500/50">
                        <span>Lihat Gallery</span>
                        <i class="bi bi-arrow-down ml-2 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#contact"
                        class="group border-2 border-white/40 hover:border-white text-white px-8 py-4 rounded-2xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center bg-white/5">
                        <span>Konsultasi Proyek</span>
                        <i class="bi bi-chat-quote ml-2 group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Filter Section -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50/30" id="filter">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-grid-3x3-gap mr-2"></i>
                    KATEGORI PROYEK
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Eksplorasi Karya Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Temukan berbagai jenis proyek konstruksi besi yang telah kami selesaikan dengan standar kualitas
                    tertinggi
                </p>
            </div>

            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-12" data-aos="fade-up" data-aos-duration="800">
                <button
                    class="filter-btn active px-6 py-3 rounded-2xl font-semibold transition-all duration-300 bg-gradient-to-r from-blue-600 to-cyan-500 text-white shadow-lg transform hover:-translate-y-1"
                    data-filter="all">
                    Semua Proyek
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-blue-500 hover:text-blue-600 hover:shadow-lg transform hover:-translate-y-1"
                    data-filter="structure">
                    Struktur Baja
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-cyan-500 hover:text-cyan-600 hover:shadow-lg transform hover:-translate-y-1"
                    data-filter="fabrication">
                    Fabrikasi Custom
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-green-500 hover:text-green-600 hover:shadow-lg transform hover:-translate-y-1"
                    data-filter="maintenance">
                    Perbaikan
                </button>
                <button
                    class="filter-btn px-6 py-3 rounded-2xl font-semibold transition-all duration-300 bg-white text-gray-700 border border-gray-200 hover:border-purple-500 hover:text-purple-600 hover:shadow-lg transform hover:-translate-y-1"
                    data-filter="finishing">
                    Finishing
                </button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery-grid" data-aos="fade-up"
                data-aos-duration="1000">
                @foreach ($images as $index => $image)
                    <div class="gallery-item group relative overflow-hidden rounded-3xl shadow-xl border border-gray-100 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl"
                        data-category="{{ ['structure', 'fabrication', 'maintenance', 'finishing'][$index % 4] }}">
                        <div class="aspect-[4/3] overflow-hidden">
                            <img src="{{ asset($image) }}" alt="Proyek {{ $index + 1 }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-6">
                            <div
                                class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                <div
                                    class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-3">
                                    <i class="bi bi-tag mr-2"></i>
                                    <span class="category-text">
                                        {{ ['Struktur Baja', 'Fabrikasi Custom', 'Perbaikan & Maintenance', 'Finishing & Coating'][$index % 4] }}
                                    </span>
                                </div>
                                <h3 class="text-xl font-bold text-white mb-2">Proyek {{ $index + 1 }}</h3>
                                <p class="text-gray-200 text-sm mb-4 line-clamp-2">
                                    {{ ['Konstruksi struktur baja untuk gedung komersial', 'Fabrikasi custom tangga dan railing besi', 'Perbaikan dan maintenance struktur besi', 'Finishing powder coating dengan warna custom'][$index % 4] }}
                                </p>
                                <div class="flex items-center justify-between">
                                    <span class="text-cyan-300 font-semibold text-sm">
                                        {{ ['6 Bulan', '3 Minggu', '2 Minggu', '1 Minggu'][$index % 4] }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <button id="load-more"
                    class="bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center">
                    <i class="bi bi-plus-circle mr-3"></i>
                    <span>Muat Lebih Banyak</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Project Statistics -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ([['icon' => 'bi-building', 'value' => '50+', 'label' => 'Proyek Terselesaikan', 'color' => 'blue'], ['icon' => 'bi-award', 'value' => '100%', 'label' => 'Kepuasan Klien', 'color' => 'green'], ['icon' => 'bi-clock', 'value' => '5+', 'label' => 'Tahun Pengalaman', 'color' => 'cyan'], ['icon' => 'bi-geo-alt', 'value' => '25+', 'label' => 'Lokasi Proyek', 'color' => 'purple']] as $stat)
                    <div class="bg-white rounded-3xl p-8 text-center shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $loop->index * 100 }}">
                        <div
                            class="bg-gradient-to-br from-{{ $stat['color'] }}-500 to-{{ $stat['color'] }}-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <i class="{{ $stat['icon'] }} text-3xl text-white"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-3xl mb-2">{{ $stat['value'] }}</h4>
                        <p class="text-gray-600">{{ $stat['label'] }}</p>
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

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Tertarik dengan Karya Kami?</h2>
            <p class="text-blue-100 text-xl mb-10 max-w-2xl mx-auto leading-relaxed">
                Diskusikan kebutuhan konstruksi besi Anda dengan tim ahli kami dan dapatkan solusi terbaik untuk proyek Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                <a href="{{ route('home') }}#quote"
                    class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group"
                    data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <i class="bi bi-chat-quote mr-3 text-lg"></i>
                    Konsultasi Gratis
                    <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="https://wa.me/6287817695973"
                    class="border-2 border-white text-white hover:bg-white/10 px-8 py-4 rounded-2xl font-semibold backdrop-blur-sm transition-all duration-300 flex items-center justify-center group bg-white/5"
                    data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <i class="bi bi-whatsapp mr-3 text-lg"></i>
                    WhatsApp Kami
                    <i
                        class="bi bi-arrow-up-right ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                </a>
            </div>
            <p class="text-blue-200 mt-6 text-sm">
                Respons cepat dalam 1 jam kerja
            </p>
        </div>
    </section>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-6">
        <div class="relative max-w-4xl w-full max-h-[90vh]">
            <button id="closeModal"
                class="absolute -top-12 right-0 text-white text-2xl hover:text-cyan-300 transition-colors duration-300">
                <i class="bi bi-x-circle"></i>
            </button>
            <div class="bg-white rounded-2xl overflow-hidden">
                <img id="modalImage" src="" alt="" class="w-full h-auto max-h-[70vh] object-contain">
                <div class="p-6">
                    <h3 id="modalTitle" class="text-xl font-bold text-gray-800 mb-2"></h3>
                    <p id="modalDescription" class="text-gray-600 mb-4"></p>
                    <div class="flex justify-between items-center">
                        <span id="modalCategory"
                            class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                            <i class="bi bi-tag mr-2"></i>
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
        // Enhanced AOS initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS dengan pengaturan untuk animasi masuk dan keluar
            AOS.init({
                duration: 1000,
                easing: 'ease-out-cubic',
                once: false,
                mirror: true,
                offset: 120,
                anchorPlacement: 'top-bottom',
                disable: window.innerWidth < 768
            });

            // Initialize Particles.js
            if (document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    particles: {
                        number: {
                            value: 80,
                            density: {
                                enable: true,
                                value_area: 800
                            }
                        },
                        color: {
                            value: "#ffffff"
                        },
                        shape: {
                            type: "circle",
                            stroke: {
                                width: 0,
                                color: "#000000"
                            }
                        },
                        opacity: {
                            value: 0.3,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 1,
                                opacity_min: 0.1,
                                sync: false
                            }
                        },
                        size: {
                            value: 3,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 2,
                                size_min: 0.1,
                                sync: false
                            }
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
                                mode: "grab"
                            },
                            onclick: {
                                enable: true,
                                mode: "push"
                            },
                            resize: true
                        },
                        modes: {
                            grab: {
                                distance: 140,
                                line_linked: {
                                    opacity: 0.5
                                }
                            },
                            push: {
                                particles_nb: 4
                            }
                        }
                    },
                    retina_detect: true
                });
            }

            // Gallery Filter Functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galleryItems = document.querySelectorAll('.gallery-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Update button styles based on active state
                    if (this.dataset.filter === 'all') {
                        this.classList.remove('bg-white', 'text-gray-700', 'border-gray-200');
                        this.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-cyan-500',
                            'text-white', 'shadow-lg');
                    } else {
                        filterButtons.forEach(btn => {
                            if (btn.dataset.filter === 'all') {
                                btn.classList.remove('bg-gradient-to-r', 'from-blue-600',
                                    'to-cyan-500', 'text-white', 'shadow-lg');
                                btn.classList.add('bg-white', 'text-gray-700', 'border',
                                    'border-gray-200');
                            }
                        });
                    }

                    const filterValue = this.dataset.filter;

                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.dataset.category ===
                            filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'translateY(0)';
                            }, 100);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Image Modal Functionality
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalCategory = document.getElementById('modalCategory');
            const modalDuration = document.getElementById('modalDuration');
            const closeModal = document.getElementById('closeModal');
            const viewDetailButtons = document.querySelectorAll('.view-detail-btn');

            viewDetailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const galleryItem = this.closest('.gallery-item');
                    const imageSrc = galleryItem.querySelector('img').src;
                    const title = galleryItem.querySelector('h3').textContent;
                    const description = galleryItem.querySelector('p').textContent;
                    const category = galleryItem.querySelector('.category-text').textContent;
                    const duration = galleryItem.querySelector('span.text-cyan-300').textContent;

                    modalImage.src = imageSrc;
                    modalTitle.textContent = title;
                    modalDescription.textContent = description;
                    modalCategory.innerHTML = `<i class="bi bi-tag mr-2"></i>${category}`;
                    modalDuration.textContent = duration;

                    modal.classList.remove('hidden');
                    modal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                });
            });

            closeModal.addEventListener('click', function() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = 'auto';
            });

            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                    document.body.style.overflow = 'auto';
                }
            });

            // Load More Functionality (Simulated)
            const loadMoreButton = document.getElementById('load-more');
            let loadedItems = 9; // Initial items shown

            loadMoreButton.addEventListener('click', function() {
                // In a real application, this would fetch more data from the server
                // For demonstration, we'll just show a message
                this.innerHTML =
                    '<i class="bi bi-check-circle mr-3"></i><span>Semua Gambar Ditampilkan</span>';
                this.disabled = true;
                this.classList.remove('hover:-translate-y-1', 'hover:from-blue-700', 'hover:to-cyan-600');
                this.classList.add('bg-gray-400', 'cursor-not-allowed');

                // Show success message
                const successMessage = document.createElement('div');
                successMessage.className = 'mt-4 text-green-600 font-medium';
                successMessage.innerHTML =
                    '<i class="bi bi-check-circle mr-2"></i>Semua gambar telah ditampilkan';
                this.parentNode.appendChild(successMessage);
            });

            // Enhanced smooth scroll untuk anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const headerOffset = 100;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Parallax effect for hero section
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.relative.min-h-\\[90vh\\]');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });

            // Refresh AOS pada event tertentu
            window.addEventListener('load', function() {
                AOS.refresh();
            });

            window.addEventListener('resize', function() {
                setTimeout(() => AOS.refresh(), 500);
            });
        });
    </script>

    <style>
        /* Enhanced custom animations untuk gallery page */
        @keyframes slow-zoom {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.6;
            }
        }

        @keyframes gradient-x {

            0%,
            100% {
                background-size: 200% 200%;
                background-position: left center;
            }

            50% {
                background-size: 200% 200%;
                background-position: right center;
            }
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

        .animate-gradient-x {
            background-size: 200% auto;
            animation: gradient-x 3s ease infinite;
        }

        /* Gallery item transitions */
        .gallery-item {
            transition: all 0.5s ease;
        }

        /* Line clamp for text */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Custom scroll behavior */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        /* Enhanced AOS animasi smooth */
        [data-aos] {
            pointer-events: none;
        }

        [data-aos].aos-animate {
            pointer-events: auto;
        }

        /* Glass morphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Custom selection */
        ::selection {
            background: rgba(59, 130, 246, 0.3);
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Enhanced button hover effects */
        .btn-hover-effect {
            position: relative;
            overflow: hidden;
        }

        .btn-hover-effect::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-hover-effect:hover::before {
            left: 100%;
        }

        /* Text shadow for better readability */
        .text-shadow {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .text-shadow-lg {
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
        }

        /* Filter button active states */
        .filter-btn.active[data-filter="structure"] {
            background: linear-gradient(to right, #3b82f6, #06b6d4) !important;
            color: white !important;
            border: none !important;
        }

        .filter-btn.active[data-filter="fabrication"] {
            background: linear-gradient(to right, #06b6d4, #10b981) !important;
            color: white !important;
            border: none !important;
        }

        .filter-btn.active[data-filter="maintenance"] {
            background: linear-gradient(to right, #10b981, #8b5cf6) !important;
            color: white !important;
            border: none !important;
        }

        .filter-btn.active[data-filter="finishing"] {
            background: linear-gradient(to right, #8b5cf6, #ec4899) !important;
            color: white !important;
            border: none !important;
        }
    </style>
@endsection
