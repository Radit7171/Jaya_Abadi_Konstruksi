@extends('layouts.app')

@section('title', 'Home | Jaya Abadi Konstruksi')

@section('content')
    <!-- Enhanced Hero Section dengan efek parallax dan particle background -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Particle Background -->
        <div id="particles-js" class="absolute inset-0 z-0"></div>

        <!-- Background dengan efek overlay dan gradient -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-0"></div>
        <div class="absolute inset-0">
            <img src="{{ asset('images/hero-las.jpg') }}" alt="Hero Welding"
                class="w-full h-full object-cover transform scale-110 animate-slow-zoom">
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-6 h-6 bg-cyan-400 rounded-full opacity-70 animate-float"></div>
        <div class="absolute bottom-32 right-16 w-10 h-10 bg-blue-500 rounded-full opacity-50 animate-float-delayed"></div>
        <div class="absolute top-1/3 right-1/4 w-8 h-8 bg-white rounded-full opacity-30 animate-pulse-slow"></div>

        <!-- Content Hero -->
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                <!-- Badge -->
                <div class="inline-flex items-center px-6 py-3 mt-10 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-6">
                    <div class="w-2 h-2 bg-cyan-400 rounded-full mr-2 animate-pulse"></div>
                    <span class="text-cyan-300 font-medium">Spesialis Konstruksi Besi sejak 2013</span>
                </div>

                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Presisi
                    </span>
                    <br>
                    <span class="text-white bg-gradient-to-r from-white to-cyan-200 bg-clip-text text-transparent">
                        Dalam Setiap Las
                    </span>
                </h1>
                <p class="text-xl md:text-2xl lg:text-3xl text-gray-200 mb-8 max-w-4xl mx-auto leading-relaxed font-light">
                    Mengutamakan <span class="text-cyan-300 font-semibold">presisi dan keahlian</span> dalam setiap proyek konstruksi besi untuk hasil yang maksimal dan tahan lama
                </p>
                <div class="flex flex-col sm:flex-row gap-5 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="400" data-aos-once="true">
                    <a href="#quote"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-2xl shadow-blue-500/30 transform hover:-translate-y-1 transition-all duration-300 flex items-center">
                        <i class="bi bi-chat-quote mr-3 text-lg"></i>
                        <span>Dapatkan Penawaran Gratis</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#projects"
                        class="group border-2 border-white/40 hover:border-white text-white px-8 py-4 rounded-2xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center bg-white/5">
                        <i class="bi bi-images mr-3 text-lg"></i>
                        <span>Lihat Proyek Kami</span>
                        <i class="bi bi-arrow-down ml-2 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap justify-center items-center gap-8 mb-10 mt-12" data-aos="fade-up" data-aos-delay="600">
                    <div class="flex items-center text-gray-300">
                        <i class="bi bi-check-circle-fill text-green-400 mr-2"></i>
                        <span class="text-sm">Bersertifikat SNI</span>
                    </div>
                    <div class="flex items-center text-gray-300">
                        <i class="bi bi-check-circle-fill text-green-400 mr-2"></i>
                        <span class="text-sm">Material Berkualitas</span>
                    </div>
                    <div class="flex items-center text-gray-300">
                        <i class="bi bi-check-circle-fill text-green-400 mr-2"></i>
                        <span class="text-sm">Garansi Pengerjaan</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Stats Section dengan counter animation -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50/50 relative overflow-hidden -mt-1 z-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIyIiBmaWxsPSIjMzM4MmY2Ii8+PC9zdmc+')]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg shadow-blue-500/30">
                        <i class="bi bi-building text-3xl text-white"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-3 counter" data-target="50">0</h3>
                    <p class="text-gray-600 font-semibold text-lg">Proyek Selesai</p>
                    <div class="w-16 h-1 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full mx-auto mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg shadow-cyan-500/30">
                        <i class="bi bi-award text-3xl text-white"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-3 counter" data-target="10">0</h3>
                    <p class="text-gray-600 font-semibold text-lg">Tahun Pengalaman</p>
                    <div class="w-16 h-1 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full mx-auto mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg shadow-green-500/30">
                        <i class="bi bi-people text-3xl text-white"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-3 counter" data-target="100">0</h3>
                    <p class="text-gray-600 font-semibold text-lg">Klien Puas</p>
                    <div class="w-16 h-1 bg-gradient-to-r from-green-500 to-cyan-500 rounded-full mx-auto mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-600 w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg shadow-purple-500/30">
                        <i class="bi bi-shield-check text-3xl text-white"></i>
                    </div>
                    <h3 class="text-4xl font-bold text-gray-800 mb-3">24/7</h3>
                    <p class="text-gray-600 font-semibold text-lg">Support</p>
                    <div class="w-16 h-1 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full mx-auto mt-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Services Section dengan hover effects -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="services">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full -translate-y-1/2 translate-x-1/2 opacity-30 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-cyan-100 rounded-full translate-y-1/2 -translate-x-1/2 opacity-30 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-stack mr-2"></i>
                    LAYANAN KAMI
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Keahlian dalam Berbagai Bidang</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Kami menyediakan solusi lengkap untuk kebutuhan konstruksi besi dengan standar kualitas tertinggi
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 group border border-gray-100 hover:border-blue-200 relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="800">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-blue-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                        <i class="bi bi-tools text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Konstruksi Besi</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Pembangunan struktur besi untuk gedung, pabrik, dan fasilitas industri dengan material berkualitas
                        tinggi dan standar keamanan tertinggi.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-blue-500 mr-3 text-lg"></i>
                            Struktur Rangka Baja
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-blue-500 mr-3 text-lg"></i>
                            Kanopi & Pagar
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-blue-500 mr-3 text-lg"></i>
                            Tangga & Railing
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold group-hover:text-blue-700 transition-colors">
                        <span>Pelajari Lebih Lanjut</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 group border border-gray-100 hover:border-cyan-200 relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-cyan-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div
                        class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                        <i class="bi bi-hammer text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Fabrikasi Custom</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Pembuatan komponen besi sesuai desain dan spesifikasi khusus untuk kebutuhan unik proyek Anda
                        dengan presisi tinggi.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-cyan-500 mr-3 text-lg"></i>
                            Desain Kustom
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-cyan-500 mr-3 text-lg"></i>
                            Quality Control
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center text-cyan-600 font-semibold group-hover:text-cyan-700 transition-colors">
                        <span>Pelajari Lebih Lanjut</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 group border border-gray-100 hover:border-green-200 relative overflow-hidden"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-green-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                        <i class="bi bi-gear text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Perbaikan & Maintenance</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Layanan perawatan dan perbaikan struktur besi untuk memastikan keamanan dan daya tahan jangka
                        panjang dengan teknologi terkini.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-green-500 mr-3 text-lg"></i>
                            Inspeksi Rutin
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-green-500 mr-3 text-lg"></i>
                            Perbaikan Struktur
                        </li>
                        <li class="flex items-center text-gray-600 group-hover:text-gray-700 transition-colors">
                            <i class="bi bi-check-circle-fill text-green-500 mr-3 text-lg"></i>
                            Anti Korosi
                        </li>
                    </ul>
                    <a href="#" class="inline-flex items-center text-green-600 font-semibold group-hover:text-green-700 transition-colors">
                        <span>Pelajari Lebih Lanjut</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Project Gallery dengan lightbox -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50/50 relative overflow-hidden" id="projects">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzMzODJmNiIgc3Ryb2tlLXdpZHRoPSIyIi8+PC9zdmc+')]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-images mr-2"></i>
                    PORTFOLIO
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Proyek Terbaru Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Bukti kualitas dan keahlian kami dalam berbagai proyek konstruksi besi
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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
                        class="group relative overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 cursor-pointer"
                        data-aos="fade-up" data-aos-duration="800" data-aos-delay="{{ $index * 100 }}"
                        >
                        <div class="aspect-w-16 aspect-h-12 bg-gray-200 overflow-hidden">
                            <img src="{{ asset('images/projects/' . $image) }}" alt="{{ $projectTitles[$index] }}"
                                class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-8">
                            <div
                                class="text-white transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                <h3 class="text-2xl font-bold mb-3">{{ $projectTitles[$index] }}</h3>
                                <p class="text-gray-200 text-lg mb-4">Struktur besi berkualitas tinggi dengan finishing sempurna</p>
                                <div class="flex items-center text-cyan-300 font-semibold">
                                    <span>Lihat Detail</span>
                                    <i class="bi bi-arrow-up-right ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Project Badge -->
                        <div class="absolute top-6 left-6 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-sm font-semibold text-gray-800 transform translate-y-2 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                            <i class="bi bi-star-fill text-yellow-500 mr-1"></i>
                            Proyek Selesai
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-16" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center">
                    <i class="bi bi-collection-play mr-3"></i>
                    <span>Lihat Semua Proyek</span>
                    <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Enhanced Values Section dengan interactive cards -->
    <section class="py-24 bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900 text-white relative overflow-hidden" id="values">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-600/10 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-600/10 rounded-full translate-x-1/2 translate-y-1/2 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-cyan-300 font-medium mb-4 border border-cyan-500/30">
                    <i class="bi bi-stars mr-2"></i>
                    NILAI KAMI
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                    Komitmen kami terhadap kualitas, ketepatan waktu, dan kepuasan pelanggan
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-28 h-28 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-cyan-500/20 transition-all duration-500 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-110 relative overflow-hidden">
                        <i class="bi bi-lightbulb text-5xl text-cyan-400 z-10"></i>
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-6">Kreativitas & Inovasi</h3>
                    <p class="text-gray-300 leading-relaxed text-lg">
                        Setiap proyek dirancang dengan solusi kreatif dan inovatif yang menonjolkan fungsi dan estetika
                        untuk hasil yang optimal.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-28 h-28 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-cyan-500/20 transition-all duration-500 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-110 relative overflow-hidden">
                        <i class="bi bi-shield-check text-5xl text-cyan-400 z-10"></i>
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-6">Keandalan</h3>
                    <p class="text-gray-300 leading-relaxed text-lg">
                        Kami menjamin hasil kerja yang konsisten dan dapat diandalkan dalam setiap pengerjaan
                        dengan standar kualitas tertinggi.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-28 h-28 rounded-3xl flex items-center justify-center mx-auto mb-8 group-hover:bg-cyan-500/20 transition-all duration-500 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-110 relative overflow-hidden">
                        <i class="bi bi-gear-wide-connected text-5xl text-cyan-400 z-10"></i>
                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-blue-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-2xl font-bold mb-6">Presisi</h3>
                    <p class="text-gray-300 leading-relaxed text-lg">
                        Ketepatan adalah prioritas kami untuk memastikan hasil sesuai dengan spesifikasi dan kebutuhan
                        klien dalam setiap detail.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Founder Section dengan timeline -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="founder">
        <!-- Background Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-100 rounded-full -translate-y-1/2 translate-x-1/2 opacity-30 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                        <i class="bi bi-people mr-2"></i>
                        TIM KAMI
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Maryanto</h2>
                    <h4 class="text-blue-600 text-2xl font-semibold mb-8">Founder & Project Manager</h4>
                    <blockquote class="text-gray-600 text-xl leading-relaxed mb-10 border-l-4 border-blue-500 pl-8 italic bg-blue-50/50 py-6 rounded-r-2xl">
                        "Kualitas dan ketelitian adalah dasar utama dalam setiap pekerjaan kami. Dengan pengalaman
                        bertahun-tahun dalam dunia konstruksi besi, kami memastikan setiap detail diperhatikan dengan cermat
                        untuk memberikan hasil yang terbaik bagi klien kami."
                    </blockquote>

                    <!-- Experience Timeline -->
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="bg-blue-500 w-3 h-3 rounded-full mr-4"></div>
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">10+ Tahun Pengalaman</p>
                                <p class="text-gray-600">Spesialis Konstruksi Besi</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-cyan-500 w-3 h-3 rounded-full mr-4"></div>
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">50+ Proyek Sukses</p>
                                <p class="text-gray-600">Dengan Tingkat Kepuasan 100%</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-green-500 w-3 h-3 rounded-full mr-4"></div>
                            <div>
                                <p class="text-gray-800 font-semibold text-lg">Bersertifikat SNI</p>
                                <p class="text-gray-600">Standar Kualitas Terjamin</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="relative z-10">
                        <div class="bg-gradient-to-br from-blue-500 to-cyan-500 p-1 rounded-3xl shadow-2xl">
                            <img src="{{ asset('images/founder.jpg') }}" alt="Founder"
                                class="rounded-3xl w-full max-w-md mx-auto">
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-cyan-100 rounded-2xl flex items-center justify-center shadow-lg z-0">
                        <i class="bi bi-award text-3xl text-cyan-600"></i>
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-20 h-20 bg-blue-100 rounded-2xl flex items-center justify-center shadow-lg z-0">
                        <i class="bi bi-tools text-2xl text-blue-600"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Quote Section dengan validation -->
    <section class="py-24 bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900 text-white relative overflow-hidden" id="quote">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Dapatkan Penawaran Gratis</h2>
                <p class="text-gray-300 text-xl max-w-2xl mx-auto leading-relaxed">
                    Hubungi kami sekarang untuk mendapatkan estimasi biaya proyek Anda secara gratis dan konsultasi tanpa biaya
                </p>
            </div>

            <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-10 border border-white/20 shadow-2xl" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="200">
                <form id="quoteForm" action="#" method="POST" class="grid md:grid-cols-2 gap-8">
                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                        <label class="block text-gray-200 mb-3 font-semibold text-lg">Nama Lengkap</label>
                        <input type="text" name="name" placeholder="Nama Anda" required
                            class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <label class="block text-gray-200 mb-3 font-semibold text-lg">Email</label>
                        <input type="email" name="email" placeholder="email@anda.com" required
                            class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                        <label class="block text-gray-200 mb-3 font-semibold text-lg">Telepon</label>
                        <input type="tel" name="phone" placeholder="08xx-xxxx-xxxx" required
                            class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300">
                    </div>
                    <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                        <label class="block text-gray-200 mb-3 font-semibold text-lg">Jenis Proyek</label>
                        <select name="project_type" required
                            class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 appearance-none">
                            <option value="" class="text-gray-800">Pilih Jenis Proyek</option>
                            <option value="konstruksi" class="text-gray-800">Konstruksi Besi</option>
                            <option value="fabrikasi" class="text-gray-800">Fabrikasi Custom</option>
                            <option value="perbaikan" class="text-gray-800">Perbaikan & Maintenance</option>
                        </select>
                    </div>
                    <div class="md:col-span-2" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                        <label class="block text-gray-200 mb-3 font-semibold text-lg">Pesan</label>
                        <textarea name="message" rows="5" placeholder="Jelaskan kebutuhan proyek Anda..." required
                            class="w-full px-5 py-4 rounded-2xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all duration-300 resize-none"></textarea>
                    </div>
                    <div class="md:col-span-2 text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="800">
                        <button type="submit"
                            class="group bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white px-10 py-5 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-lg">
                            <i class="bi bi-send mr-3"></i>Kirim Permintaan Penawaran
                            <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <p class="text-gray-300 mt-4 text-sm">
                            * Kami akan merespons dalam 1 jam kerja
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Enhanced CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-blue-700 to-cyan-600 text-white relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-4xl mx-auto px-6 text-center relative z-10" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Memulai Proyek Anda?</h2>
            <p class="text-blue-100 text-xl mb-10 max-w-2xl mx-auto leading-relaxed">
                Hubungi kami sekarang untuk konsultasi gratis dan penawaran terbaik untuk proyek konstruksi besi Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                <a href="https://wa.me/6287817695973"
                    class="group bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center"
                    data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <i class="bi bi-whatsapp mr-3 text-xl"></i>
                    WhatsApp Kami
                    <i class="bi bi-arrow-up-right ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                </a>
                <a href="tel:087817695973"
                    class="group border-2 border-white text-white hover:bg-white/10 px-8 py-4 rounded-2xl font-semibold backdrop-blur-sm transition-all duration-300 flex items-center justify-center bg-white/5"
                    data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200">
                    <i class="bi bi-telephone mr-3 text-xl"></i>
                    Telepon Sekarang
                    <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-8 mt-12 text-blue-200">
                <div class="flex items-center">
                    <i class="bi bi-clock-history mr-2"></i>
                    <span>Respons Cepat 24/7</span>
                </div>
                <div class="flex items-center">
                    <i class="bi bi-shield-check mr-2"></i>
                    <span>Konsultasi Gratis</span>
                </div>
                <div class="flex items-center">
                    <i class="bi bi-award mr-2"></i>
                    <span>Garansi Pengerjaan</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-6">
        <div class="relative max-w-6xl w-full">
            <button onclick="closeLightbox()" class="absolute -top-16 right-0 text-white text-4xl hover:text-cyan-400 transition-colors z-10">
                <i class="bi bi-x-circle"></i>
            </button>
            <img id="lightbox-img" src="" alt="" class="w-full h-auto rounded-2xl shadow-2xl">
            <div class="text-white mt-6 text-center">
                <h3 id="lightbox-title" class="text-2xl font-bold mb-2"></h3>
                <p id="lightbox-desc" class="text-gray-300"></p>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Particle.js Library -->
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
            particlesJS('particles-js', {
                particles: {
                    number: { value: 80, density: { enable: true, value_area: 800 } },
                    color: { value: "#3b82f6" },
                    shape: { type: "circle" },
                    opacity: { value: 0.5, random: true },
                    size: { value: 3, random: true },
                    line_linked: {
                        enable: true,
                        distance: 150,
                        color: "#06b6d4",
                        opacity: 0.4,
                        width: 1
                    },
                    move: {
                        enable: true,
                        speed: 2,
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

            // Counter animation for stats
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

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
            }, { threshold: 0.5 });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });

            // Form validation
            const quoteForm = document.getElementById('quoteForm');
            if (quoteForm) {
                quoteForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // Add your form submission logic here
                    alert('Terima kasih! Permintaan penawaran Anda telah dikirim. Kami akan menghubungi Anda segera.');
                    quoteForm.reset();
                });
            }

            // Refresh AOS pada event tertentu
            window.addEventListener('load', function() {
                AOS.refresh();
            });

            window.addEventListener('resize', function() {
                setTimeout(() => AOS.refresh(), 500);
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
        /* Enhanced custom animations */
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
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes float-delayed {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 0.3;
            }
            50% {
                opacity: 0.6;
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

        /* Particles container */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection
