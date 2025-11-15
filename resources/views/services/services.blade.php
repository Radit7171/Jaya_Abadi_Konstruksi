@extends('layouts.app')

@section('title', 'Layanan Kami | Jaya Abadi Konstruksi')

@section('content')
    <!-- Enhanced Hero Section -->
    <section
        class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-black/40 z-0"></div>
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-10"></div>
            <img src="{{ asset('images/projects/proyek4.jpg') }}" alt="Services Hero"
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
                    <span class="text-cyan-300 font-medium">Layanan Profesional</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    <span
                        class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Solusi Konstruksi
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed font-light">
                    Menyediakan <span class="text-cyan-300 font-semibold">Layanan Terbaik</span> untuk Kebutuhan Konstruksi
                    Besi dengan Kualitas dan Inovasi
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="400" data-aos-once="true">
                    <a href="#services"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-blue-500/30">
                        <span>Jelajahi Layanan</span>
                        <i class="bi bi-arrow-down ml-2 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#contact"
                        class="group border-2 border-white/40 hover:border-white text-white px-8 py-4 rounded-2xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center bg-white/5">
                        <span>Konsultasi Gratis</span>
                        <i class="bi bi-chat-quote ml-2 group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50/30" id="overview">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-tools mr-2"></i>
                    LAYANAN KAMI
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Solusi Konstruksi Terintegrasi</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Menyediakan beragam layanan konstruksi besi dengan kualitas terbaik dan teknologi terkini
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="bi bi-building text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Konstruksi Struktur Baja</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Desain dan konstruksi struktur baja untuk gedung, pabrik, gudang, dan bangunan industri dengan
                        presisi tinggi.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Rangka atap baja
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Struktur gedung bertingkat
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Kanopi dan shelter
                        </li>
                    </ul>
                    <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold group">
                        <span>Konsultasi Proyek</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 2 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="bi bi-hammer text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Fabrikasi Custom</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Pembuatan komponen besi custom sesuai kebutuhan spesifik dengan teknologi CNC dan fabrikasi presisi.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Tangga dan railing besi
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Partisi dan panel dekoratif
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Furniture dan ornamen besi
                        </li>
                    </ul>
                    <a href="#contact" class="inline-flex items-center text-cyan-600 font-semibold group">
                        <span>Diskusi Kebutuhan</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 3 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="bi bi-wrench-adjustable text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Perbaikan & Maintenance</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Layanan perbaikan, pemeliharaan, dan renovasi struktur besi dengan standar keamanan dan kualitas
                        terjamin.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Perbaikan struktur rusak
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Penggantian komponen
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Perawatan preventif
                        </li>
                    </ul>
                    <a href="#contact" class="inline-flex items-center text-green-600 font-semibold group">
                        <span>Jadwalkan Survey</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 4 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="bi bi-palette text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Finishing & Coating</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Aplikasi finishing dan coating untuk perlindungan korosi serta estetika dengan berbagai pilihan
                        warna dan tekstur.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Cat epoxy dan powder coating
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Galvanizing & zinc coating
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Finishing dekoratif
                        </li>
                    </ul>
                    <a href="#contact" class="inline-flex items-center text-purple-600 font-semibold group">
                        <span>Lihat Katalog</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 5 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div
                        class="bg-gradient-to-br from-orange-500 to-orange-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="bi bi-clipboard-check text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Konsultasi & Desain</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Layanan konsultasi dan desain struktur besi dengan analisis teknis, perhitungan beban, dan solusi
                        optimal.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Analisis struktur
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Desain 3D & rendering
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Perhitungan teknis
                        </li>
                    </ul>
                    <a href="#contact" class="inline-flex items-center text-orange-600 font-semibold group">
                        <span>Konsultasi Gratis</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <!-- Service 6 -->
                <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
                    data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                    <div
                        class="bg-gradient-to-br from-red-500 to-red-600 w-20 h-20 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-500">
                        <i class="bi bi-lightning-charge text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Instalasi Cepat</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Layanan instalasi cepat untuk proyek dengan tenggat waktu ketat tanpa mengorbankan kualitas dan
                        keamanan.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Tim berpengalaman
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Peralatan modern
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="bi bi-check-circle-fill mr-3 text-green-500"></i>
                            Garansi pengerjaan
                        </li>
                    </ul>
                    <a href="#contact" class="inline-flex items-center text-red-600 font-semibold group">
                        <span>Dapatkan Penawaran</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Services Section -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="services">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-0 w-72 h-72 bg-blue-100 rounded-full -translate-x-1/2 -translate-y-1/2 opacity-40 blur-3xl">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-100 rounded-full translate-x-1/2 translate-y-1/2 opacity-30 blur-3xl">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-gear mr-2"></i>
                    DETAIL LAYANAN
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Spesialisasi Konstruksi Besi</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Setiap layanan dikerjakan dengan standar tertinggi dan teknologi terkini
                </p>
            </div>

            <!-- Service 1 Detail -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                        <i class="bi bi-building mr-2"></i>
                        KONSTRUKSI STRUKTUR BAJA
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Bangunan Kokoh & Efisien</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Kami mengkhususkan diri dalam desain dan konstruksi struktur baja untuk berbagai kebutuhan,
                        mulai dari bangunan komersial hingga fasilitas industri. Dengan material berkualitas SNI
                        dan perhitungan struktur yang presisi.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="bg-blue-100 w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                <i class="bi bi-rulers text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Perhitungan Struktur Presisi</h4>
                                <p class="text-gray-600 text-sm">Analisis beban dan perhitungan struktur sesuai standar</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                <i class="bi bi-shield-check text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Material SNI Certified</h4>
                                <p class="text-gray-600 text-sm">Menggunakan material berkualitas dengan sertifikasi resmi
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                <i class="bi bi-clock text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Pengerjaan Efisien</h4>
                                <p class="text-gray-600 text-sm">Waktu pengerjaan optimal tanpa mengorbankan kualitas</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact"
                        class="bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center">
                        <span>Konsultasi Proyek</span>
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
                <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-2 overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/services/struktur-baja.jpg') }}" alt="Konstruksi Struktur Baja"
                            class="w-full h-96 object-cover rounded-xl">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl p-6 shadow-xl border border-gray-100">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600">50+</div>
                            <div class="text-gray-600 text-sm">Proyek Terselesaikan</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2 Detail -->
            <div class="grid lg:grid-cols-2 gap-16 items-center mb-32">
                <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="1000">
                    <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-2xl p-2 overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/services/fabrikasi.jpg') }}" alt="Fabrikasi Custom"
                            class="w-full h-96 object-cover rounded-xl">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl p-6 shadow-xl border border-gray-100">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cyan-600">100%</div>
                            <div class="text-gray-600 text-sm">Custom Sesuai Kebutuhan</div>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-cyan-100 rounded-full text-cyan-700 font-medium mb-6">
                        <i class="bi bi-hammer mr-2"></i>
                        FABRIKASI CUSTOM
                    </div>
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Solusi Sesuai Kebutuhan</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Setiap proyek memiliki karakteristik unik. Kami menyediakan layanan fabrikasi custom
                        dengan pendekatan personal untuk memastikan hasil yang sesuai dengan visi dan kebutuhan klien.
                    </p>
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center">
                            <div class="bg-cyan-100 w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                <i class="bi bi-palette2 text-cyan-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Desain Personal</h4>
                                <p class="text-gray-600 text-sm">Konsep desain sesuai kebutuhan dan preferensi</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-cyan-100 w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                <i class="bi bi-tools text-cyan-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Teknologi CNC</h4>
                                <p class="text-gray-600 text-sm">Presisi tinggi dengan teknologi komputerisasi</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-cyan-100 w-10 h-10 rounded-full flex items-center justify-center mr-4">
                                <i class="bi bi-eye text-cyan-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Quality Control Ketat</h4>
                                <p class="text-gray-600 text-sm">Pemeriksaan kualitas di setiap tahap produksi</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact"
                        class="bg-gradient-to-r from-cyan-500 to-cyan-600 hover:from-cyan-600 hover:to-cyan-700 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center">
                        <span>Diskusi Kebutuhan</span>
                        <i class="bi bi-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden" id="process">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div
                class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIyIiBmaWxsPSIjMzM4MmY2Ii8+PC9zdmc+')]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-diagram-3 mr-2"></i>
                    PROSES KERJA
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Cara Kami Bekerja</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Proses terstruktur yang memastikan kualitas dan kepuasan dalam setiap proyek
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800">
                    <div class="relative mb-8">
                        <div
                            class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <span class="text-white text-2xl font-bold">1</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-1/2 w-full h-1 bg-blue-200 -z-10"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Konsultasi & Analisis</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Diskusi kebutuhan, survey lokasi, dan analisis teknis untuk menentukan solusi terbaik
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="relative mb-8">
                        <div
                            class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <span class="text-white text-2xl font-bold">2</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-1/2 w-full h-1 bg-cyan-200 -z-10"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Desain & Perencanaan</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Pembuatan desain detail, perhitungan struktur, dan perencanaan pengerjaan
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="relative mb-8">
                        <div
                            class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <span class="text-white text-2xl font-bold">3</span>
                        </div>
                        <div class="hidden lg:block absolute top-10 left-1/2 w-full h-1 bg-green-200 -z-10"></div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Produksi & Fabrikasi</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Proses fabrikasi dengan teknologi terkini dan quality control ketat
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="relative mb-8">
                        <div
                            class="bg-gradient-to-br from-purple-500 to-purple-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <span class="text-white text-2xl font-bold">4</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Instalasi & Serah Terima</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Instalasi profesional, testing, dan serah terima proyek dengan dokumentasi lengkap
                    </p>
                </div>
            </div>

            <!-- Process CTA -->
            <div class="text-center mt-16" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <a href="#contact"
                    class="bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center">
                    <i class="bi bi-calendar-check mr-3"></i>
                    <span>Jadwalkan Konsultasi</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50/50" id="why-us">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                        <i class="bi bi-award mr-2"></i>
                        MENGAPA MEMILIH KAMI
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Keunggulan Layanan Kami</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Dengan pengalaman lebih dari 10 tahun, kami telah membangun reputasi sebagai
                        mitra terpercaya dalam industri konstruksi besi.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start group">
                            <div
                                class="bg-blue-100 w-12 h-12 rounded-2xl flex items-center justify-center mr-5 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <i class="bi bi-shield-check text-blue-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">Bersertifikat & Berpengalaman</h4>
                                <p class="text-gray-600">Tim profesional dengan sertifikasi dan pengalaman dalam berbagai
                                    proyek</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div
                                class="bg-cyan-100 w-12 h-12 rounded-2xl flex items-center justify-center mr-5 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <i class="bi bi-tools text-cyan-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">Teknologi Terkini</h4>
                                <p class="text-gray-600">Menggunakan peralatan modern dan teknologi terkini untuk hasil
                                    presisi</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div
                                class="bg-green-100 w-12 h-12 rounded-2xl flex items-center justify-center mr-5 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <i class="bi bi-clock text-green-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">Tepat Waktu</h4>
                                <p class="text-gray-600">Komitmen pada deadline dengan sistem manajemen proyek yang
                                    terstruktur</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div
                                class="bg-purple-100 w-12 h-12 rounded-2xl flex items-center justify-center mr-5 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                <i class="bi bi-headset text-purple-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg mb-2">Layanan 24/7</h4>
                                <p class="text-gray-600">Dukungan teknis dan layanan purna jual yang responsif</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div
                                class="bg-white rounded-2xl p-6 text-center shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                                <div
                                    class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-building text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-xl mb-1">50+</h4>
                                <p class="text-gray-600">Proyek Selesai</p>
                            </div>
                            <div
                                class="bg-white rounded-2xl p-6 text-center shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                                <div
                                    class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-check-circle text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-xl mb-1">100%</h4>
                                <p class="text-gray-600">Klien Puas</p>
                            </div>
                        </div>
                        <div class="space-y-6 mt-12">
                            <div
                                class="bg-white rounded-2xl p-6 text-center shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                                <div
                                    class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-people text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-xl mb-1">15+</h4>
                                <p class="text-gray-600">Tim Ahli</p>
                            </div>
                            <div
                                class="bg-white rounded-2xl p-6 text-center shadow-xl border border-gray-100 group hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                                <div
                                    class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-award text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-xl mb-1">10+</h4>
                                <p class="text-gray-600">Tahun Pengalaman</p>
                            </div>
                        </div>
                    </div>

                    <!-- Background Decoration -->
                    <div
                        class="absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-blue-100 rounded-full blur-3xl opacity-30">
                    </div>
                </div>
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
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Siap Memulai Proyek Anda?</h2>
            <p class="text-blue-100 text-xl mb-10 max-w-2xl mx-auto leading-relaxed">
                Konsultasikan kebutuhan konstruksi besi Anda dengan tim ahli kami dan dapatkan solusi terbaik
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
@endsection

@section('scripts')
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
                const hero = document.querySelector('.relative.min-h-\\[80vh\\]');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });

            // Service cards interaction
            const serviceCards = document.querySelectorAll('.bg-white.rounded-3xl.p-8');

            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Refresh AOS pada event tertentu
            window.addEventListener('load', function() {
                AOS.refresh();
            });

            window.addEventListener('resize', function() {
                setTimeout(() => AOS.refresh(), 500);
            });
        });

        // Counter animation for stats
        function animateCounter(element, target, duration) {
            let start = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    element.textContent = target + '+';
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(start) + '+';
                }
            }, 16);
        }

        // Initialize counters when in viewport
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.textContent);
                    animateCounter(entry.target, target, 2000);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        document.querySelectorAll('.font-bold.text-gray-800.text-xl').forEach(counter => {
            if (counter.textContent.includes('+')) {
                counterObserver.observe(counter);
            }
        });
    </script>

    <style>
        /* Enhanced custom animations untuk services page */
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

        /* Enhanced hover effects untuk service cards */
        .service-card:hover .service-icon {
            transform: scale(1.1);
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

        /* Service process connector lines */
        @media (min-width: 1024px) {
            .process-step:not(:last-child)::after {
                content: '';
                position: absolute;
                top: 40px;
                left: 50%;
                width: 100%;
                height: 2px;
                background: linear-gradient(to right, #3b82f6, #06b6d4);
                z-index: -1;
            }
        }
    </style>
@endsection
