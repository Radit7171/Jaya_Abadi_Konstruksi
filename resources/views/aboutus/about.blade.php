@extends('layouts.app')

@section('title', 'Tentang Kami | Jaya Abadi Konstruksi')

@section('content')
    <!-- Hero Section About -->
    <section
        class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 to-blue-900">
        <!-- Background dengan efek overlay -->
        <div class="absolute inset-0 bg-black/50 z-0"></div>
        <div class="absolute inset-0">
            <img src="{{ asset('images/projects/proyek4.jpg') }}" alt="About Hero"
                class="w-full h-full object-cover transform scale-105 animate-zoom">
        </div>

        <!-- Content Hero -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">
                        Tentang Kami
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Perjalanan, Visi, dan Komitmen Kami dalam Membangun Masa Depan yang Lebih Kuat
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="300" data-aos-once="true">
                    <a href="#history"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center">
                        <span>Sejarah Kami</span>
                        <i class="bi bi-arrow-down ml-2 group-hover:translate-y-1 transition-transform"></i>
                    </a>
                    <a href="#team"
                        class="group border-2 border-white/30 hover:border-white text-white px-8 py-4 rounded-xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center">
                        <span>Tim Kami</span>
                        <i class="bi bi-people ml-2 group-hover:scale-110 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="py-20 bg-white" id="overview">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                    <span class="text-blue-600 font-semibold text-lg mb-2 block">PROFIL PERUSAHAAN</span>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">Jaya Abadi Konstruksi</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Sejak berdiri pada tahun 2013, <strong>Jaya Abadi Konstruksi</strong> telah menjadi mitra terpercaya
                        dalam berbagai proyek konstruksi besi di Indonesia. Dengan komitmen terhadap kualitas,
                        ketepatan waktu, dan inovasi, kami telah menyelesaikan lebih dari 50 proyek dengan tingkat
                        kepuasan klien 100%.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Spesialisasi kami meliputi konstruksi struktur baja, fabrikasi custom, perbaikan dan maintenance,
                        serta solusi konstruksi besi lainnya. Setiap proyek dikerjakan dengan standar tertinggi
                        menggunakan material berkualitas dan teknologi terkini.
                    </p>
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-3">
                                <i class="bi bi-award text-2xl text-blue-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800">Bersertifikat</h4>
                            <p class="text-gray-600 text-sm">Standar SNI</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-3">
                                <i class="bi bi-shield-check text-2xl text-blue-600"></i>
                            </div>
                            <h4 class="font-bold text-gray-800">Terjamin</h4>
                            <p class="text-gray-600 text-sm">Kualitas Terbaik</p>
                        </div>
                    </div>
                </div>
                <div class="relative" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div
                                class="bg-gray-100 rounded-2xl p-6 text-center group hover:bg-blue-50 transition-all duration-300">
                                <i class="bi bi-building text-4xl text-blue-600 mb-3"></i>
                                <h4 class="font-bold text-gray-800">50+</h4>
                                <p class="text-gray-600 text-sm">Proyek Selesai</p>
                            </div>
                            <div
                                class="bg-gray-100 rounded-2xl p-6 text-center group hover:bg-blue-50 transition-all duration-300">
                                <i class="bi bi-people text-4xl text-blue-600 mb-3"></i>
                                <h4 class="font-bold text-gray-800">15+</h4>
                                <p class="text-gray-600 text-sm">Tim Ahli</p>
                            </div>
                        </div>
                        <div class="space-y-4 mt-8">
                            <div
                                class="bg-gray-100 rounded-2xl p-6 text-center group hover:bg-blue-50 transition-all duration-300">
                                <i class="bi bi-calendar-check text-4xl text-blue-600 mb-3"></i>
                                <h4 class="font-bold text-gray-800">10+</h4>
                                <p class="text-gray-600 text-sm">Tahun Pengalaman</p>
                            </div>
                            <div
                                class="bg-gray-100 rounded-2xl p-6 text-center group hover:bg-blue-50 transition-all duration-300">
                                <i class="bi bi-star text-4xl text-blue-600 mb-3"></i>
                                <h4 class="font-bold text-gray-800">100%</h4>
                                <p class="text-gray-600 text-sm">Klien Puas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company History -->
    <section class="py-20 bg-gray-50" id="history">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <span class="text-blue-600 font-semibold text-lg mb-2 block">PERJALANAN KAMI</span>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Sejarah Perusahaan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Perjalanan panjang kami dalam membangun kepercayaan dan kualitas
                </p>
            </div>

            <div class="relative" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <!-- Timeline -->
                <div class="space-y-12">
                    <!-- Timeline Item 1 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 text-right" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">2013</h3>
                                <h4 class="text-xl font-semibold text-blue-600 mb-3">Pendirian Perusahaan</h4>
                                <p class="text-gray-600">
                                    Jaya Abadi Konstruksi didirikan oleh Maryanto dengan fokus pada jasa konstruksi
                                    dan fabrikasi besi. Dimulai dengan tim kecil dan proyek-proyek lokal.
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block relative" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                            <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="absolute top-8 left-1/2 w-0.5 h-24 bg-blue-600/30 -translate-x-1/2"></div>
                        </div>
                        <div class="md:w-1/2" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                            <div class="bg-gray-100 rounded-2xl p-6 opacity-70">
                                <img src="{{ asset('images/aboutus/proyek.jpg') }}" alt="2013"
                                    class="w-full h-48 object-cover rounded-xl mb-4">
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 2 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 order-2 md:order-1" data-aos="fade-right"
                            data-aos-anchor-placement="top-bottom">
                            <div class="bg-gray-100 rounded-2xl p-6 opacity-70">
                                <img src="{{ asset('images/aboutus/proyek2.jpg') }}" alt="2015"
                                    class="w-full h-48 object-cover rounded-xl mb-4">
                            </div>
                        </div>
                        <div class="hidden md:block relative order-2" data-aos="zoom-in"
                            data-aos-anchor-placement="top-bottom">
                            <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="absolute top-8 left-1/2 w-0.5 h-24 bg-blue-600/30 -translate-x-1/2"></div>
                        </div>
                        <div class="md:w-1/2 order-1 md:order-3 text-left" data-aos="fade-up"
                            data-aos-anchor-placement="top-bottom">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">2015</h3>
                                <h4 class="text-xl font-semibold text-blue-600 mb-3">Ekspansi Layanan</h4>
                                <p class="text-gray-600">
                                    Memperluas layanan ke fabrikasi custom dan perbaikan struktur.
                                    Mulai menggunakan teknologi presisi yang lebih tinggi.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 text-right" data-aos="fade-right" data-aos-anchor-placement="top-bottom">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">2018</h3>
                                <h4 class="text-xl font-semibold text-blue-600 mb-3">Modernisasi Peralatan</h4>
                                <p class="text-gray-600">
                                    Investasi besar dalam peralatan modern dan pelatihan tim.
                                    Mencapai milestone 25 proyek berhasil diselesaikan.
                                </p>
                            </div>
                        </div>
                        <div class="hidden md:block relative" data-aos="zoom-in" data-aos-anchor-placement="top-bottom">
                            <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg"></div>
                            <div class="absolute top-8 left-1/2 w-0.5 h-24 bg-blue-600/30 -translate-x-1/2"></div>
                        </div>
                        <div class="md:w-1/2" data-aos="fade-down" data-aos-anchor-placement="top-bottom">
                            <div class="bg-gray-100 rounded-2xl p-6 opacity-70">
                                <img src="{{ asset('images/aboutus/proyek3.jpg') }}" alt="2018"
                                    class="w-full h-48 object-cover rounded-xl mb-4">
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="flex flex-col md:flex-row items-center gap-8">
                        <div class="md:w-1/2 order-2 md:order-1" data-aos="fade-right"
                            data-aos-anchor-placement="top-bottom">
                            <div class="bg-gray-100 rounded-2xl p-6 opacity-70">
                                <img src="{{ asset('images/aboutus/proyek4.jpg') }}" alt="2023"
                                    class="w-full h-48 object-cover rounded-xl mb-4">
                            </div>
                        </div>
                        <div class="hidden md:block relative order-2" data-aos="zoom-in"
                            data-aos-anchor-placement="top-bottom">
                            <div class="w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg"></div>
                        </div>
                        <div class="md:w-1/2 order-1 md:order-3 text-left" data-aos="fade-down"
                            data-aos-anchor-placement="top-bottom">
                            <div class="bg-white rounded-2xl p-6 shadow-lg">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2">2023 - Sekarang</h3>
                                <h4 class="text-xl font-semibold text-blue-600 mb-3">Era Digital & Inovasi</h4>
                                <p class="text-gray-600">
                                    Menerapkan teknologi digital dalam operasional, mencapai 50+ proyek sukses,
                                    dan terus berinovasi dalam layanan konstruksi besi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-20 bg-white" id="vision-mission">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Vision -->
                <div class="bg-gradient-to-br from-blue-600 to-cyan-500 rounded-2xl p-8 text-white" data-aos="fade-right"
                    data-aos-anchor-placement="top-bottom">
                    <div class="flex items-center mb-6">
                        <div class="bg-white/20 w-12 h-12 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-eye text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold">Visi Kami</h3>
                    </div>
                    <p class="text-blue-100 text-lg leading-relaxed mb-6">
                        Menjadi perusahaan konstruksi besi terdepan yang diakui secara nasional
                        dalam hal kualitas, inovasi, dan keandalan, serta menjadi mitra pilihan
                        utama untuk solusi konstruksi berkelanjutan.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="bi bi-check-circle-fill mr-3 text-cyan-300"></i>
                            <span>Terdepan dalam inovasi konstruksi</span>
                        </div>
                        <div class="flex items-center">
                            <i class="bi bi-check-circle-fill mr-3 text-cyan-300"></i>
                            <span>Standar kualitas tertinggi</span>
                        </div>
                        <div class="flex items-center">
                            <i class="bi bi-check-circle-fill mr-3 text-cyan-300"></i>
                            <span>Berorientasi pada kepuasan pelanggan</span>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="bg-gray-50 rounded-2xl p-8" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div class="flex items-center mb-6">
                        <div class="bg-blue-100 w-12 h-12 rounded-xl flex items-center justify-center mr-4">
                            <i class="bi bi-bullseye text-2xl text-blue-600"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-800">Misi Kami</h3>
                    </div>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-lg mr-4">
                                <i class="bi bi-1-circle-fill text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Memberikan Layanan Terbaik</h4>
                                <p class="text-gray-600">
                                    Menyediakan solusi konstruksi besi yang inovatif dan berkualitas tinggi
                                    dengan pelayanan yang profesional.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-lg mr-4">
                                <i class="bi bi-2-circle-fill text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Mengutamakan Keselamatan</h4>
                                <p class="text-gray-600">
                                    Memastikan standar keselamatan kerja yang tertinggi dalam setiap proyek
                                    dan operasional perusahaan.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-lg mr-4">
                                <i class="bi bi-3-circle-fill text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-2">Berkembang Bersama</h4>
                                <p class="text-gray-600">
                                    Membangun kemitraan jangka panjang dengan klien, pemasok, dan komunitas
                                    untuk pertumbuhan bersama yang berkelanjutan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50" id="team">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Header Section -->
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-semibold text-lg mb-2 block">TIM KAMI</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Bertemu Dengan Tim Ahli Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Didukung oleh tim profesional yang berdedikasi dan berpengalaman dalam bidangnya masing-masing.
            </p>
        </div>

        <!-- Team Card (CENTER FIX) -->
        <div class="flex justify-center">
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden group hover:shadow-2xl transition-all duration-500 w-full max-w-sm"
                data-aos="fade-up">

                <div class="relative overflow-hidden">
                    <img src="{{ asset('images/founder.jpg') }}" alt="Maryanto - Founder"
                        class="w-full h-72 object-cover group-hover:scale-110 transition-transform duration-700">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">Maryanto</h3>
                    <p class="text-blue-600 font-semibold mb-3">Founder & Project Manager</p>
                    <p class="text-gray-600 text-sm mb-4">
                        Dengan pengalaman lebih dari 10 tahun di industri konstruksi besi,
                        Maryanto memimpin tim dengan prinsip kualitas dan ketelitian.
                    </p>

                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors">
                            <i class="bi bi-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Stats Section (CENTER FIX — NO EMPTY SPACE) -->
        <div class="flex flex-wrap justify-center gap-10 mt-16">

            <div class="text-center" data-aos="fade-up">
                <div class="bg-blue-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-tools text-2xl text-blue-600"></i>
                </div>
                <h4 class="font-bold text-gray-800 text-xl">15+</h4>
                <p class="text-gray-600 text-sm">Teknisi Ahli</p>
            </div>

            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-blue-100 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-3">
                    <i class="bi bi-gear text-2xl text-blue-600"></i>
                </div>
                <h4 class="font-bold text-gray-800 text-xl">8+</h4>
                <p class="text-gray-600 text-sm">Engineer</p>
            </div>

        </div>

    </div>
</section>


    <!-- Values Section (Reused from home with enhancements) -->
    <section class="py-20 bg-gradient-to-br from-gray-900 to-blue-900 text-white" id="values">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                <span class="text-cyan-400 font-semibold text-lg mb-2 block">NILAI KAMI</span>
                <h2 class="text-4xl font-bold mb-4">Prinsip yang Kami Pegang</h2>
                <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                    Fondasi yang membangun kepercayaan dan kesuksesan dalam setiap proyek
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20">
                        <i class="bi bi-shield-check text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Kualitas</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Tidak ada kompromi untuk kualitas. Setiap detail diperhatikan dengan ketelitian tinggi.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-delay="100">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20">
                        <i class="bi bi-clock text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Ketepatan Waktu</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Komitmen pada deadline tanpa mengorbankan kualitas pekerjaan.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-delay="200">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20">
                        <i class="bi bi-lightbulb text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Inovasi</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Terus mengadopsi teknologi dan metode terbaru untuk hasil yang lebih baik.
                    </p>
                </div>
                <div class="text-center group" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                    data-aos-delay="300">
                    <div
                        class="bg-white/10 backdrop-blur-sm w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20">
                        <i class="bi bi-people text-3xl text-cyan-400"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Kemitraan</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Membangun hubungan jangka panjang berdasarkan kepercayaan dan mutual benefit.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
        <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Tertarik Bekerja Sama?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Mari berdiskusi tentang proyek konstruksi besi Anda dan bagaimana kami dapat membantu mewujudkannya
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}#quote"
                    class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center"
                    data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
                    <i class="bi bi-chat-quote mr-2"></i>
                    Konsultasi Gratis
                </a>
                <a href="https://wa.me/6287817695973"
                    class="border-2 border-white text-white hover:bg-white/10 px-6 py-3 rounded-xl font-semibold backdrop-blur-sm transition-all duration-300 flex items-center justify-center"
                    data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
                    <i class="bi bi-whatsapp mr-2"></i>
                    WhatsApp Kami
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        // Inisialisasi AOS dengan konfigurasi untuk animasi masuk dan keluar
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS dengan pengaturan untuk animasi masuk dan keluar
            AOS.init({
                duration: 800,
                easing: 'ease-in-out',
                once: false,
                mirror: true,
                offset: 100,
                anchorPlacement: 'top-bottom',
            });

            // Smooth scroll untuk anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Refresh AOS pada event tertentu
            window.addEventListener('load', AOS.refresh);
            window.addEventListener('resize', AOS.refresh);
        });

        // Timeline animation on scroll
        const timelineItems = document.querySelectorAll('.flex.flex-col.md\\:flex-row.items-center');

        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        timelineItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(30px)';
            item.style.transition = `all 0.6s ease ${index * 0.2}s`;
            timelineObserver.observe(item);
        });
    </script>

    <style>
        /* Custom animations untuk about page */
        @keyframes zoom {
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

        .animate-zoom {
            animation: zoom 20s ease-in-out infinite;
        }

        /* Timeline custom styles */
        .timeline-line {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            background: linear-gradient(to bottom, #3b82f6, #06b6d4);
            height: 100%;
        }

        /* Hover effects untuk team cards */
        .team-card:hover .team-overlay {
            opacity: 1;
        }

        .team-card:hover .team-info {
            transform: translateY(0);
        }

        /* Custom scroll behavior */
        html {
            scroll-behavior: smooth;
        }

        /* Memastikan AOS animasi smooth */
        [data-aos] {
            pointer-events: none;
        }

        [data-aos].aos-animate {
            pointer-events: auto;
        }
    </style>
@endsection
