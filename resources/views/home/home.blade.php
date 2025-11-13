@extends('layouts.app')

@section('title', 'Home | Jaya Abadi Konstruksi')

@section('content')
<!-- Hero Section dengan efek parallax -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 to-blue-900">
    <!-- Background dengan efek overlay -->
    <div class="absolute inset-0 bg-black/50 z-0"></div>
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero-las.jpg') }}" alt="Hero Welding"
             class="w-full h-full object-cover transform scale-105 animate-zoom">
    </div>

    <!-- Content Hero -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 text-center text-white">
        <div data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                <span class="bg-gradient-to-r from-blue-400 to-cyan-300 bg-clip-text text-transparent">
                    Kualitas & Ketelitian
                </span>
                <br>
                <span class="text-white">Dalam Setiap Las</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed">
                Mengutamakan presisi dan keahlian dalam setiap proyek konstruksi besi untuk hasil yang maksimal dan tahan lama
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up" data-aos-delay="300">
                <a href="#quote" class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center">
                    <span>Dapatkan Penawaran</span>
                    <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="#projects" class="group border-2 border-white/30 hover:border-white text-white px-8 py-4 rounded-xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center">
                    <span>Lihat Proyek</span>
                    <i class="bi bi-arrow-down ml-2 group-hover:translate-y-1 transition-transform"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10" data-aos="fade-up" data-aos-delay="500">
        <div class="animate-bounce">
            <i class="bi bi-chevron-down text-2xl text-white/70"></i>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white relative -mt-20 z-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8" data-aos="fade-up">
            <div class="text-center group">
                <div class="bg-gradient-to-br from-blue-500 to-cyan-400 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <i class="bi bi-building text-3xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-2">50+</h3>
                <p class="text-gray-600 font-medium">Proyek Selesai</p>
            </div>
            <div class="text-center group">
                <div class="bg-gradient-to-br from-blue-500 to-cyan-400 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <i class="bi bi-award text-3xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-2">10+</h3>
                <p class="text-gray-600 font-medium">Tahun Pengalaman</p>
            </div>
            <div class="text-center group">
                <div class="bg-gradient-to-br from-blue-500 to-cyan-400 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <i class="bi bi-people text-3xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-2">100%</h3>
                <p class="text-gray-600 font-medium">Klien Puas</p>
            </div>
            <div class="text-center group">
                <div class="bg-gradient-to-br from-blue-500 to-cyan-400 w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <i class="bi bi-shield-check text-3xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold text-gray-800 mb-2">24/7</h3>
                <p class="text-gray-600 font-medium">Support</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gray-50" id="services">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-semibold text-lg mb-2 block">LAYANAN KAMI</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Keahlian dalam Berbagai Bidang</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Kami menyediakan solusi lengkap untuk kebutuhan konstruksi besi dengan standar kualitas tertinggi
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 group" data-aos="fade-up">
                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="bi bi-tools text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Konstruksi Besi</h3>
                <p class="text-gray-600 mb-6">
                    Pembangunan struktur besi untuk gedung, pabrik, dan fasilitas industri dengan material berkualitas tinggi.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Struktur Rangka Baja
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Kanopi & Pagar
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Tangga & Railing
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="bi bi-hammer text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Fabrikasi Custom</h3>
                <p class="text-gray-600 mb-6">
                    Pembuatan komponen besi sesuai desain dan spesifikasi khusus untuk kebutuhan unik proyek Anda.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Desain Kustom
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        CNC Precision
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Quality Control
                    </li>
                </ul>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 group" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-gradient-to-br from-blue-100 to-cyan-100 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <i class="bi bi-gear text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-4">Perbaikan & Maintenance</h3>
                <p class="text-gray-600 mb-6">
                    Layanan perawatan dan perbaikan struktur besi untuk memastikan keamanan dan daya tahan jangka panjang.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Inspeksi Rutin
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Perbaikan Struktur
                    </li>
                    <li class="flex items-center text-gray-600">
                        <i class="bi bi-check-circle text-blue-500 mr-2"></i>
                        Anti Korosi
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Project Gallery -->
<section class="py-20 bg-white" id="projects">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-semibold text-lg mb-2 block">PORTFOLIO</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Proyek Terbaru Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Bukti kualitas dan keahlian kami dalam berbagai proyek konstruksi besi
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" data-aos="fade-up">
            @php
                $projectImages = [
                    'proyek.jpg',
                    'proyek2.jpg',
                    'proyek3.jpg',
                    'proyek4.jpg',
                    'proyek5.jpg',
                    'proyek6.jpg',
                ];
            @endphp
            @foreach($projectImages as $image)
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500">
                <div class="aspect-w-16 aspect-h-12 bg-gray-200 overflow-hidden">
                    <img src="{{ asset('images/projects/' . $image) }}"
                         alt="{{ $image }}"
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div class="text-white transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="text-xl font-bold mb-2">Proyek</h3>
                        <p class="text-gray-200 text-sm">Struktur besi berkualitas tinggi</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group">
                <span>Lihat Semua Proyek</span>
                <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 to-blue-900 text-white" id="values">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-cyan-400 font-semibold text-lg mb-2 block">NILAI KAMI</span>
            <h2 class="text-4xl font-bold mb-4">Mengapa Memilih Kami?</h2>
            <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                Komitmen kami terhadap kualitas, ketepatan waktu, dan kepuasan pelanggan
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center group" data-aos="fade-up">
                <div class="bg-white/10 backdrop-blur-sm w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20">
                    <i class="bi bi-lightbulb text-4xl text-cyan-400"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Kreativitas & Inovasi</h3>
                <p class="text-gray-300 leading-relaxed">
                    Setiap proyek dirancang dengan solusi kreatif dan inovatif yang menonjolkan fungsi dan estetika.
                </p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-white/10 backdrop-blur-sm w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20">
                    <i class="bi bi-shield-check text-4xl text-cyan-400"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Keandalan</h3>
                <p class="text-gray-300 leading-relaxed">
                    Kami menjamin hasil kerja yang konsisten dan dapat diandalkan dalam setiap pengerjaan.
                </p>
            </div>
            <div class="text-center group" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white/10 backdrop-blur-sm w-24 h-24 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:bg-cyan-500/20 transition-all duration-300 border border-white/20">
                    <i class="bi bi-gear-wide-connected text-4xl text-cyan-400"></i>
                </div>
                <h3 class="text-2xl font-bold mb-4">Presisi</h3>
                <p class="text-gray-300 leading-relaxed">
                    Ketepatan adalah prioritas kami untuk memastikan hasil sesuai dengan spesifikasi dan kebutuhan klien.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="py-20 bg-gray-50" id="founder">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <span class="text-blue-600 font-semibold text-lg mb-2 block">TIM KAMI</span>
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Maryanto</h2>
                <h4 class="text-blue-600 text-xl font-semibold mb-6">Founder & Project Manager</h4>
                <blockquote class="text-gray-600 text-lg leading-relaxed mb-8 border-l-4 border-blue-500 pl-6 italic">
                    "Kualitas dan ketelitian adalah dasar utama dalam setiap pekerjaan kami. Dengan pengalaman bertahun-tahun dalam dunia konstruksi besi, kami memastikan setiap detail diperhatikan dengan cermat untuk memberikan hasil yang terbaik bagi klien kami."
                </blockquote>
                <div class="flex items-center space-x-6">
                    {{-- <img src="{{ asset('images/signature.png') }}" alt="Tanda Tangan" class="h-12 opacity-80"> --}}
                    <div class="border-l border-gray-300 pl-6">
                        <p class="text-gray-500 font-semibold">10+ Tahun Pengalaman</p>
                        <p class="text-gray-400 text-sm">Spesialis Konstruksi Besi</p>
                    </div>
                </div>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="relative z-10">
                    <img src="{{ asset('images/founder.jpg') }}" alt="Founder"
                         class="rounded-2xl shadow-2xl w-full max-w-md mx-auto border-2 border-blue-500">
                </div>
                {{-- <div class="absolute inset-0 translate-x-3 translate-y-3 border-2 border-blue-500 rounded-2xl"></div> --}}
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 to-blue-900 text-white" id="quote">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-4">Dapatkan Penawaran Gratis</h2>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                Hubungi kami sekarang untuk mendapatkan estimasi biaya proyek konstruksi Anda secara gratis dan konsultasi tanpa biaya
            </p>
        </div>

        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20" data-aos="fade-up" data-aos-delay="200">
            <form action="#" method="POST" class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-200 mb-2">Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Nama Anda"
                           class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all">
                </div>
                <div>
                    <label class="block text-gray-200 mb-2">Email</label>
                    <input type="email" name="email" placeholder="email@anda.com"
                           class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all">
                </div>
                <div>
                    <label class="block text-gray-200 mb-2">Telepon</label>
                    <input type="tel" name="phone" placeholder="08xx-xxxx-xxxx"
                           class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all">
                </div>
                <div>
                    <label class="block text-gray-200 mb-2">Jenis Proyek</label>
                    <select name="project_type"
                            class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all">
                        <option value="" class="text-gray-800">Pilih Jenis Proyek</option>
                        <option value="konstruksi" class="text-gray-800">Konstruksi Besi</option>
                        <option value="fabrikasi" class="text-gray-800">Fabrikasi Custom</option>
                        <option value="perbaikan" class="text-gray-800">Perbaikan & Maintenance</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-200 mb-2">Pesan</label>
                    <textarea name="message" rows="4" placeholder="Jelaskan kebutuhan proyek Anda..."
                              class="w-full px-4 py-3 rounded-xl bg-white/5 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:border-transparent transition-all"></textarea>
                </div>
                <div class="md:col-span-2 text-center">
                    <button type="submit"
                            class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                        <i class="bi bi-send mr-2"></i>Kirim Permintaan Penawaran
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Blog Section -->
{{-- <section class="py-20 bg-white" id="blog">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="text-blue-600 font-semibold text-lg mb-2 block">ARTIKEL</span>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Tips & Insight Terbaru</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Informasi terbaru seputar konstruksi besi, teknologi las, dan tips perawatan
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8" data-aos="fade-up">
            @foreach([1,2,3] as $blog)
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 group">
                <div class="overflow-hidden">
                    <img src="{{ asset('images/blog'.$blog.'.jpg') }}"
                         alt="Blog {{ $blog }}"
                         class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-3">
                        <i class="bi bi-calendar3 mr-2"></i>
                        <span>{{ now()->subDays($blog*10)->format('d M Y') }}</span>
                        <span class="mx-2">•</span>
                        <i class="bi bi-clock mr-2"></i>
                        <span>5 min read</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">
                        @if($blog == 1)
                        Teknologi Las Modern dalam Konstruksi
                        @elseif($blog == 2)
                        Tips Menjaga Peralatan Las Tetap Awet
                        @else
                        Inovasi Desain Besi untuk Bangunan Modern
                        @endif
                    </h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">
                        @if($blog == 1)
                        Penerapan teknologi terkini dalam proses las meningkatkan efisiensi dan hasil yang presisi.
                        @elseif($blog == 2)
                        Perawatan rutin alat las penting untuk menjaga performa dan keamanan kerja.
                        @else
                        Perpaduan antara seni dan teknik dalam desain struktur logam masa kini.
                        @endif
                    </p>
                    <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group">
                        <span>Baca Selengkapnya</span>
                        <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </article>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <a href="#" class="inline-flex items-center bg-gray-100 hover:bg-gray-200 text-gray-800 px-6 py-3 rounded-xl font-semibold transition-all duration-300 group">
                <span>Lihat Semua Artikel</span>
                <i class="bi bi-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>
    </div>
</section> --}}

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-cyan-500 text-white">
    <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
        <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
            Hubungi kami sekarang untuk konsultasi gratis dan penawaran terbaik untuk proyek konstruksi besi Anda
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6287817695973"
               class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center">
                <i class="bi bi-whatsapp mr-2"></i>
                WhatsApp Kami
            </a>
            <a href="tel:087817695973"
               class="border-2 border-white text-white hover:bg-white/10 px-6 py-3 rounded-xl font-semibold backdrop-blur-sm transition-all duration-300 flex items-center justify-center">
                <i class="bi bi-telephone mr-2"></i>
                Telepon Sekarang
            </a>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Additional animations for home page
    document.addEventListener('DOMContentLoaded', function() {
        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-section');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
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
                counter.innerText = target;
            }
        };

        // Intersection Observer for counter animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => {
            observer.observe(counter);
        });
    });
</script>

<style>
    /* Custom animations */
    @keyframes zoom {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .animate-zoom {
        animation: zoom 20s ease-in-out infinite;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Custom scroll behavior */
    html {
        scroll-behavior: smooth;
    }
</style>
@endsection
