@extends('layouts.app')

@section('title', 'Hubungi Kami | Jaya Abadi Konstruksi')

@section('content')
    <!-- Enhanced Hero Section -->
    <section
        class="relative min-h-[70vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-gray-900 via-blue-900 to-cyan-900">
        <!-- Animated Background -->
        <div class="absolute inset-0 bg-black/40 z-0"></div>
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/80 to-cyan-900/60 z-10"></div>
            <img src="{{ asset('images/projects/proyek4.jpg') }}" alt="Contact Hero"
                class="w-full h-full object-cover transform scale-110 animate-slow-zoom">
        </div>

        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-6 h-6 bg-cyan-400 rounded-full opacity-70 animate-float"></div>
        <div class="absolute bottom-32 right-16 w-10 h-10 bg-blue-500 rounded-full opacity-50 animate-float-delayed"></div>
        <div class="absolute top-1/3 right-1/4 w-8 h-8 bg-white rounded-full opacity-30 animate-pulse-slow"></div>

        <!-- Content Hero -->
        <div class="relative z-20 max-w-7xl mx-auto px-6 text-center text-white">
            <div data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                <div class="mt-12 inline-block mb-4 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                    <span class="text-cyan-300 font-medium">Hubungi Jaya Abadi Konstruksi</span>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    <span
                        class="bg-gradient-to-r from-blue-400 via-cyan-300 to-blue-500 bg-clip-text text-transparent animate-gradient-x">
                        Mari Berkolaborasi
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto leading-relaxed font-light">
                    Siap membantu mewujudkan <span class="text-cyan-300 font-semibold">proyek konstruksi besi</span> Anda
                    dengan solusi terbaik
                </p>
                <div class="mb-12 flex flex-col sm:flex-row gap-4 justify-center items-center" data-aos="fade-up"
                    data-aos-delay="400" data-aos-once="true">
                    <a href="#contact-form"
                        class="group bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center shadow-blue-500/30">
                        <span>Kirim Pesan</span>
                        <i class="bi bi-send ml-2 group-hover:translate-y-1 transition-transform duration-300"></i>
                    </a>
                    <a href="https://wa.me/6287817695973"
                        class="group border-2 border-white/40 hover:border-white text-white px-8 py-4 rounded-2xl font-semibold backdrop-blur-sm hover:bg-white/10 transition-all duration-300 flex items-center bg-white/5">
                        <span>WhatsApp</span>
                        <i class="bi bi-whatsapp ml-2 group-hover:scale-110 transition-transform duration-300"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50/30">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
            <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                <i class="bi bi-telephone mr-2"></i>
                INFORMASI KONTAK
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                Tim kami siap membantu menjawab pertanyaan dan memberikan solusi terbaik untuk proyek Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16 justify-items-center">
            <!-- Phone Card -->
            <div class="bg-white rounded-2xl p-6 sm:p-8 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200 hover:-translate-y-2 w-full max-w-xs sm:max-w-none"
                data-aos="fade-up" data-aos-duration="800">
                <div
                    class="bg-gradient-to-br from-blue-500 to-blue-600 w-14 h-14 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-lg">
                    <i class="bi bi-telephone text-xl sm:text-2xl text-white"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Telepon</h3>
                <p class="text-gray-600 text-sm sm:text-base mb-2">Hubungi kami langsung</p>
                <a href="tel:+6287817695973"
                    class="text-blue-600 font-semibold text-base sm:text-lg hover:text-blue-700 transition-colors break-words">
                    +62 878-1769-5973
                </a>
            </div>

            <!-- WhatsApp Card -->
            <div class="bg-white rounded-2xl p-6 sm:p-8 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-green-200 hover:-translate-y-2 w-full max-w-xs sm:max-w-none"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                <div
                    class="bg-gradient-to-br from-green-500 to-green-600 w-14 h-14 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-lg">
                    <i class="bi bi-whatsapp text-xl sm:text-2xl text-white"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">WhatsApp</h3>
                <p class="text-gray-600 text-sm sm:text-base mb-2">Chat langsung</p>
                <a href="https://wa.me/6287817695973"
                    class="text-green-600 font-semibold text-base sm:text-lg hover:text-green-700 transition-colors break-words">
                    +62 878-1769-5973
                </a>
            </div>

            <!-- Email Card -->
            <div class="bg-white rounded-2xl p-6 sm:p-8 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-cyan-200 hover:-translate-y-2 w-full max-w-xs sm:max-w-none"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div
                    class="bg-gradient-to-br from-cyan-500 to-cyan-600 w-14 h-14 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-lg">
                    <i class="bi bi-envelope text-xl sm:text-2xl text-white"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Email</h3>
                <p class="text-gray-600 text-sm sm:text-base mb-2">Kirim email kepada kami</p>
                <a href="mailto:info@jayaabadikonstruksi.com"
                    class="text-cyan-600 font-semibold text-base sm:text-lg hover:text-cyan-700 transition-colors break-words">
                    lasjayaabadi123@gmail.com
                </a>
            </div>

            <!-- Location Card -->
            <div class="bg-white rounded-2xl p-6 sm:p-8 text-center group hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-200 hover:-translate-y-2 w-full max-w-xs sm:max-w-none"
                data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div
                    class="bg-gradient-to-br from-purple-500 to-purple-600 w-14 h-14 sm:w-16 sm:h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 sm:mb-6 shadow-lg">
                    <i class="bi bi-geo-alt text-xl sm:text-2xl text-white"></i>
                </div>
                <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-3 sm:mb-4">Lokasi</h3>
                <p class="text-gray-600 text-sm sm:text-base mb-2">Kunjungi kantor kami</p>
                <p class="text-gray-800 font-medium text-sm sm:text-base">
                    Jl. Raya Tapos No.72, Depok
                </p>
            </div>
        </div>

        <!-- Office Hours & Response Time -->
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            <div data-aos="fade-right" data-aos-duration="1000">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">Jam Operasional & Waktu Respon</h3>

                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="bg-blue-100 p-3 rounded-2xl mr-4 flex-shrink-0">
                            <i class="bi bi-clock text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-lg mb-1">Jam Operasional</h4>
                            <p class="text-gray-600">Senin - Jumat: 08:00 - 17:00 WIB</p>
                            <p class="text-gray-600">Sabtu: 08:00 - 12:00 WIB</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-green-100 p-3 rounded-2xl mr-4 flex-shrink-0">
                            <i class="bi bi-whatsapp text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-lg mb-1">Respon WhatsApp</h4>
                            <p class="text-gray-600">1-2 jam dalam jam operasional</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="bg-cyan-100 p-3 rounded-2xl mr-4 flex-shrink-0">
                            <i class="bi bi-envelope text-cyan-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 text-lg mb-1">Respon Email</h4>
                            <p class="text-gray-600">Maksimal 24 jam</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 md:p-8 border border-blue-100 mt-8 md:mt-0"
                data-aos="fade-left" data-aos-duration="1000">
                <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">Mengapa Memilih Kami?</h3>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <i class="bi bi-check-circle-fill text-green-500 mr-3 text-lg md:text-xl"></i>
                        <span class="text-gray-700 text-sm md:text-base">Konsultasi gratis tanpa biaya</span>
                    </div>
                    <div class="flex items-center">
                        <i class="bi bi-check-circle-fill text-green-500 mr-3 text-lg md:text-xl"></i>
                        <span class="text-gray-700 text-sm md:text-base">Estimasi biaya yang transparan</span>
                    </div>
                    <div class="flex items-center">
                        <i class="bi bi-check-circle-fill text-green-500 mr-3 text-lg md:text-xl"></i>
                        <span class="text-gray-700 text-sm md:text-base">Survey lokasi untuk proyek besar</span>
                    </div>
                    <div class="flex items-center">
                        <i class="bi bi-check-circle-fill text-green-500 mr-3 text-lg md:text-xl"></i>
                        <span class="text-gray-700 text-sm md:text-base">Garansi pengerjaan dan material</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Contact Form Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden" id="contact-form">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-0 w-72 h-72 bg-blue-100 rounded-full -translate-x-1/2 -translate-y-1/2 opacity-40 blur-3xl">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-100 rounded-full translate-x-1/2 translate-y-1/2 opacity-30 blur-3xl">
        </div>

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Contact Form -->
                <div class="bg-white rounded-3xl p-10 shadow-2xl border border-gray-100 relative overflow-hidden"
                    data-aos="fade-right" data-aos-duration="1000">
                    <div class="absolute top-0 right-0 w-48 h-48 bg-blue-50 rounded-full -translate-y-1/2 translate-x-1/2">
                    </div>

                    <div class="relative z-10">
                        <div
                            class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                            <i class="bi bi-chat-dots mr-2"></i>
                            KIRIM PESAN
                        </div>
                        <h2 class="text-4xl font-bold text-gray-800 mb-2">Hubungi Kami</h2>
                        <p class="text-gray-600 mb-8">Isi formulir di bawah ini dan kami akan segera merespons</p>

                        <form class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-gray-700 font-medium mb-2">Nama
                                        Lengkap</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-person text-gray-400"></i>
                                        </div>
                                        <input type="text" id="name"
                                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                            placeholder="Masukkan nama lengkap">
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-envelope text-gray-400"></i>
                                        </div>
                                        <input type="email" id="email"
                                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                            placeholder="email@contoh.com">
                                    </div>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-gray-700 font-medium mb-2">Nomor
                                        Telepon</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-telephone text-gray-400"></i>
                                        </div>
                                        <input type="tel" id="phone"
                                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                            placeholder="+62 xxx xxxx xxxx">
                                    </div>
                                </div>
                                <div>
                                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subjek</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="bi bi-chat-square-text text-gray-400"></i>
                                        </div>
                                        <input type="text" id="subject"
                                            class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300"
                                            placeholder="Subjek pesan">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="service" class="block text-gray-700 font-medium mb-2">Jenis Layanan</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <i class="bi bi-tools text-gray-400"></i>
                                    </div>
                                    <select id="service"
                                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 appearance-none">
                                        <option value="">Pilih jenis layanan</option>
                                        <option value="konstruksi-baja">Konstruksi Struktur Baja</option>
                                        <option value="fabrikasi-custom">Fabrikasi Custom</option>
                                        <option value="perbaikan-maintenance">Perbaikan & Maintenance</option>
                                        <option value="konsultasi">Konsultasi Proyek</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                        <i class="bi bi-chevron-down text-gray-400"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-gray-700 font-medium mb-2">Pesan</label>
                                <div class="relative">
                                    <div class="absolute top-3 left-3 pointer-events-none">
                                        <i class="bi bi-pencil text-gray-400"></i>
                                    </div>
                                    <textarea id="message" rows="5"
                                        class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 resize-none"
                                        placeholder="Jelaskan kebutuhan proyek atau pertanyaan Anda"></textarea>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 text-white py-4 rounded-2xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group">
                                <span>Kirim Pesan</span>
                                <i class="bi bi-send ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- FAQ & Additional Info -->
                <div data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-6">
                        <i class="bi bi-question-circle mr-2"></i>
                        PERTANYAAN UMUM
                    </div>
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">FAQ</h2>

                    <div class="space-y-6">
                        <div
                            class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-lg">Berapa lama waktu pengerjaan proyek?</h3>
                                <i class="bi bi-plus-circle text-blue-500 group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-4 text-gray-600 hidden group-[.active]:block">
                                Waktu pengerjaan bervariasi tergantung kompleksitas dan skala proyek. Untuk proyek kecil
                                biasanya 1-2 minggu, sedangkan proyek besar bisa memakan waktu 1-3 bulan.
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-lg">Apakah tersedia layanan survey lokasi?</h3>
                                <i class="bi bi-plus-circle text-blue-500 group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-4 text-gray-600 hidden group-[.active]:block">
                                Ya, kami menyediakan layanan survey lokasi gratis untuk proyek dengan nilai di atas Rp 50
                                juta. Untuk proyek kecil, kami dapat memberikan konsultasi melalui telepon atau video call.
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-lg">Bagaimana sistem pembayaran?</h3>
                                <i class="bi bi-plus-circle text-blue-500 group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-4 text-gray-600 hidden group-[.active]:block">
                                Pembayaran biasanya dilakukan dengan sistem termin: 30% di awal, 40% saat pekerjaan tengah
                                berjalan, dan 30% setelah proyek selesai. Namun, kami fleksibel menyesuaikan dengan
                                kebutuhan klien.
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300 group">
                            <div class="flex justify-between items-center cursor-pointer">
                                <h3 class="font-bold text-gray-800 text-lg">Apakah material disediakan oleh perusahaan?
                                </h3>
                                <i class="bi bi-plus-circle text-blue-500 group-hover:text-blue-600 transition-colors"></i>
                            </div>
                            <div class="mt-4 text-gray-600 hidden group-[.active]:block">
                                Ya, kami menyediakan material berkualitas dengan sertifikasi SNI. Kami juga dapat bekerja
                                dengan material yang disediakan klien, dengan catatan kualitas material sesuai standar kami.
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact -->
                    <div class="mt-12 bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl p-8 text-white text-center">
                        <div
                            class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4 backdrop-blur-sm">
                            <i class="bi bi-telephone text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Darurat?</h3>
                        <p class="mb-4 opacity-90">Untuk kebutuhan mendesak di luar jam operasional</p>
                        <a href="tel:+6287817695973"
                            class="inline-flex items-center bg-white text-red-600 px-6 py-3 rounded-xl font-bold hover:bg-gray-100 transition-colors">
                            <i class="bi bi-telephone mr-2"></i>
                            +62 878-1769-5973
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50/30">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center px-4 py-2 bg-blue-100 rounded-full text-blue-700 font-medium mb-4">
                    <i class="bi bi-geo-alt mr-2"></i>
                    LOKASI KAMI
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Kunjungi Kantor Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    Datang langsung ke kantor kami untuk konsultasi lebih lanjut tentang proyek Anda
                </p>
            </div>

            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Map -->
                <div class="lg:col-span-2 rounded-3xl overflow-hidden shadow-2xl border border-gray-200"
                    data-aos="fade-right" data-aos-duration="1000">
                    <div class="h-96 w-full">
                        <!-- Google Maps Embed -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.616388486493!2d106.87203447509728!3d-6.443277793548023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edd4373a1473%3A0x6dbcd5444d3a5113!2sJaya%20Abadi%20Konstruksi!5e0!3m2!1sid!2sid!4v1763347707180!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="w-full h-full">
                        </iframe>
                    </div>
                </div>

                <!-- Location Details -->
                <div class="space-y-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-blue-100 p-3 rounded-2xl mr-4">
                                <i class="bi bi-geo-alt text-blue-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg mb-1">Alamat</h3>
                                <p class="text-gray-600">Jl. Raya Tapos No.72</p>
                                <p class="text-gray-600">Kelurahan Cimpaeun, Kecamatan Tapos</p>
                                <p class="text-gray-600">Depok 16459</p>
                            </div>
                        </div>
                        <a href="https://maps.app.goo.gl/mLdaf42cteyBmtNY6"
                            class="inline-flex items-center text-blue-600 font-medium hover:text-blue-700 transition-colors">
                            <i class="bi bi-compass mr-2"></i>
                            Dapatkan Petunjuk Arah
                        </a>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                        <div class="flex items-start mb-4">
                            <div class="bg-green-100 p-3 rounded-2xl mr-4">
                                <i class="bi bi-car-front text-green-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg mb-1">Parkir</h3>
                                <p class="text-gray-600">Tersedia area parkir yang aman untuk kendaraan roda dua
                                    dan empat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
                        <div class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-2xl mr-4">
                                <i class="bi bi-bus-front text-purple-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg mb-1">Akses Transportasi</h3>
                                <p class="text-gray-600">Mudah dijangkau dengan kendaraan pribadi maupun transportasi umum.
                                </p>
                            </div>
                        </div>
                    </div>
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
                Hubungi kami hari ini untuk konsultasi gratis dan dapatkan penawaran terbaik untuk proyek konstruksi besi
                Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-5 justify-center">
                <a href="tel:+6287817695973"
                    class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-2xl font-semibold shadow-2xl transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center group"
                    data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <i class="bi bi-telephone mr-3 text-lg"></i>
                    Telepon Sekarang
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
                const hero = document.querySelector('.relative.min-h-\\[70vh\\]');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });

            // FAQ Accordion
            document.querySelectorAll('.bg-white.rounded-2xl.p-6.border').forEach(item => {
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
                setTimeout(() => AOS.refresh(), 500);
            });
        });
    </script>

    <style>
        /* Enhanced custom animations untuk contact page */
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

        /* Form focus styles */
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        /* FAQ accordion transition */
        .bg-white.rounded-2xl.p-6.border .hidden {
            transition: all 0.3s ease;
        }
    </style>
@endsection
