@extends('layouts.app')

@section('title', 'Hubungi Kami | Jaya Abadi Konstruksi')

@section('content')
    <!-- Slimmer Hero Section -->
    <section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-black/40 z-0"></div>
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-10"></div>
            <img src="{{ asset('images/projects/proyek4.jpg') }}" alt="Contact Hero"
                class="w-full h-full object-cover transform scale-110 animate-slow-zoom">
        </div>

        <!-- Floating Elements - Smaller -->
        <div class="absolute top-16 left-8 w-4 h-4 bg-cyan-400 rounded-full opacity-70 animate-float"></div>
        <div class="absolute bottom-20 right-12 w-6 h-6 bg-blue-500 rounded-full opacity-50 animate-float-delayed"></div>
        <div class="absolute top-1/3 right-1/4 w-5 h-5 bg-white rounded-full opacity-30 animate-pulse-slow"></div>

        <!-- Content Hero - Slimmer -->
        <div class="relative z-20 max-w-6xl mx-auto px-4 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                <div class="mt-8 inline-block mb-3 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <span class="text-cyan-300 font-medium text-sm">Hubungi Jaya Abadi Konstruksi</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 leading-tight">
                    <span
                        class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Mari Berkolaborasi
                    </span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-6 max-w-2xl mx-auto leading-relaxed font-light">
                    Siap membantu mewujudkan <span class="text-cyan-300 font-semibold">proyek konstruksi besi</span> Anda
                    dengan solusi terbaik
                </p>
                <div class="mb-8 flex flex-col sm:flex-row gap-3 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="300" data-aos-once="true">
                    <a href="#contact-form"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center text-sm shadow-blue-500/20">
                        <span>Kirim Pesan</span>
                        <i class="bi bi-send ml-1 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                    <a href="https://wa.me/6287817695973"
                        class="group border border-white/40 hover:border-white text-white px-6 py-3 rounded-xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center text-sm bg-white/5">
                        <span>WhatsApp</span>
                        <i class="bi bi-whatsapp ml-1 group-hover:scale-105 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Contact Information Section -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50/30">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-telephone mr-1"></i>
                    INFORMASI KONTAK
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Hubungi Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Tim kami siap membantu menjawab pertanyaan dan memberikan solusi terbaik untuk proyek Anda
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12 justify-items-center">
                <!-- Phone Card - Slimmer -->
                <div class="bg-white rounded-xl p-6 text-center group hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-blue-200 hover:-translate-y-1 w-full max-w-xs"
                    data-aos="fade-up" data-aos-duration="600">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="bi bi-telephone text-lg text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Telepon</h3>
                    <p class="text-gray-600 text-xs mb-2">Hubungi kami langsung</p>
                    <a href="tel:+6287817695973"
                        class="text-blue-600 font-semibold text-sm hover:text-blue-700 transition-colors break-words">
                        +62 878-1769-5973
                    </a>
                </div>

                <!-- WhatsApp Card - Slimmer -->
                <div class="bg-white rounded-xl p-6 text-center group hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-green-200 hover:-translate-y-1 w-full max-w-xs"
                    data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="bi bi-whatsapp text-lg text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">WhatsApp</h3>
                    <p class="text-gray-600 text-xs mb-2">Chat langsung</p>
                    <a href="https://wa.me/6287817695973"
                        class="text-green-600 font-semibold text-sm hover:text-green-700 transition-colors break-words">
                        +62 878-1769-5973
                    </a>
                </div>

                <!-- Email Card - Slimmer -->
                <div class="bg-white rounded-xl p-6 text-center group hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-cyan-200 hover:-translate-y-1 w-full max-w-xs"
                    data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div
                        class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="bi bi-envelope text-lg text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-600 text-xs mb-2">Kirim email kepada kami</p>
                    <a href="mailto:lasjayaabadi123@gmail.com"
                        class="text-cyan-600 font-semibold text-sm hover:text-cyan-700 transition-colors break-words">
                        lasjayaabadi123@gmail.com
                    </a>
                </div>

                <!-- Location Card - Slimmer -->
                <div class="bg-white rounded-xl p-6 text-center group hover:shadow-lg transition-all duration-300 border border-gray-100 hover:border-purple-200 hover:-translate-y-1 w-full max-w-xs"
                    data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-600 w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-md">
                        <i class="bi bi-geo-alt text-lg text-white"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Lokasi</h3>
                    <p class="text-gray-600 text-xs mb-2">Kunjungi kantor kami</p>
                    <p class="text-gray-800 font-medium text-xs">
                        Jl. Raya Tapos No.72, Depok
                    </p>
                </div>
            </div>

            <!-- Office Hours & Response Time - Slimmer -->
            <div class="grid md:grid-cols-2 gap-8 md:gap-10 items-center">
                <div data-aos="fade-right" data-aos-duration="800">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Jam Operasional & Waktu Respon</h3>

                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-xl mr-3 flex-shrink-0">
                                <i class="bi bi-clock text-blue-600 text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm mb-1">Jam Operasional</h4>
                                <p class="text-gray-600 text-xs">08:00 - 17:00 WIB</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-xl mr-3 flex-shrink-0">
                                <i class="bi bi-whatsapp text-green-600 text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm mb-1">Respon WhatsApp</h4>
                                <p class="text-gray-600 text-xs">1-2 jam dalam jam operasional</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-cyan-100 p-2 rounded-xl mr-3 flex-shrink-0">
                                <i class="bi bi-envelope text-cyan-600 text-lg"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm mb-1">Respon Email</h4>
                                <p class="text-gray-600 text-xs">Maksimal 24 jam</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-100 mt-6 md:mt-0"
                    data-aos="fade-left" data-aos-duration="800">
                    <h3 class="text-lg md:text-xl font-bold text-gray-800 mb-3">Mengapa Memilih Kami?</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <i class="bi bi-check-circle-fill text-green-500 mr-2 text-sm"></i>
                            <span class="text-gray-700 text-xs">Konsultasi gratis tanpa biaya</span>
                        </div>
                        <div class="flex items-center">
                            <i class="bi bi-check-circle-fill text-green-500 mr-2 text-sm"></i>
                            <span class="text-gray-700 text-xs">Estimasi biaya yang transparan</span>
                        </div>
                        <div class="flex items-center">
                            <i class="bi bi-check-circle-fill text-green-500 mr-2 text-sm"></i>
                            <span class="text-gray-700 text-xs">Survey lokasi untuk proyek besar</span>
                        </div>
                        <div class="flex items-center">
                            <i class="bi bi-check-circle-fill text-green-500 mr-2 text-sm"></i>
                            <span class="text-gray-700 text-xs">Garansi pengerjaan dan material</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Contact Form Section -->
    <section class="py-16 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="contact-form">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 left-0 w-60 h-60 bg-blue-100 rounded-full -translate-x-1/2 -translate-y-1/2 opacity-30 blur-2xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-cyan-100 rounded-full translate-x-1/2 translate-y-1/2 opacity-20 blur-2xl"></div>

        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Contact Form - Slimmer -->
                <div class="bg-white rounded-2xl p-8 shadow-xl border border-gray-100 relative overflow-hidden"
                    data-aos="fade-right" data-aos-duration="800">
                    <div class="absolute top-0 right-0 w-36 h-36 bg-blue-50 rounded-full -translate-y-1/2 translate-x-1/2"></div>

                    <div class="relative z-10">
                        <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-4 text-sm">
                            <i class="bi bi-chat-dots mr-1"></i>
                            KIRIM PESAN
                        </div>
                        <h2 class="text-3xl font-bold text-gray-800 mb-2">Hubungi Kami</h2>
                        <p class="text-gray-600 mb-6 text-sm">Isi formulir di bawah ini dan kami akan segera merespons</p>

                        <form class="space-y-4">
                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-1 text-sm">Nama Lengkap</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-person text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="text" id="name"
                                            class="w-full pl-9 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-sm"
                                            placeholder="Masukkan nama lengkap">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-1 text-sm">Email</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-envelope text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="email" id="email"
                                            class="w-full pl-9 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-sm"
                                            placeholder="email@contoh.com">
                                    </div>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-4">
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-1 text-sm">Nomor Telepon</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-telephone text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="tel" id="phone"
                                            class="w-full pl-9 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-sm"
                                            placeholder="+62 xxx xxxx xxxx">
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="block text-gray-700 font-medium mb-1 text-sm">Subjek</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-chat-square-text text-gray-400 text-sm"></i>
                                        </div>
                                        <input type="text" id="subject"
                                            class="w-full pl-9 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 text-sm"
                                            placeholder="Subjek pesan">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="service" class="block text-gray-700 font-medium mb-1 text-sm">Jenis Layanan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="bi bi-tools text-gray-400 text-sm"></i>
                                    </div>
                                    <select id="service"
                                        class="w-full pl-9 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 appearance-none text-sm">
                                        <option value="">Pilih jenis layanan</option>
                                        <option value="konstruksi-baja">Konstruksi Struktur Baja</option>
                                        <option value="fabrikasi-custom">Fabrikasi Custom</option>
                                        <option value="perbaikan-maintenance">Perbaikan & Maintenance</option>
                                        <option value="konsultasi">Konsultasi Proyek</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="bi bi-chevron-down text-gray-400 text-sm"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-1 text-sm">Pesan</label>
                                <div class="relative">
                                    <div class="absolute top-2 left-3 pointer-events-none">
                                        <i class="bi bi-pencil text-gray-400 text-sm"></i>
                                    </div>
                                    <textarea id="message" rows="4"
                                        class="w-full pl-9 pr-4 py-2 bg-gray-50 border border-gray-200 rounded-lg focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 resize-none text-sm"
                                        placeholder="Jelaskan kebutuhan proyek atau pertanyaan Anda"></textarea>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white py-3 rounded-lg font-semibold shadow-md transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group text-sm">
                                <span>Kirim Pesan</span>
                                <i class="bi bi-send ml-1 group-hover:translate-x-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- FAQ & Additional Info - Slimmer -->
                <div data-aos="fade-up" data-aos-duration="800">
                    <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-4 text-sm">
                        <i class="bi bi-question-circle mr-1"></i>
                        PERTANYAAN UMUM
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">FAQ</h2>

                    <div class="space-y-4">
                        <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-sm">Berapa lama waktu pengerjaan proyek?</h3>
                                <i class="bi bi-plus-circle text-blue-500 text-sm group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-3 text-gray-600 text-xs hidden group-[.active]:block">
                                Waktu pengerjaan bervariasi tergantung kompleksitas dan skala proyek. Untuk proyek kecil
                                biasanya 1-2 minggu, sedangkan proyek besar bisa memakan waktu 1-3 bulan.
                            </div>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-sm">Apakah tersedia layanan survey lokasi?</h3>
                                <i class="bi bi-plus-circle text-blue-500 text-sm group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-3 text-gray-600 text-xs hidden group-[.active]:block">
                                Ya, kami menyediakan layanan survey lokasi gratis untuk proyek dengan nilai di atas Rp 50
                                juta. Untuk proyek kecil, kami dapat memberikan konsultasi melalui telepon atau video call.
                            </div>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-sm">Bagaimana sistem pembayaran?</h3>
                                <i class="bi bi-plus-circle text-blue-500 text-sm group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-3 text-gray-600 text-xs hidden group-[.active]:block">
                                Pembayaran biasanya dilakukan dengan sistem termin: 30% di awal, 40% saat pekerjaan tengah
                                berjalan, dan 30% setelah proyek selesai. Namun, kami fleksibel menyesuaikan dengan
                                kebutuhan klien.
                            </div>
                        </div>

                        <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-sm">Apakah material disediakan oleh perusahaan?</h3>
                                <i class="bi bi-plus-circle text-blue-500 text-sm group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-3 text-gray-600 text-xs hidden group-[.active]:block">
                                Ya, kami menyediakan material berkualitas dengan sertifikasi SNI. Kami juga dapat bekerja
                                dengan material yang disediakan klien, dengan catatan kualitas material sesuai standar kami.
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact - Slimmer -->
                    <div class="mt-8 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl p-6 text-white text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-3 backdrop-blur-sm">
                            <i class="bi bi-telephone text-lg"></i>
                        </div>
                        <h3 class="text-lg font-bold mb-1">Darurat?</h3>
                        <p class="mb-3 opacity-90 text-xs">Untuk kebutuhan mendesak di luar jam operasional</p>
                        <a href="tel:+6287817695973"
                            class="inline-flex items-center bg-white text-red-600 px-4 py-2 rounded-lg font-bold hover:bg-gray-100 transition-colors text-sm">
                            <i class="bi bi-telephone mr-1"></i>
                            +62 878-1769-5973
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer Map Section -->
    <section class="py-16 bg-gradient-to-b from-white to-gray-50/30">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="800">
                <div class="inline-flex items-center px-3 py-1 bg-blue-100 rounded-full text-blue-700 font-medium mb-3 text-sm">
                    <i class="bi bi-geo-alt mr-1"></i>
                    LOKASI KAMI
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">Kunjungi Kantor Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm">
                    Datang langsung ke kantor kami untuk konsultasi lebih lanjut tentang proyek Anda
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Map - Slimmer -->
                <div class="lg:col-span-2 rounded-xl overflow-hidden shadow-lg border border-gray-200"
                    data-aos="fade-right" data-aos-duration="800">
                    <div class="h-80 w-full">
                        <!-- Google Maps Embed -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.616388486493!2d106.87203447509728!3d-6.443277793548023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edd4373a1473%3A0x6dbcd5444d3a5113!2sJaya%20Abadi%20Konstruksi!5e0!3m2!1sid!2sid!4v1763347707180!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="w-full h-full">
                        </iframe>
                    </div>
                </div>

                <!-- Location Details - Slimmer -->
                <div class="space-y-4" data-aos="fade-up" data-aos-duration="800">
                    <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm">
                        <div class="flex items-start mb-3">
                            <div class="bg-blue-100 p-2 rounded-lg mr-3">
                                <i class="bi bi-geo-alt text-blue-600 text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-sm mb-1">Alamat</h3>
                                <p class="text-gray-600 text-xs">Jl. Raya Tapos No.72</p>
                                <p class="text-gray-600 text-xs">Kelurahan Cimpaeun, Kecamatan Tapos</p>
                                <p class="text-gray-600 text-xs">Depok 16459</p>
                            </div>
                        </div>
                        <a href="https://maps.app.goo.gl/mLdaf42cteyBmtNY6"
                            class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition-colors text-xs">
                            <i class="bi bi-compass mr-1"></i>
                            Dapatkan Petunjuk Arah
                        </a>
                    </div>

                    <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm">
                        <div class="flex items-start mb-3">
                            <div class="bg-green-100 p-2 rounded-lg mr-3">
                                <i class="bi bi-car-front text-green-600 text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-sm mb-1">Parkir</h3>
                                <p class="text-gray-600 text-xs">Tersedia area parkir yang aman untuk kendaraan roda dua
                                    dan empat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-4 border border-gray-100 shadow-sm">
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-2 rounded-lg mr-3">
                                <i class="bi bi-bus-front text-purple-600 text-sm"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-sm mb-1">Akses Transportasi</h3>
                                <p class="text-gray-600 text-xs">Mudah dijangkau dengan kendaraan pribadi maupun transportasi umum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Slimmer CTA Section -->
    <section class="py-16 bg-gradient-to-r from-blue-600 via-blue-700 to-cyan-600 text-white relative overflow-hidden">
        <!-- Background Elements - Smaller -->
        <div class="absolute top-0 left-0 w-60 h-60 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-cyan-500/10 rounded-full translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-3xl mx-auto px-4 text-center relative z-10" data-aos="fade-up" data-aos-duration="800">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Memulai Proyek Anda?</h2>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto leading-relaxed">
                Hubungi kami hari ini untuk konsultasi gratis dan dapatkan penawaran terbaik untuk proyek konstruksi besi
                Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:+6287817695973"
                    class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group text-sm"
                    data-aos="zoom-in" data-aos-duration="600" data-aos-delay="100">
                    <i class="bi bi-telephone mr-2"></i>
                    Telepon Sekarang
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
@endsection

@section('scripts')
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
                const hero = document.querySelector('.relative.min-h-\\[60vh\\]');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.3}px)`;
                }
            });

            // FAQ Accordion
            document.querySelectorAll('.bg-white.rounded-xl.p-4.border').forEach(item => {
                item.addEventListener('click', function() {
                    this.classList.toggle('active');
                    const icon = this.querySelector('i.bi-plus-circle');
                    if (this.classList.contains('active')) {
                        icon.classList.remove('bi-plus-circle');
                        icon.classList.add('bi-dash-circle');
                    } else {
                        icon.classList.remove('bi-dash-circle');
                        icon.classList.add('bi-plus-circle');
                    }
                });
            });

            // Form submission handling
            const contactForm = document.querySelector('form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    // In a real implementation, you would send the form data to your server
                    alert('Terima kasih! Pesan Anda telah berhasil dikirim. Kami akan segera merespons.');
                    contactForm.reset();
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
    </script>

    <style>
        /* Slimmer custom animations untuk contact page */
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

        /* Form focus styles */
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.1);
        }

        /* FAQ accordion transition */
        .bg-white.rounded-xl.p-4.border .hidden {
            transition: all 0.3s ease;
        }
    </style>
@endsection