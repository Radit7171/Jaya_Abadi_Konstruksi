@if ($paginatedImages->hasPages())
    <div class="mt-12" data-aos="fade-up" data-aos-duration="1000">
        <!-- Mobile Pagination (Simplified) -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4 sm:gap-2 lg:hidden">
            <!-- Previous Button -->
            @if ($paginatedImages->onFirstPage())
                <span
                    class="w-full sm:w-auto px-4 py-3 bg-gray-100 text-gray-400 rounded-xl font-semibold cursor-not-allowed text-center text-sm">
                    <i class="bi bi-chevron-left mr-1"></i>Sebelumnya
                </span>
            @else
                <a href="{{ $paginatedImages->previousPageUrl() }}"
                    class="w-full sm:w-auto px-4 py-3 bg-white text-blue-600 border border-gray-200 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center hover:shadow-xl text-sm ajax-pagination-link"
                    data-page="{{ $paginatedImages->currentPage() - 1 }}">
                    <i class="bi bi-chevron-left mr-1"></i>Sebelumnya
                </a>
            @endif

            <!-- Page Info Mobile -->
            <div class="text-gray-600 text-sm font-medium bg-white px-4 py-3 rounded-xl border border-gray-200">
                Halaman {{ $paginatedImages->currentPage() }} dari {{ $paginatedImages->lastPage() }}
            </div>

            <!-- Next Button -->
            @if ($paginatedImages->hasMorePages())
                <a href="{{ $paginatedImages->nextPageUrl() }}"
                    class="w-full sm:w-auto px-4 py-3 bg-white text-blue-600 border border-gray-200 rounded-xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center hover:shadow-xl text-sm ajax-pagination-link"
                    data-page="{{ $paginatedImages->currentPage() + 1 }}">
                    Selanjutnya<i class="bi bi-chevron-right ml-1"></i>
                </a>
            @else
                <span
                    class="w-full sm:w-auto px-4 py-3 bg-gray-100 text-gray-400 rounded-xl font-semibold cursor-not-allowed text-center text-sm">
                    Selanjutnya<i class="bi bi-chevron-right ml-1"></i>
                </span>
            @endif
        </div>

        <!-- Desktop Pagination (Full) -->
        <div class="hidden lg:flex justify-center items-center space-x-2">
            <!-- Previous Button -->
            @if ($paginatedImages->onFirstPage())
                <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-2xl font-semibold cursor-not-allowed text-sm">
                    <i class="bi bi-chevron-left mr-2"></i>Sebelumnya
                </span>
            @else
                <a href="{{ $paginatedImages->previousPageUrl() }}"
                    class="ajax-pagination-link px-4 py-2 bg-white text-blue-600 border border-gray-200 rounded-2xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center hover:shadow-xl text-sm"
                    data-page="{{ $paginatedImages->currentPage() - 1 }}">
                    <i class="bi bi-chevron-left mr-2"></i>Sebelumnya
                </a>
            @endif

            <!-- Page Numbers -->
            <div class="flex space-x-1">
                @php
                    $currentPage = $paginatedImages->currentPage();
                    $lastPage = $paginatedImages->lastPage();
                    $startPage = max(1, $currentPage - 2);
                    $endPage = min($lastPage, $currentPage + 2);
                @endphp

                <!-- First Page -->
                @if ($startPage > 1)
                    <a href="{{ $paginatedImages->url(1) }}"
                        class="ajax-pagination-link px-3 py-2 bg-white text-gray-700 border border-gray-200 rounded-2xl font-semibold hover:border-blue-500 hover:text-blue-600 transform hover:-translate-y-1 transition-all duration-300 text-sm"
                        data-page="1">
                        1
                    </a>
                    @if ($startPage > 2)
                        <span class="px-2 py-2 text-gray-500">...</span>
                    @endif
                @endif

                <!-- Page Numbers Range -->
                @for ($page = $startPage; $page <= $endPage; $page++)
                    @if ($page == $paginatedImages->currentPage())
                        <span
                            class="px-3 py-2 bg-gradient-to-r from-blue-600 to-cyan-500 text-white rounded-2xl font-semibold shadow-lg text-sm">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $paginatedImages->url($page) }}"
                            class="ajax-pagination-link px-3 py-2 bg-white text-gray-700 border border-gray-200 rounded-2xl font-semibold hover:border-blue-500 hover:text-blue-600 transform hover:-translate-y-1 transition-all duration-300 text-sm"
                            data-page="{{ $page }}">
                            {{ $page }}
                        </a>
                    @endif
                @endfor

                <!-- Last Page -->
                @if ($endPage < $lastPage)
                    @if ($endPage < $lastPage - 1)
                        <span class="px-2 py-2 text-gray-500">...</span>
                    @endif
                    <a href="{{ $paginatedImages->url($lastPage) }}"
                        class="ajax-pagination-link px-3 py-2 bg-white text-gray-700 border border-gray-200 rounded-2xl font-semibold hover:border-blue-500 hover:text-blue-600 transform hover:-translate-y-1 transition-all duration-300 text-sm"
                        data-page="{{ $lastPage }}">
                        {{ $lastPage }}
                    </a>
                @endif
            </div>

            <!-- Next Button -->
            @if ($paginatedImages->hasMorePages())
                <a href="{{ $paginatedImages->nextPageUrl() }}"
                    class="ajax-pagination-link px-4 py-2 bg-white text-blue-600 border border-gray-200 rounded-2xl font-semibold shadow-lg transform hover:-translate-y-1 transition-all duration-300 flex items-center hover:shadow-xl text-sm"
                    data-page="{{ $paginatedImages->currentPage() + 1 }}">
                    Selanjutnya<i class="bi bi-chevron-right ml-2"></i>
                </a>
            @else
                <span class="px-4 py-2 bg-gray-100 text-gray-400 rounded-2xl font-semibold cursor-not-allowed text-sm">
                    Selanjutnya<i class="bi bi-chevron-right ml-2"></i>
                </span>
            @endif
        </div>

        <!-- Page Info -->
        <div class="text-center mt-4 text-gray-600 text-sm">
            Menampilkan <span class="font-semibold">{{ $paginatedImages->firstItem() }}</span> -
            <span class="font-semibold">{{ $paginatedImages->lastItem() }}</span> dari
            <span class="font-semibold">{{ $paginatedImages->total() }}</span> proyek
        </div>
    </div>
@endif
