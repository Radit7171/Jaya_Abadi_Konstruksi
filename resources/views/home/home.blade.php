@extends('layouts.app')

@section('title', 'Home | Jaya Abadi Konstruksi')

@section('content')
    <!-- Slimmer Hero Section -->
    <section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Particle Background -->
        <div id="particles-js" class="absolute inset-0 z-0"></div>

        <!-- Background dengan efek overlay dan gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-0"></div>
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-las.jpg') }}" alt="Hero Welding"
                class="w-full h-full object-cover transform scale-110 animate-slow-zoom">
        </div>

        <!-- Floating Elements - Smaller -->
        <div class="absolute top-16 left-8 w-4 h-4 bg-cyan-400 rounded-full opacity-70 animate-float"></div>
        <div class="absolute bottom-24 right-12 w-6 h-6 bg-blue-500 rounded-full opacity-50 animate-float-delayed"></div>
        <div class="absolute top-1/3 right-1/4 w-5 h-5 bg-white rounded-full opacity-30 animate-pulse-slow"></div>

        <!-- Content Hero - Slimmer -->
        <div class="relative z-20 max-w-6xl mx-auto px-4 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <!-- Badge - Smaller -->
                <div class="inline-flex items-center px-4 py-2 mt-6 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-4">
                    <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full mr-2 animate-pulse"></div>
                    <span class="text-cyan-300 font-medium text-sm">Spesialis Konstruksi Besi sejak 2013</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Presisi
                    </span>
                    <br>
                    <span class="text-white bg-gradient-to-r from-white to-cyan-200 bg-clip-text text-transparent text-3xl md:text-4xl lg:text-5xl">
                        Dalam Setiap Las
                    </span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-6 max-w-3xl mx-auto leading-relaxed font-light">
                    Mengutamakan <span class="text-cyan-300 font-semibold">presisi dan keahlian</span> dalam setiap proyek konstruksi besi
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="300" data-aos-once="true">
                    <a href="#quote"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg shadow-blue-500/20 transform hover:-translate-y-1 transition-all duration-300 flex items-center text-sm">
                        <i class="bi bi-chat-quote mr-2"></i>
                        <span>Dapatkan Penawaran</span>
                        <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#projects"
                        class="group border border-white/40 hover:border-white text-white px-6 py-3 rounded-xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center text-sm bg-white/5">
                        <i class="bi bi-images mr-2"></i>
                        <span>Lihat Proyek</span>
                        <i class="bi bi-arrow-down ml-1 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                </div>

                <!-- Trust Badges - Smaller -->
                <div class="flex flex-wrap justify-center items-center gap-6 mb-6 mt-8" data-aos="fade-up" data-aos-delay="500">
                    <div class="flex items-center text-gray-300 text-xs">
                        <i class="bi bi-check-circle-fill text-green-400 mr-1 text-sm"></i>
                        <span>Bersertifikat SNI</span>
                    </div>
                    <div class="flex items-center text-gray-300 text-xs">
                        <i class="bi bi-check-circle-fill text-green-400 mr-1 text-sm"></i>
                        <span>Material Berkualitas</span>
                    </div>
                    <div class="flex items-center text-gray-300 text-xs">
                        <i class="bi bi-check-circle-fill text-green-400 mr-1 text-sm"></i>
                        <span>Garansi Pengerjaan</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Stats Section -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50/50 relative overflow-hidden -mt-1 z-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-3">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIyIiBmaWxsPSIjMzM4MmY2Ii8+PC9zdmc+')]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center group" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-105 transition-transform duration-300 shadow-md shadow-blue-500/20">
                        <i class="bi bi-building text-xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 counter" data-target="50">0</h3>
                    <p class="text-gray-600 font-medium text-sm">Proyek Selesai</p>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mx-auto mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-105 transition-transform duration-300 shadow-md shadow-cyan-500/20">
                        <i class="bi bi-award text-xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 counter" data-target="10">0</h3>
                    <p class="text-gray-600 font-medium text-sm">Tahun Pengalaman</p>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mx-auto mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-105 transition-transform duration-300 shadow-md shadow-green-500/20">
                        <i class="bi bi-people text-xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2 counter" data-target="100">0</h3>
                    <p class="text-gray-600 font-medium text-sm">Klien Puas</p>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-green-500 to-cyan-500 rounded-full mx-auto mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-105 transition-transform duration-300 shadow-md shadow-purple-500/20">
                        <i class="bi bi-shield-check text-xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">24/7</h3>
                    <p class="text-gray-600 font-medium text-sm">Support</p>
                    <div class="w-12 h-0.5 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full mx-auto mt-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Services Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="services">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-100 rounded-full -translate-y-1/2 translate-x-1/2 opacity-20 blur-2xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-cyan-100 rounded-full translate-y-1/2 -translate-x-1/2 opacity-20 blur-2xl"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-stack mr-1"></i>
                    LAYANAN KAMI
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Keahlian dalam Berbagai Bidang</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-base">
                    Solusi lengkap untuk kebutuhan konstruksi besi dengan standar kualitas tertinggi
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <!-- Service 1 - Slimmer -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 group border border-gray-100 hover:border-blue-200 relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="600">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-blue-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300 shadow-md">
                        <i class="bi bi-tools text-xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Konstruksi Besi</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                        Pembangunan struktur besi untuk gedung, pabrik, dan fasilitas industri dengan material berkualitas tinggi.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-blue-500 mr-2"></i>
                            Struktur Rangka Baja
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-blue-500 mr-2"></i>
                            Kanopi & Pagar
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-blue-500 mr-2"></i>
                            Tangga & Railing
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center text-blue-600 font-medium group-hover:text-blue-700 transition-colors text-sm">
                        <span>Pelajari Lebih Lanjut</span>
                        <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 2 - Slimmer -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 group border border-gray-100 hover:border-cyan-200 relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-cyan-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div
                        class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300 shadow-md">
                        <i class="bi bi-hammer text-xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Fabrikasi Custom</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                        Pembuatan komponen besi sesuai desain dan spesifikasi khusus untuk kebutuhan unik proyek Anda.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-cyan-500 mr-2"></i>
                            Desain Kustom
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-cyan-500 mr-2"></i>
                            Quality Control
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center text-cyan-600 font-medium group-hover:text-cyan-700 transition-colors text-sm">
                        <span>Pelajari Lebih Lanjut</span>
                        <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 3 - Slimmer -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 group border border-gray-100 hover:border-green-200 relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-green-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300 shadow-md">
                        <i class="bi bi-gear text-xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Perbaikan & Maintenance</h3>
                    <p class="text-gray-600 mb-4 leading-relaxed text-sm">
                        Layanan perawatan dan perbaikan struktur besi untuk memastikan keamanan dan daya tahan jangka panjang.
                    </p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-green-500 mr-2"></i>
                            Inspeksi Rutin
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-green-500 mr-2"></i>
                            Perbaikan Struktur
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors text-sm">
                            <i class="bi bi-check-circle-fill text-green-500 mr-2"></i>
                            Anti Korosi
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center text-green-600 font-medium group-hover:text-green-700 transition-colors text-sm">
                        <span>Pelajari Lebih Lanjut</span>
                        <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Project Gallery -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50/50 relative overflow-hidden" id="projects">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-3">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzMzODJmNiIgc3Ryb2tlLXdpZHRoPSIyIi8+PC9zdmc+')]"></div>
        </div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-images mr-1"></i>
                    PORTFOLIO
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Proyek Terbaru Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-base">
                    Bukti kualitas dan keahlian kami dalam berbagai proyek konstruksi besi
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @php
                    $projectImages = [
                        'proyek.jpg',
                        'proyek2.jpg',
                        'proyek3.jpg',
                        'proyek4.jpg',
                        'proyek5.jpg',
                        'proyek6.jpg',
                    ];

                    $projectTitles = [
                        'Struktur Rangka Gudang',
                        'Kanopi Parkir Modern',
                        'Tangga Spiral Custom',
                        'Pagar Industrial',
                        'Railing Balkon',
                        'Struktur Pabrik'
                    ];
                @endphp
                @foreach ($projectImages as $index => $image)
                    <div
                        class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer"
                        data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $index * 100 }}"
                        >
                        <div class="aspect-w-16 aspect-h-12 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/projects/' . $image) }}" alt="{{ $projectTitles[$index] }}"
                                class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div
                                class="text-white transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-lg font-bold mb-2">{{ $projectTitles[$index] }}</h3>
                                <p class="text-gray-200 text-sm mb-3">Struktur besi berkualitas tinggi dengan finishing sempurna</p>
                                <div class="flex items-center text-cyan-300 font-medium text-sm">
                                    <span>Lihat Detail</span>
                                    <i class="bi bi-arrow-up-right ml-1 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Project Badge - Smaller -->
                        <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-2 py-1 rounded-full text-xs font-medium text-gray-800 transform translate-y-1 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                            <i class="bi bi-star-fill text-yellow-500 mr-1"></i>
                            Proyek Selesai
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="800">
                <a href="#" class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold shadow-md transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center text-sm">
                    <i class="bi bi-collection-play mr-2"></i>
                    <span>Lihat Semua Proyek</span>
                    <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Slimmer Values Section -->
    <section class="py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900 text-white relative overflow-hidden" id="values">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-600/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-2xl"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-cyan-600/10 rounded-full translate-x-1/2 translate-y-1/2 blur-2xl"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-white/10 backdrop-blur-sm rounded-full text-cyan-300 font-medium mb-3 text-sm border border-cyan-500/30">
                    <i class="bi bi-stars mr-1"></i>
                    NILAI KAMI
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-3">Mengapa Memilih Kami?</h2>
                <p class="text-gray-300 max-w-2xl mx-auto text-base">
                    Komitmen kami terhadap kualitas, ketepatan waktu, dan kepuasan pelanggan
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center group" data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-105 relative overflow-hidden">
                        <i class="bi bi-lightbulb text-3xl text-cyan-400 z-10"></i>
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Kreativitas & Inovasi</h3>
                    <p class="text-gray-300 leading-relaxed text-sm">
                        Setiap proyek dirancang dengan solusi kreatif dan inovatif yang menonjolkan fungsi dan estetika.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-105 relative overflow-hidden">
                        <i class="bi bi-shield-check text-3xl text-cyan-400 z-10"></i>
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Keandalan</h3>
                    <p class="text-gray-300 leading-relaxed text-sm">
                        Kami menjamin hasil kerja yang konsisten dan dapat diandalkan dengan standar kualitas tertinggi.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-105 relative overflow-hidden">
                        <i class="bi bi-gear-wide-connected text-3xl text-cyan-400 z-10"></i>
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Presisi</h3>
                    <p class="text-gray-300 leading-relaxed text-sm">
                        Ketepatan adalah prioritas kami untuk memastikan hasil sesuai dengan spesifikasi dan kebutuhan klien.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Founder Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="founder">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-blue-100 rounded-full -translate-y-1/2 translate-x-1/2 opacity-20 blur-2xl"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" data-aos-duration="800">
                    <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-4 text-sm">
                        <i class="bi bi-people mr-1"></i>
                        TIM KAMI
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Maryanto</h2>
                    <h4 class="text-blue-600 text-xl font-semibold mb-6">Founder & Project Manager</h4>
                    <blockquote class="text-gray-600 text-lg leading-relaxed mb-8 border-l-3 border-blue-500 pl-6 italic bg-blue-50/50 py-4 rounded-r-xl text-sm">
                        "Kualitas dan ketelitian adalah dasar utama dalam setiap pekerjaan kami. Dengan pengalaman bertahun-tahun dalam konstruksi besi, kami memastikan setiap detail diperhatikan dengan cermat."
                    </blockquote>

                    <!-- Experience Timeline - Slimmer -->
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <div class="bg-blue-500 w-2 h-2 rounded-full mr-3"></div>
                            <div>
                                <p class="text-gray-800 font-semibold text-sm">10+ Tahun Pengalaman</p>
                                <p class="text-gray-600 text-xs">Spesialis Konstruksi Besi</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-cyan-500 w-2 h-2 rounded-full mr-3"></div>
                            <div>
                                <p class="text-gray-800 font-semibold text-sm">50+ Proyek Sukses</p>
                                <p class="text-gray-600 text-xs">Dengan Tingkat Kepuasan 100%</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-green-500 w-2 h-2 rounded-full mr-3"></div>
                            <div>
                                <p class="text-gray-800 font-semibold text-sm">Bersertifikat SNI</p>
                                <p class="text-gray-600 text-xs">Standar Kualitas Terjamin</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="relative z-10">
                        <div class="bg-gradient-to-br from-blue-500 to-cyan-500 p-1 rounded-2xl shadow-xl">
                            <img src="{{ asset('images/founder.jpg') }}" alt="Founder"
                                class="rounded-2xl w-full max-w-sm mx-auto">
                        </div>
                    </div>

                    <!-- Floating Elements - Smaller -->
                    <div class="absolute -top-4 -right-4 w-16 h-16 bg-cyan-100 rounded-xl flex items-center justify-center shadow-md z-0">
                        <i class="bi bi-award text-xl text-cyan-600"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center shadow-md z-0">
                        <i class="bi bi-tools text-lg text-blue-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Quote Section -->
    <section class="py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900 text-white relative overflow-hidden" id="quote">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-cyan-500/10 rounded-full translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-3xl mx-auto px-4 relative z-10">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Dapatkan Penawaran Gratis</h2>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto leading-relaxed">
                    Hubungi kami sekarang untuk mendapatkan estimasi biaya proyek Anda secara gratis
                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20 shadow-xl" data-aos="fade-up"
                data-aos-duration="800" data-aos-delay="200">
                <form id="quoteForm" action="#" method="POST" class="grid md:grid-cols-2 gap-6">
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                        <label class="block text-gray-200 mb-2 font-medium text-sm">Nama Lengkap</label>
                        <input type="text" name="name" placeholder="Nama Anda" required
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 text-sm">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                        <label class="block text-gray-200 mb-2 font-medium text-sm">Email</label>
                        <input type="email" name="email" placeholder="email@anda.com" required
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 text-sm">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                        <label class="block text-gray-200 mb-2 font-medium text-sm">Telepon</label>
                        <input type="tel" name="phone" placeholder="08xx-xxxx-xxxx" required
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 text-sm">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="600">
                        <label class="block text-gray-200 mb-2 font-medium text-sm">Jenis Proyek</label>
                        <select name="project_type" required
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 appearance-none text-sm">
                            <option value="" class="text-gray-800">Pilih Jenis Proyek</option>
                            <option value="konstruksi" class="text-gray-800">Konstruksi Besi</option>
                            <option value="fabrikasi" class="text-gray-800">Fabrikasi Custom</option>
                            <option value="perbaikan" class="text-gray-800">Perbaikan & Maintenance</option>
                        </select>
                    </div>
                    <div class="md:col-span-2" data-aos="fade-up" data-aos-duration="600" data-aos-delay="700">
                        <label class="block text-gray-200 mb-2 font-medium text-sm">Pesan</label>
                        <textarea name="message" rows="4" placeholder="Jelaskan kebutuhan proyek Anda..." required
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 resize-none text-sm"></textarea>
                    </div>
                    <div class="md:col-span-2 text-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="800">
                        <button type="submit"
                            class="group bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 text-sm">
                            <i class="bi bi-send mr-2"></i>Kirim Permintaan Penawaran
                            <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <p class="text-gray-300 mt-3 text-xs">
                            * Kami akan merespons dalam 1 jam kerja
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Slimmer CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 via-blue-700 to-cyan-600 text-white relative overflow-hidden">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 left-0 w-52 h-52 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-cyan-500/10 rounded-full translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-3xl mx-auto px-4 text-center relative z-10" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                Hubungi kami sekarang untuk konsultasi gratis dan penawaran terbaik
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6287817695973"
                    class="group bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center text-sm"
                    data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <i class="bi bi-whatsapp mr-2"></i>
                    WhatsApp Kami
                    <i class="bi bi-arrow-up-right ml-1 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                </a>
                <a href="tel:087817695973"
                    class="group border border-white text-white hover:bg-white/10 px-6 py-3 rounded-xl font-semibold backdrop-blur-sm transition-all duration-300 flex items-center justify-center text-sm bg-white/5"
                    data-aos="zoom-in" data-aos-duration="600" data-aos-delay="200">
                    <i class="bi bi-telephone mr-2"></i>
                    Telepon Sekarang
                    <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-6 mt-10 text-blue-200 text-sm">
                <div class="flex items-center">
                    <i class="bi bi-clock-history mr-1"></i>
                    <span>Respons Cepat 24/7</span>
                </div>
                <div class="flex items-center">
                    <i class="bi bi-shield-check mr-1"></i>
                    <span>Konsultasi Gratis</span>
                </div>
                <div class="flex items-center">
                    <i class="bi bi-award mr-1"></i>
                    <span>Garansi Pengerjaan</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4">
        <div class="relative max-w-4xl w-full">
            <button onclick="closeLightbox()" class="absolute -top-12 right-0 text-white text-2xl hover:text-cyan-400 transition-colors z-10">
                <i class="bi bi-x-circle"></i>
            </button>
            <img id="lightbox-img" src="" alt="" class="w-full h-auto rounded-xl shadow-xl">
            <div class="text-white mt-4 text-center">
                <h3 id="lightbox-title" class="text-lg font-bold mb-1"></h3>
                <p id="lightbox-desc" class="text-gray-300 text-sm"></p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Particle.js Library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        // Slimmer AOS initialization
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS dengan pengaturan yang lebih cepat
            AOS.init({
                duration: 600,
                easing: 'ease-out-cubic',
                once: false,
                mirror: true,
                offset: 80,
                anchorPlacement: 'top-bottom',
                disable: window.innerWidth < 768
            });

            // Initialize Particles.js - Fewer particles for better performance
            particlesJS('particles-js', {
                particles: {
                    number: { value: 60, density: { enable: true, value_area: 600 } },
                    color: { value: "#3b82f6" },
                    shape: { type: "circle" },
                    opacity: { value: 0.4, random: true },
                    size: { value: 2, random: true },
                    line_linked: {
                        enable: true,
                        distance: 120,
                        color: "#06b6d4",
                        opacity: 0.3,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 1.5,
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
                        onhover: { enable: true, mode: "repulse" },
                        onclick: { enable: true, mode: "push" },
                        resize: true
                    }
                }
            });

            // Smooth scroll untuk anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
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

            // Counter animation for stats
            const counters = document.querySelectorAll('.counter');
            const speed = 150;

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(() => animateCounter(counter), 1);
                } else {
                    counter.innerText = target + '+';
                }
            };

            // Start counter when element is in viewport
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });

            // Form validation
            const quoteForm = document.getElementById('quoteForm');
            if (quoteForm) {
                quoteForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('Terima kasih! Permintaan penawaran Anda telah dikirim. Kami akan menghubungi Anda segera.');
                    quoteForm.reset();
                });
            }

            // Refresh AOS pada event tertentu
            window.addEventListener('load', function() {
                AOS.refresh();
            });

            window.addEventListener('resize', function() {
                setTimeout(() => AOS.refresh(), 300);
            });
        });

        // Lightbox functionality
        function openLightbox(index) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const lightboxTitle = document.getElementById('lightbox-title');
            const lightboxDesc = document.getElementById('lightbox-desc');

            const projectTitles = [
                'Struktur Rangka Gudang',
                'Kanopi Parkir Modern',
                'Tangga Spiral Custom',
                'Pagar Industrial',
                'Railing Balkon',
                'Struktur Pabrik'
            ];

            const projectImages = [
                'proyek.jpg',
                'proyek2.jpg',
                'proyek3.jpg',
                'proyek4.jpg',
                'proyek5.jpg',
                'proyek6.jpg',
            ];

            lightboxImg.src = "{{ asset('images/projects/') }}/" + projectImages[index];
            lightboxTitle.textContent = projectTitles[index];
            lightboxDesc.textContent = 'Struktur besi berkualitas tinggi dengan finishing sempurna dan standar keamanan tertinggi';

            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('flex');
            lightbox.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close lightbox on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
    </script>

    <style>
        /* Slimmer custom animations */
        @keyframes slow-zoom {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.03);
            }
            100% {
                transform: scale(1);
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

        @keyframes gradient-x {
            0%, 100% {
                background-size: 200% 200%;
                background-position: left center;
            }
            50% {
                background-size: 200% 200%;
                background-position: right center;
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

        .animate-gradient-x {
            background-size: 200% auto;
            animation: gradient-x 2s ease infinite;
        }

        /* Custom scroll behavior */
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
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
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        /* Custom selection */
        ::selection {
            background: rgba(59, 130, 246, 0.2);
        }

        /* Scrollbar styling */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Particles container */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection