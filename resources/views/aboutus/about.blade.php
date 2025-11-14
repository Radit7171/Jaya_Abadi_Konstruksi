@extends('layouts.app')

@section('title', 'Tentang Kami | Jaya Abadi Konstruksi')

@section('content')
    <!-- Enhanced Hero Section -->
    <section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-black/40 z-0"></div>
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-10"></div>
            <img src="{{ asset('images/projects/proyek4.jpg') }}" alt="About Hero"
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
                    <span class="text-cyan-300 font-medium">Tentang Jaya Abadi Konstruksi</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Membangun Masa Depan
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed font-light">
                    Perjalanan, Visi, dan Komitmen Kami dalam Membangun <span class="text-cyan-300 font-semibold">Infrastruktur yang Berkelanjutan</span>
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="400" data-aos-once="true">
                    <a href="#history"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-blue-500/30">
                        <span>Jelajahi Perjalanan Kami</span>
                        <i class="bi bi-arrow-down ml-2 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#team"
                        class="group border-2 border-white/40 hover:border-white text-white px-8 py-4 rounded-2xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center bg-white/5">
                        <span>Tim Profesional</span>
                        <i class="bi bi-people ml-2 group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Company Overview -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50/30" id="overview">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                        <i class="bi bi-building mr-2"></i>
                        PROFIL PERUSAHAAN
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6 leading-tight">
                        Inovasi dalam <span class="text-blue-600">Setiap Struktur</span>
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Sejak <strong class="text-blue-700">2013</strong>, <strong>Jaya Abadi Konstruksi</strong> telah menjadi mitra terpercaya
                        dalam berbagai proyek konstruksi besi di Indonesia. Dengan komitmen terhadap kualitas,
                        ketepatan waktu, dan inovasi, kami telah menyelesaikan lebih dari <strong class="text-cyan-600">50 proyek</strong> dengan tingkat
                        kepuasan klien <strong class="text-green-600">100%</strong>.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Spesialisasi kami meliputi konstruksi struktur baja, fabrikasi custom, perbaikan dan maintenance,
                        serta solusi konstruksi besi lainnya. Setiap proyek dikerjakan dengan standar tertinggi
                        menggunakan material berkualitas dan teknologi terkini.
                    </p>

                    <!-- Feature Tags -->
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium flex items-center">
                            <i class="bi bi-check-circle-fill mr-2 text-green-500"></i> Bersertifikat SNI
                        </span>
                        <span class="px-4 py-2 bg-cyan-50 text-cyan-700 rounded-full text-sm font-medium flex items-center">
                            <i class="bi bi-check-circle-fill mr-2 text-green-500"></i> Material Berkualitas
                        </span>
                        <span class="px-4 py-2 bg-green-50 text-green-700 rounded-full text-sm font-medium flex items-center">
                            <i class="bi bi-check-circle-fill mr-2 text-green-500"></i> Garansi Pengerjaan
                        </span>
                    </div>

                    <a href="#contact" class="inline-flex items-center text-blue-600 font-semibold group">
                        <span>Hubungi Kami untuk Konsultasi</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <!-- Floating Stats Cards -->
                    <div class="grid grid-cols-2 gap-6 relative">
                        <div class="space-y-6">
                            <div class="bg-white rounded-2xl p-6 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200 hover:-translate-y-2">
                                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-building text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-2xl mb-1">50+</h4>
                                <p class="text-gray-600 text-sm">Proyek Selesai</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-cyan-200 hover:-translate-y-2">
                                <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-people text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-2xl mb-1">15+</h4>
                                <p class="text-gray-600 text-sm">Tim Ahli</p>
                            </div>
                        </div>
                        <div class="space-y-6 mt-8">
                            <div class="bg-white rounded-2xl p-6 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-green-200 hover:-translate-y-2">
                                <div class="bg-gradient-to-br from-green-500 to-green-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-calendar-check text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-2xl mb-1">10+</h4>
                                <p class="text-gray-600 text-sm">Tahun Pengalaman</p>
                            </div>
                            <div class="bg-white rounded-2xl p-6 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-200 hover:-translate-y-2">
                                <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                    <i class="bi bi-star text-2xl text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-2xl mb-1">100%</h4>
                                <p class="text-gray-600 text-sm">Klien Puas</p>
                            </div>
                        </div>

                        <!-- Background Decoration -->
                        <div class="absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-blue-100 rounded-full blur-3xl opacity-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Company History -->
    <section class="py-24 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="history">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-100 rounded-full -translate-x-1/2 -translate-y-1/2 opacity-40 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-100 rounded-full translate-x-1/2 translate-y-1/2 opacity-30 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-clock-history mr-2"></i>
                    PERJALANAN KAMI
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Sejarah Perusahaan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Perjalanan panjang kami dalam membangun kepercayaan dan kualitas sejak 2013
                </p>
            </div>

            <!-- Enhanced Timeline -->
            <div class="relative" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-blue-500 to-cyan-500 hidden md:block"></div>

                <!-- Timeline Items -->
                <div class="space-y-16">
                    <!-- Timeline Item 1 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 group">
                        <div class="md:w-1/2 md:pr-12 md:text-right" data-aos="fade-right" data-aos-duration="800">
                            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 group-hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                                <div class="relative z-10">
                                    <div class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-4">
                                        2013
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Pendirian Perusahaan</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        Jaya Abadi Konstruksi didirikan oleh Maryanto dengan fokus pada jasa konstruksi
                                        dan fabrikasi besi. Dimulai dengan tim kecil dan proyek-proyek lokal.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block relative" data-aos="zoom-in" data-aos-duration="800">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full border-4 border-white shadow-xl flex items-center justify-center">
                                <i class="bi bi-flag text-white"></i>
                            </div>
                        </div>
                        <div class="md:w-1/2 md:pl-12" data-aos="fade-left" data-aos-duration="800">
                            <div class="bg-gray-100 rounded-2xl p-2 overflow-hidden group-hover:shadow-lg transition-all duration-500">
                                <img src="{{ asset('images/aboutus/proyek.jpg') }}" alt="2013"
                                    class="w-full h-64 object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 group">
                        <div class="md:w-1/2 order-2 md:order-1 md:pr-12" data-aos="fade-right" data-aos-duration="800">
                            <div class="bg-gray-100 rounded-2xl p-2 overflow-hidden group-hover:shadow-lg transition-all duration-500">
                                <img src="{{ asset('images/aboutus/proyek2.jpg') }}" alt="2015"
                                    class="w-full h-64 object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                        <div class="hidden md:block relative order-2" data-aos="zoom-in" data-aos-duration="800">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full border-4 border-white shadow-xl flex items-center justify-center">
                                <i class="bi bi-gear text-white"></i>
                            </div>
                        </div>
                        <div class="md:w-1/2 order-1 md:order-3 md:pl-12 md:text-left" data-aos="fade-left" data-aos-duration="800">
                            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 group-hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-24 h-24 bg-cyan-500/5 rounded-full -translate-y-1/2 -translate-x-1/2"></div>
                                <div class="relative z-10">
                                    <div class="inline-flex items-center px-3 py-1 bg-cyan-100 text-cyan-700 rounded-full text-sm font-medium mb-4">
                                        2015
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Ekspansi Layanan</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        Memperluas layanan ke fabrikasi custom dan perbaikan struktur.
                                        Mulai menggunakan teknologi presisi yang lebih tinggi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 group">
                        <div class="md:w-1/2 md:pr-12 md:text-right" data-aos="fade-right" data-aos-duration="800">
                            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 group-hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-500/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                                <div class="relative z-10">
                                    <div class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-4">
                                        2018
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Modernisasi Peralatan</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        Investasi besar dalam peralatan modern dan pelatihan tim.
                                        Mencapai milestone 25 proyek berhasil diselesaikan.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block relative" data-aos="zoom-in" data-aos-duration="800">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full border-4 border-white shadow-xl flex items-center justify-center">
                                <i class="bi bi-tools text-white"></i>
                            </div>
                        </div>
                        <div class="md:w-1/2 md:pl-12" data-aos="fade-left" data-aos-duration="800">
                            <div class="bg-gray-100 rounded-2xl p-2 overflow-hidden group-hover:shadow-lg transition-all duration-500">
                                <img src="{{ asset('images/aboutus/proyek3.jpg') }}" alt="2018"
                                    class="w-full h-64 object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 group">
                        <div class="md:w-1/2 order-2 md:order-1 md:pr-12" data-aos="fade-right" data-aos-duration="800">
                            <div class="bg-gray-100 rounded-2xl p-2 overflow-hidden group-hover:shadow-lg transition-all duration-500">
                                <img src="{{ asset('images/aboutus/proyek4.jpg') }}" alt="2023"
                                    class="w-full h-64 object-cover rounded-xl transform group-hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                        <div class="hidden md:block relative order-2" data-aos="zoom-in" data-aos-duration="800">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-cyan-500 rounded-full border-4 border-white shadow-xl flex items-center justify-center">
                                <i class="bi bi-cpu text-white"></i>
                            </div>
                        </div>
                        <div class="md:w-1/2 order-1 md:order-3 md:pl-12 md:text-left" data-aos="fade-left" data-aos-duration="800">
                            <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 group-hover:shadow-2xl transition-all duration-500 relative overflow-hidden">
                                <div class="absolute top-0 left-0 w-24 h-24 bg-cyan-500/5 rounded-full -translate-y-1/2 -translate-x-1/2"></div>
                                <div class="relative z-10">
                                    <div class="inline-flex items-center px-3 py-1 bg-gradient-to-r from-blue-600 to-cyan-500 text-white rounded-full text-sm font-medium mb-4">
                                        2023 - Sekarang
                                    </div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Era Digital & Inovasi</h3>
                                    <p class="text-gray-600 leading-relaxed">
                                        Menerapkan teknologi digital dalam operasional, mencapai 50+ proyek sukses,
                                        dan terus berinovasi dalam layanan konstruksi besi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Vision & Mission -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden" id="vision-mission">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIyIiBmaWxsPSIjMzM4MmY2Ii8+PC9zdmc+')]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Vision -->
                <div class="bg-gradient-to-br from-blue-600 via-blue-700 to-cyan-600 rounded-3xl p-10 text-white shadow-2xl relative overflow-hidden" data-aos="fade-right" data-aos-duration="1000">
                    <!-- Background Elements -->
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-cyan-400/10 rounded-full translate-y-1/2 -translate-x-1/2"></div>

                    <div class="relative z-10">
                        <div class="flex items-center mb-8">
                            <div class="bg-white/20 w-14 h-14 rounded-2xl flex items-center justify-center mr-5 backdrop-blur-sm">
                                <i class="bi bi-eye text-3xl text-cyan-300"></i>
                            </div>
                            <h3 class="text-4xl font-bold">Visi Kami</h3>
                        </div>
                        <p class="text-blue-100 text-lg leading-relaxed mb-8 font-light">
                            Menjadi perusahaan konstruksi besi terdepan yang diakui secara nasional
                            dalam hal kualitas, inovasi, dan keandalan, serta menjadi mitra pilihan
                            utama untuk solusi konstruksi berkelanjutan.
                        </p>
                        <div class="space-y-4">
                            <div class="flex items-center bg-white/10 p-4 rounded-2xl backdrop-blur-sm">
                                <i class="bi bi-check-circle-fill mr-4 text-cyan-300 text-xl"></i>
                                <span class="font-medium">Terdepan dalam inovasi konstruksi</span>
                            </div>
                            <div class="flex items-center bg-white/10 p-4 rounded-2xl backdrop-blur-sm">
                                <i class="bi bi-check-circle-fill mr-4 text-cyan-300 text-xl"></i>
                                <span class="font-medium">Standar kualitas tertinggi</span>
                            </div>
                            <div class="flex items-center bg-white/10 p-4 rounded-2xl backdrop-blur-sm">
                                <i class="bi bi-check-circle-fill mr-4 text-cyan-300 text-xl"></i>
                                <span class="font-medium">Berorientasi pada kepuasan pelanggan</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="bg-white rounded-3xl p-10 shadow-2xl border border-gray-100 relative overflow-hidden" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <!-- Background Elements -->
                    <div class="absolute top-0 right-0 w-48 h-48 bg-blue-50 rounded-full -translate-y-1/2 translate-x-1/2"></div>

                    <div class="relative z-10">
                        <div class="flex items-center mb-8">
                            <div class="bg-gradient-to-br from-blue-500 to-cyan-500 w-14 h-14 rounded-2xl flex items-center justify-center mr-5 shadow-lg">
                                <i class="bi bi-bullseye text-2xl text-white"></i>
                            </div>
                            <h3 class="text-4xl font-bold text-gray-800">Misi Kami</h3>
                        </div>
                        <div class="space-y-6">
                            <div class="flex items-start group hover:bg-blue-50 p-4 rounded-2xl transition-all duration-300">
                                <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-12 h-12 rounded-2xl flex items-center justify-center mr-5 shadow-md flex-shrink-0">
                                    <span class="text-white font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Memberikan Layanan Terbaik</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Menyediakan solusi konstruksi besi yang inovatif dan berkualitas tinggi
                                        dengan pelayanan yang profesional.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start group hover:bg-blue-50 p-4 rounded-2xl transition-all duration-300">
                                <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-12 h-12 rounded-2xl flex items-center justify-center mr-5 shadow-md flex-shrink-0">
                                    <span class="text-white font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Mengutamakan Keselamatan</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Memastikan standar keselamatan kerja yang tertinggi dalam setiap proyek
                                        dan operasional perusahaan.
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start group hover:bg-blue-50 p-4 rounded-2xl transition-all duration-300">
                                <div class="bg-gradient-to-br from-green-500 to-green-600 w-12 h-12 rounded-2xl flex items-center justify-center mr-5 shadow-md flex-shrink-0">
                                    <span class="text-white font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 mb-2 text-lg">Berkembang Bersama</h4>
                                    <p class="text-gray-600 leading-relaxed">
                                        Membangun kemitraan jangka panjang dengan klien, pemasok, dan komunitas
                                        untuk pertumbuhan bersama yang berkelanjutan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Team Section -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50/50" id="team">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Header Section -->
            <div class="text-center mb-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-people mr-2"></i>
                    TIM KAMI
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Bertemu Dengan Tim Ahli Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Didukung oleh tim profesional yang berdedikasi dan berpengalaman dalam bidangnya masing-masing.
                </p>
            </div>

            <!-- Team Card -->
            <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="bg-white rounded-3xl shadow-xl overflow-hidden group hover:shadow-2xl transition-all duration-500 w-full max-w-md border border-gray-100">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/founder.jpg') }}" alt="Maryanto - Founder"
                            class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end">
                            <div class="p-6 text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-sm opacity-90">Lebih dari 10 tahun pengalaman dalam industri konstruksi besi</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Maryanto</h3>
                        <p class="text-blue-600 font-semibold mb-4 text-lg">Founder & Project Manager</p>
                        <p class="text-gray-600 leading-relaxed mb-6">
                            Dengan pengalaman lebih dari 10 tahun di industri konstruksi besi,
                            Maryanto memimpin tim dengan prinsip kualitas dan ketelitian.
                        </p>

                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                                <i class="bi bi-linkedin"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-cyan-100 text-cyan-600 rounded-full flex items-center justify-center hover:bg-cyan-600 hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                                <i class="bi bi-envelope"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center hover:bg-green-600 hover:text-white transition-all duration-300 transform hover:-translate-y-1">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="flex flex-wrap justify-center gap-12 mt-20">
                <div class="text-center" data-aos="fade-up" data-aos-duration="800">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="bi bi-tools text-2xl text-white"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 text-2xl">15+</h4>
                    <p class="text-gray-600">Teknisi Ahli</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="bi bi-gear text-2xl text-white"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 text-2xl">8+</h4>
                    <p class="text-gray-600">Engineer</p>
                </div>

                <div class="text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-green-500 to-green-600 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <i class="bi bi-award text-2xl text-white"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 text-2xl">12+</h4>
                    <p class="text-gray-600">Sertifikasi</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Enhanced Values Section -->
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
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Prinsip yang Kami Pegang</h2>
                <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                    Fondasi yang membangun kepercayaan dan kesuksesan dalam setiap proyek
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-500 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-110">
                        <i class="bi bi-shield-check text-4xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Kualitas</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Tidak ada kompromi untuk kualitas. Setiap detail diperhatikan dengan ketelitian tinggi.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-500 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-110">
                        <i class="bi bi-clock text-4xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Ketepatan Waktu</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Komitmen pada deadline tanpa mengorbankan kualitas pekerjaan.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-500 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-110">
                        <i class="bi bi-lightbulb text-4xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Inovasi</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Terus mengadopsi teknologi dan metode terbaru untuk hasil yang lebih baik.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-500 border border-white/20 group-hover:border-cyan-400/50 group-hover:scale-110">
                        <i class="bi bi-people text-4xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Kemitraan</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Membangun hubungan jangka panjang berdasarkan kepercayaan dan mutual benefit.
                    </p>
                </div>
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
                Mari berdiskusi tentang proyek konstruksi besi Anda dan bagaimana kami dapat membantu mewujudkannya dengan standar tertinggi
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
                    <i class="bi bi-arrow-up-right ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
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

            // Intersection Observer untuk timeline items
            const timelineItems = document.querySelectorAll('.flex.flex-col.md\\:flex-row.items-center.gap-8.group');

            const timelineObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, {
                threshold: 0.2,
                rootMargin: '0px 0px -100px 0px'
            });

            timelineItems.forEach(item => {
                timelineObserver.observe(item);
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
        }, { threshold: 0.5 });

        document.querySelectorAll('.font-bold.text-gray-800.text-2xl').forEach(counter => {
            if (counter.textContent.includes('+')) {
                counterObserver.observe(counter);
            }
        });
    </script>

    <style>
        /* Enhanced custom animations untuk about page */
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

        /* Enhanced timeline custom styles */
        .timeline-line {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            background: linear-gradient(to bottom, #3b82f6, #06b6d4, #3b82f6);
            height: 100%;
            background-size: 100% 200%;
            animation: gradient-flow 3s ease infinite;
        }

        @keyframes gradient-flow {
            0%, 100% {
                background-position: 0% 0%;
            }
            50% {
                background-position: 0% 100%;
            }
        }

        /* Enhanced hover effects untuk team cards */
        .team-card:hover .team-overlay {
            opacity: 1;
        }

        .team-card:hover .team-info {
            transform: translateY(0);
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
    </style>
@endsection
