@extends('layouts.app')

@section('title', 'Layanan Kami | Jaya Abadi Konstruksi')

@section('content')
    <!-- Slimmer Hero Section -->
    <section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Animated Background Particles -->
        <div id="particles-js" class="absolute inset-0 z-0"></div>
        <div class="absolute inset-0 bg-black/40 z-0"></div>
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-10"></div>
            <img src="{{ asset('images/projects/proyek3.jpg') }}" alt="Services Hero"
                class="w-full h-full object-cover transform scale-110 animate-slow-zoom">
        </div>

        <!-- Floating Elements - Smaller -->
        <div class="absolute top-16 left-8 w-4 h-4 bg-cyan-400 rounded-full opacity-70 animate-float"></div>
        <div class="absolute bottom-24 right-12 w-6 h-6 bg-blue-500 rounded-full opacity-50 animate-float-delayed"></div>
        <div class="absolute top-1/3 right-1/4 w-5 h-5 bg-white rounded-full opacity-30 animate-pulse-slow"></div>

        <!-- Content Hero - Slimmer -->
        <div class="relative z-20 max-w-6xl mx-auto px-4 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <div class="inline-block mb-3 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <span class="text-cyan-300 font-medium text-sm">Layanan Profesional</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                    <span
                        class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Solusi Konstruksi
                    </span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-6 max-w-2xl mx-auto leading-relaxed font-light">
                    Menyediakan <span class="text-cyan-300 font-semibold">Layanan Terbaik</span> untuk Kebutuhan Konstruksi
                    Besi dengan Kualitas dan Inovasi
                </p>
                <div class="flex flex-col sm:flex-row gap-3 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="300" data-aos-once="true">
                    <a href="#services"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center text-sm shadow-blue-500/20 hover:shadow-blue-500/30">
                        <span>Jelajahi Layanan</span>
                        <i class="bi bi-arrow-down ml-1 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                    <a href="#contact"
                        class="group border border-white/40 hover:border-white text-white px-6 py-3 rounded-xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center text-sm bg-white/5">
                        <span>Konsultasi Gratis</span>
                        <i class="bi bi-chat-quote ml-1 group-hover:scale-105 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Services Overview -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50/30" id="overview">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-tools mr-1"></i>
                    LAYANAN KAMI
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Solusi Konstruksi Terintegrasi</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Menyediakan beragam layanan konstruksi besi dengan kualitas terbaik dan teknologi terkini
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ([
            [
                'icon' => 'bi-building',
                'title' => 'Konstruksi Struktur Baja',
                'description' => 'Desain dan konstruksi struktur baja untuk gedung, pabrik, gudang, dan bangunan industri dengan presisi tinggi.',
                'features' => ['Rangka atap baja', 'Struktur gedung bertingkat', 'Kanopi dan shelter'],
                'color' => 'blue',
            ],
            [
                'icon' => 'bi-hammer',
                'title' => 'Fabrikasi Custom',
                'description' => 'Pembuatan komponen besi custom sesuai kebutuhan spesifik dengan fabrikasi presisi.',
                'features' => ['Tangga dan railing besi', 'Partisi dan panel dekoratif', 'Furniture dan ornamen besi'],
                'color' => 'cyan',
            ],
            [
                'icon' => 'bi-wrench-adjustable',
                'title' => 'Perbaikan & Maintenance',
                'description' => 'Layanan perbaikan, pemeliharaan, dan renovasi struktur besi dengan standar keamanan dan kualitas terjamin.',
                'features' => ['Perbaikan struktur rusak', 'Penggantian komponen', 'Perawatan preventif'],
                'color' => 'green',
            ],
            [
                'icon' => 'bi-palette',
                'title' => 'Finishing & Coating',
                'description' => 'Aplikasi finishing dan coating untuk perlindungan korosi serta estetika dengan berbagai pilihan warna dan tekstur.',
                'features' => ['Cat epoxy dan powder coating', 'Galvanizing & zinc coating', 'Finishing dekoratif'],
                'color' => 'purple',
            ],
            [
                'icon' => 'bi-clipboard-check',
                'title' => 'Konsultasi & Desain',
                'description' => 'Layanan konsultasi dan desain struktur besi dengan analisis teknis, perhitungan beban, dan solusi optimal.',
                'features' => ['Analisis struktur', 'Desain 3D & rendering', 'Perhitungan teknis'],
                'color' => 'orange',
            ],
            [
                'icon' => 'bi-lightning-charge',
                'title' => 'Instalasi Cepat',
                'description' => 'Layanan instalasi cepat untuk proyek dengan tenggat waktu ketat tanpa mengorbankan kualitas dan keamanan.',
                'features' => ['Tim berpengalaman', 'Peralatan modern', 'Garansi pengerjaan'],
                'color' => 'red',
            ],
        ] as $index => $service)
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 group hover:shadow-xl transition-all duration-300 hover:-translate-y-1 service-card"
                        data-aos="fade-up" data-aos-duration="600" data-aos-delay="{{ $index * 100 }}">
                        <div
                            class="bg-gradient-to-br from-{{ $service['color'] }}-500 to-{{ $service['color'] }}-600 w-16 h-16 rounded-xl flex items-center justify-center mb-4 group-hover:scale-105 transition-transform duration-300 service-icon">
                            <i class="{{ $service['icon'] }} text-xl text-white"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $service['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed mb-4 text-sm">
                            {{ $service['description'] }}
                        </p>
                        <ul class="space-y-2 mb-6">
                            @foreach ($service['features'] as $feature)
                                <li class="flex items-center text-gray-600 text-xs">
                                    <i class="bi bi-check-circle-fill mr-2 text-green-500 text-sm"></i>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                        <a href="#contact"
                            class="inline-flex items-center text-{{ $service['color'] }}-600 font-medium group text-sm">
                            <span>Konsultasi Proyek</span>
                            <i class="bi bi-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Slimmer Interactive Service Showcase -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden" id="showcase">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-stars mr-1"></i>
                    INOVASI TEKNOLOGI
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Teknologi Konstruksi Modern</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Mengintegrasikan teknologi terkini untuk hasil konstruksi yang presisi dan efisien
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-10 items-center">
                <div data-aos="fade-right" data-aos-duration="800">
                    <div class="space-y-6">
                        @foreach ([['icon' => 'bi-cpu', 'title' => 'Desain 3D & BIM', 'desc' => 'Menggunakan Building Information Modeling untuk visualisasi dan koordinasi proyek yang akurat'], ['icon' => 'bi-robot', 'title' => 'Fabrikasi Robotik', 'desc' => 'Presisi tinggi dengan teknologi robotik untuk hasil yang konsisten dan berkualitas'], ['icon' => 'bi-graph-up', 'title' => 'Analisis Struktur Digital', 'desc' => 'Simulasi dan analisis struktur dengan software terkini untuk keamanan optimal'], ['icon' => 'bi-shield-check', 'title' => 'Quality Control Digital', 'desc' => 'Sistem monitoring digital untuk memastikan kualitas di setiap tahap pengerjaan']] as $tech)
                            <div class="flex items-start group" data-aos="fade-up" data-aos-duration="600">
                                <div
                                    class="bg-blue-100 w-12 h-12 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="{{ $tech['icon'] }} text-blue-600 text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 text-lg mb-1">{{ $tech['title'] }}</h4>
                                    <p class="text-gray-600 text-sm">{{ $tech['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-1 shadow-xl">
                        <div class="bg-white rounded-xl p-6 h-full">
                            <!-- Foto showcase -->
                            <div class="aspect-video bg-gray-100 rounded-lg overflow-hidden">
                                <img
                                    src="{{ asset('images/construction-tech-showcase.jpg') }}"
                                    alt="Teknologi Konstruksi Modern"
                                    class="w-full h-full object-cover"
                                    onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'"
                                >
                            </div>

                            <!-- Keterangan foto -->
                            <div class="mt-4">
                                <h3 class="text-lg font-bold text-gray-800 mb-1">Teknologi Konstruksi Modern</h3>
                                <p class="text-gray-600 text-sm">Implementasi teknologi canggih dalam proses konstruksi untuk efisiensi dan presisi yang lebih baik</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Detailed Services Section -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="services">
        <!-- Background Elements - Smaller -->
        <div
            class="absolute top-0 left-0 w-60 h-60 bg-blue-100 rounded-full -translate-x-1/2 -translate-y-1/2 opacity-30 blur-2xl">
        </div>
        <div
            class="absolute bottom-0 right-0 w-80 h-80 bg-cyan-100 rounded-full translate-x-1/2 translate-y-1/2 opacity-20 blur-2xl">
        </div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-gear mr-1"></i>
                    DETAIL LAYANAN
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Spesialisasi Konstruksi Besi</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Setiap layanan dikerjakan dengan standar tertinggi dan teknologi terkini
                </p>
            </div>

            <!-- Service 1 Detail - Slimmer -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
                <div data-aos="fade-right" data-aos-duration="800">
                    <div
                        class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-4 text-sm">
                        <i class="bi bi-building mr-1"></i>
                        KONSTRUKSI STRUKTUR BAJA
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Bangunan Kokoh & Efisien</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm">
                        Kami mengkhususkan diri dalam desain dan konstruksi struktur baja untuk berbagai kebutuhan,
                        mulai dari bangunan komersial hingga fasilitas industri. Dengan material berkualitas SNI
                        dan perhitungan struktur yang presisi.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                <i class="bi bi-rulers text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm">Perhitungan Struktur Presisi</h4>
                                <p class="text-gray-600 text-xs">Analisis beban dan perhitungan struktur sesuai standar</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                <i class="bi bi-shield-check text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm">Material SNI Certified</h4>
                                <p class="text-gray-600 text-xs">Menggunakan material berkualitas dengan sertifikasi resmi
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-blue-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                <i class="bi bi-clock text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm">Pengerjaan Efisien</h4>
                                <p class="text-gray-600 text-xs">Waktu pengerjaan optimal tanpa mengorbankan kualitas</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact"
                        class="bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-5 py-2.5 rounded-xl font-semibold shadow-md transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center text-sm">
                        <span>Konsultasi Proyek</span>
                        <i class="bi bi-arrow-right ml-1"></i>
                    </a>
                </div>
                <div class="relative" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-1 overflow-hidden shadow-lg">
                        <img src="{{ asset('images/services_gallery/servis1.jpg') }}" alt="Konstruksi Struktur Baja"
                            class="w-full h-80 object-cover rounded-lg">
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-center">
                            <div class="text-xl font-bold text-blue-600">50+</div>
                            <div class="text-gray-600 text-xs">Proyek Terselesaikan</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2 Detail - Slimmer -->
            <div class="grid lg:grid-cols-2 gap-12 items-center mb-20">
                <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="800">
                    <div class="bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-xl p-1 overflow-hidden shadow-lg">
                        <img src="{{ asset('images/services_gallery/servis2.jpg') }}" alt="Fabrikasi Custom"
                            class="w-full h-80 object-cover rounded-lg">
                    </div>
                    <div class="absolute -bottom-4 -right-4 bg-white rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-600">100%</div>
                            <div class="text-gray-600 text-xs">Custom Sesuai Kebutuhan</div>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div
                        class="inline-flex items-center px-3 py-1 bg-cyan-100 rounded-full text-cyan-700 font-medium mb-4 text-sm">
                        <i class="bi bi-hammer mr-1"></i>
                        FABRIKASI CUSTOM
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Solusi Sesuai Kebutuhan</h3>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm">
                        Setiap proyek memiliki karakteristik unik. Kami menyediakan layanan fabrikasi custom
                        dengan pendekatan personal untuk memastikan hasil yang sesuai dengan visi dan kebutuhan klien.
                    </p>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center">
                            <div class="bg-cyan-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                <i class="bi bi-palette2 text-cyan-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm">Desain Personal</h4>
                                <p class="text-gray-600 text-xs">Konsep desain sesuai kebutuhan dan preferensi</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-cyan-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                <i class="bi bi-tools text-cyan-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm">Fabrikasi Presisi</h4>
                                <p class="text-gray-600 text-xs">Pengerjaan dengan mesin CNC untuk hasil yang akurat</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="bg-cyan-100 w-8 h-8 rounded-full flex items-center justify-center mr-3">
                                <i class="bi bi-eye text-cyan-600 text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm">Quality Control Ketat</h4>
                                <p class="text-gray-600 text-xs">Pemeriksaan kualitas di setiap tahap produksi</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact"
                        class="bg-gradient-to-r from-cyan-500 to-cyan-600 hover:from-cyan-600 hover:to-cyan-700 text-white px-5 py-2.5 rounded-xl font-semibold shadow-md transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center text-sm">
                        <span>Diskusi Kebutuhan</span>
                        <i class="bi bi-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Process Section -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-blue-50/30 relative overflow-hidden" id="process">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-3">
            <div
                class="absolute top-0 left-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIyIiBmaWxsPSIjMzM4MmY2Ii8+PC9zdmc+')]">
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-diagram-3 mr-1"></i>
                    PROSES KERJA
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Cara Kami Bekerja</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Proses terstruktur yang memastikan kualitas dan kepuasan dalam setiap proyek
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ([['num' => '1', 'title' => 'Konsultasi & Analisis', 'desc' => 'Diskusi kebutuhan, survey lokasi, dan analisis teknis untuk menentukan solusi terbaik', 'color' => 'blue'], ['num' => '2', 'title' => 'Desain & Perencanaan', 'desc' => 'Pembuatan desain detail, perhitungan struktur, dan perencanaan pengerjaan', 'color' => 'cyan'], ['num' => '3', 'title' => 'Produksi & Fabrikasi', 'desc' => 'Proses fabrikasi dengan teknologi terkini dan quality control ketat', 'color' => 'green'], ['num' => '4', 'title' => 'Instalasi & Serah Terima', 'desc' => 'Instalasi profesional, testing, dan serah terima proyek dengan dokumentasi lengkap', 'color' => 'purple']] as $step)
                    <div class="text-center group process-step" data-aos="fade-up" data-aos-duration="600"
                        data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="relative mb-6">
                            <div
                                class="bg-gradient-to-br from-{{ $step['color'] }}-500 to-{{ $step['color'] }}-600 w-16 h-16 rounded-xl flex items-center justify-center mx-auto mb-3 shadow-md group-hover:scale-105 transition-transform duration-300">
                                <span class="text-white text-xl font-bold">{{ $step['num'] }}</span>
                            </div>
                            @if (!$loop->last)
                                <div
                                    class="hidden lg:block absolute top-8 left-1/2 w-full h-0.5 bg-{{ $step['color'] }}-200 -z-10">
                                </div>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-gray-800 mb-3">{{ $step['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed text-xs">
                            {{ $step['desc'] }}
                        </p>
                    </div>
                @endforeach
            </div>

            <!-- Process CTA - Slimmer -->
            <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <a href="#contact"
                    class="bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 inline-flex items-center text-sm">
                    <i class="bi bi-calendar-check mr-2"></i>
                    <span>Jadwalkan Konsultasi</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Slimmer Why Choose Us Section -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50/50" id="why-us">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" data-aos-duration="800">
                    <div
                        class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-4 text-sm">
                        <i class="bi bi-award mr-1"></i>
                        MENGAPA MEMILIH KAMI
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Keunggulan Layanan Kami</h2>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">
                        Dengan pengalaman lebih dari 10 tahun, kami telah membangun reputasi sebagai
                        mitra terpercaya dalam industri konstruksi besi.
                    </p>

                    <div class="space-y-4">
                        @foreach ([['icon' => 'bi-shield-check', 'title' => 'Bersertifikat & Berpengalaman', 'desc' => 'Tim profesional dengan sertifikasi dan pengalaman dalam berbagai proyek', 'color' => 'blue'], ['icon' => 'bi-tools', 'title' => 'Teknologi Terkini', 'desc' => 'Menggunakan peralatan modern dan teknologi terkini untuk hasil presisi', 'color' => 'cyan'], ['icon' => 'bi-clock', 'title' => 'Tepat Waktu', 'desc' => 'Komitmen pada deadline dengan sistem manajemen proyek yang terstruktur', 'color' => 'green'], ['icon' => 'bi-headset', 'title' => 'Layanan 24/7', 'desc' => 'Dukungan teknis dan layanan purna jual yang responsif', 'color' => 'purple']] as $feature)
                            <div class="flex items-start group">
                                <div
                                    class="bg-{{ $feature['color'] }}-100 w-10 h-10 rounded-xl flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-105 transition-transform duration-300">
                                    <i class="{{ $feature['icon'] }} text-{{ $feature['color'] }}-600 text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-800 text-sm mb-1">{{ $feature['title'] }}</h4>
                                    <p class="text-gray-600 text-xs">{{ $feature['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ([['icon' => 'bi-building', 'value' => '50+', 'label' => 'Proyek Selesai', 'color' => 'blue'], ['icon' => 'bi-check-circle', 'value' => '100%', 'label' => 'Klien Puas', 'color' => 'green'], ['icon' => 'bi-people', 'value' => '15+', 'label' => 'Tim Ahli', 'color' => 'cyan'], ['icon' => 'bi-award', 'value' => '10+', 'label' => 'Tahun Pengalaman', 'color' => 'purple']] as $stat)
                            <div
                                class="bg-white rounded-xl p-4 text-center shadow-lg border border-gray-100 group hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                <div
                                    class="bg-gradient-to-br from-{{ $stat['color'] }}-500 to-{{ $stat['color'] }}-600 w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-3 shadow-md">
                                    <i class="{{ $stat['icon'] }} text-lg text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800 text-lg mb-1">{{ $stat['value'] }}</h4>
                                <p class="text-gray-600 text-xs">{{ $stat['label'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <!-- Background Decoration - Smaller -->
                    <div
                        class="absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-blue-100 rounded-full blur-2xl opacity-20">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer FAQ Section -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-white" id="faq">
        <div class="max-w-3xl mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-question-circle mr-1"></i>
                    PERTANYAAN UMUM
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Temukan jawaban untuk pertanyaan umum seputar layanan konstruksi besi kami
                </p>
            </div>

            <div class="space-y-3" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                @foreach ([
            [
                'question' => 'Berapa lama waktu pengerjaan proyek konstruksi besi?',
                'answer' => 'Waktu pengerjaan bervariasi tergantung kompleksitas dan skala proyek. Proyek kecil seperti kanopi biasanya 1-2 minggu, sedangkan struktur gedung besar dapat memakan waktu 2-4 bulan.',
            ],
            [
                'question' => 'Apakah material yang digunakan berkualitas?',
                'answer' => 'Ya, kami hanya menggunakan material berkualitas dengan sertifikasi SNI dan standar internasional. Semua material melalui proses quality control ketat sebelum digunakan.',
            ],
            [
                'question' => 'Bagaimana sistem pembayaran proyek?',
                'answer' => 'Kami menawarkan sistem pembayaran yang fleksibel, biasanya dengan DP 30-50% di awal, progres payment selama pengerjaan, dan pelunasan saat serah terima proyek.',
            ],
            [
                'question' => 'Apakah ada garansi untuk pekerjaan?',
                'answer' => 'Ya, semua pekerjaan kami berikan garansi mulai dari 1-5 tahun tergantung jenis pekerjaan. Garansi mencakup material dan pengerjaan.',
            ],
            [
                'question' => 'Bagaimana proses konsultasi dan penawaran?',
                'answer' => 'Proses dimulai dengan konsultasi gratis, survey lokasi, kemudian kami buat desain dan penawaran detail. Semua proses tanpa biaya hingga Anda menyetujui penawaran.',
            ],
        ] as $faq)
                    <div class="bg-white rounded-xl p-4 shadow-md border border-gray-100 faq-item">
                        <div class="flex justify-between items-center cursor-pointer">
                            <h3 class="text-sm font-semibold text-gray-800">{{ $faq['question'] }}</h3>
                            <i class="bi bi-chevron-down text-blue-600 text-lg transition-transform duration-300"></i>
                        </div>
                        <div class="mt-3 text-gray-600 text-sm hidden">
                            {{ $faq['answer'] }}
                        </div>
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

        <div class="max-w-3xl mx-auto px-4 text-center relative z-10" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                Konsultasikan kebutuhan konstruksi besi Anda dengan tim ahli kami dan dapatkan solusi terbaik
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
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
                    <i
                        class="bi bi-arrow-up-right ml-1 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform"></i>
                </a>
            </div>
            <p class="text-blue-200 mt-4 text-xs">
                Respons cepat dalam 1 jam kerja
            </p>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Include Particles.js -->
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

            // Initialize Particles.js - Fewer particles for performance
            if (document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    particles: {
                        number: {
                            value: 60,
                            density: {
                                enable: true,
                                value_area: 600
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
                            value: 0.2,
                            random: true,
                            anim: {
                                enable: true,
                                speed: 1,
                                opacity_min: 0.1,
                                sync: false
                            }
                        },
                        size: {
                            value: 2,
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
                            distance: 120,
                            color: "#ffffff",
                            opacity: 0.1,
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
                                distance: 120,
                                line_linked: {
                                    opacity: 0.3
                                }
                            },
                            push: {
                                particles_nb: 3
                            }
                        }
                    },
                    retina_detect: true
                });
            }

            // Enhanced smooth scroll untuk anchor links
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

            // Parallax effect for hero section - Lighter
            window.addEventListener('scroll', function() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.relative.min-h-\\[80vh\\]');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.3}px)`;
                }
            });

            // Service cards interaction
            const serviceCards = document.querySelectorAll('.service-card');

            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-4px)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // FAQ Accordion functionality
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.cursor-pointer');
                const answer = item.querySelector('.hidden');
                const icon = item.querySelector('.bi-chevron-down');

                question.addEventListener('click', () => {
                    // Toggle current item
                    answer.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');

                    // Close other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.querySelector('.hidden').classList.add('hidden');
                            otherItem.querySelector('.bi-chevron-down').classList.remove(
                                'rotate-180');
                        }
                    });
                });
            });

            // Refresh AOS pada event tertentu
            window.addEventListener('load', function() {
                AOS.refresh();
            });

            window.addEventListener('resize', function() {
                setTimeout(() => AOS.refresh(), 300);
            });

            // Add intersection observer for counters
            const counters = document.querySelectorAll('[data-counter]');

            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseInt(entry.target.getAttribute('data-counter'));
                        animateCounter(entry.target, target, 1500);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.3
            });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });

            // Counter animation function
            function animateCounter(element, target, duration) {
                let start = 0;
                const increment = target / (duration / 16);
                const timer = setInterval(() => {
                    start += increment;
                    if (start >= target) {
                        element.textContent = target + (element.getAttribute('data-suffix') || '');
                        clearInterval(timer);
                    } else {
                        element.textContent = Math.floor(start) + (element.getAttribute('data-suffix') ||
                            '');
                    }
                }, 16);
            }
        });
    </script>

    <style>
        /* Slimmer custom animations untuk services page */
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

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.3;
            }

            50% {
                opacity: 0.5;
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

        /* Enhanced hover effects untuk service cards */
        .service-card:hover .service-icon {
            transform: scale(1.05);
        }

        /* FAQ Animation */
        .faq-item .rotate-180 {
            transform: rotate(180deg);
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

        /* Service process connector lines */
        @media (min-width: 1024px) {
            .process-step:not(:last-child)::after {
                content: '';
                position: absolute;
                top: 32px;
                left: 50%;
                width: 100%;
                height: 1px;
                background: linear-gradient(to right, #3b82f6, #06b6d4);
                z-index: -1;
            }
        }

        /* Particles.js container */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
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
            transition: left 0.4s;
        }

        .btn-hover-effect:hover::before {
            left: 100%;
        }

        /* Text shadow for better readability */
        .text-shadow {
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .text-shadow-lg {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        }
    </style>
@endsection