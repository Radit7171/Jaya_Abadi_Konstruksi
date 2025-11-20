@if ($paginatedImages->hasPages())
    <div class="mt-8" data-aos="fade-up" data-aos-duration="600">
        <!-- Mobile Pagination (Slimmer) -->
        <div class="flex flex-col sm:flex-row justify-center items-center gap-3 sm:gap-1 lg:hidden">
            <!-- Previous Button -->
            @if ($paginatedImages->onFirstPage())
                <span
                    class="w-full sm:w-auto px-3 py-2 bg-gray-100 text-gray-400 rounded-lg font-medium cursor-not-allowed text-center text-xs">
                    <i class="bi bi-chevron-left mr-1 text-xs"></i>Sebelumnya
                </span>
            @else
                <a href="{{ $paginatedImages->previousPageUrl() }}"
                    class="w-full sm:w-auto px-3 py-2 bg-white text-blue-600 border border-gray-200 rounded-lg font-medium shadow-sm transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center hover:shadow text-xs ajax-pagination-link"
                    data-page="{{ $paginatedImages->currentPage() - 1 }}">
                    <i class="bi bi-chevron-left mr-1 text-xs"></i>Sebelumnya
                </a>
            @endif

            <!-- Page Info Mobile -->
            <div class="text-gray-600 text-xs font-medium bg-white px-3 py-2 rounded-lg border border-gray-200">
                {{ $paginatedImages->currentPage() }} / {{ $paginatedImages->lastPage() }}
            </div>

            <!-- Next Button -->
            @if ($paginatedImages->hasMorePages())
                <a href="{{ $paginatedImages->nextPageUrl() }}"
                    class="w-full sm:w-auto px-3 py-2 bg-white text-blue-600 border border-gray-200 rounded-lg font-medium shadow-sm transform hover:-translate-y-0.5 transition-all duration-200 flex items-center justify-center hover:shadow text-xs ajax-pagination-link"
                    data-page="{{ $paginatedImages->currentPage() + 1 }}">
                    Selanjutnya<i class="bi bi-chevron-right ml-1 text-xs"></i>
                </a>
            @else
                <span
                    class="w-full sm:w-auto px-3 py-2 bg-gray-100 text-gray-400 rounded-lg font-medium cursor-not-allowed text-center text-xs">
                    Selanjutnya<i class="bi bi-chevron-right ml-1 text-xs"></i>
                </span>
            @endif
        </div>

        <!-- Desktop Pagination (Slimmer) -->
        <div class="hidden lg:flex justify-center items-center space-x-1">
            <!-- Previous Button -->
            @if ($paginatedImages->onFirstPage())
                <span class="px-3 py-1.5 bg-gray-100 text-gray-400 rounded-lg font-medium cursor-not-allowed text-xs">
                    <i class="bi bi-chevron-left mr-1 text-xs"></i>Prev
                </span>
            @else
                <a href="{{ $paginatedImages->previousPageUrl() }}"
                    class="ajax-pagination-link px-3 py-1.5 bg-white text-blue-600 border border-gray-200 rounded-lg font-medium shadow-sm transform hover:-translate-y-0.5 transition-all duration-200 flex items-center hover:shadow text-xs"
                    data-page="{{ $paginatedImages->currentPage() - 1 }}">
                    <i class="bi bi-chevron-left mr-1 text-xs"></i>Prev
                </a>
            @endif

            <!-- Page Numbers -->
            <div class="flex space-x-1">
                @php
                    $currentPage = $paginatedImages->currentPage();
                    $lastPage = $paginatedImages->lastPage();
                    $startPage = max(1, $currentPage - 1);
                    $endPage = min($lastPage, $currentPage + 1);
                @endphp

                <!-- First Page -->
                @if ($startPage > 1)
                    <a href="{{ $paginatedImages->url(1) }}"
                        class="ajax-pagination-link px-2.5 py-1.5 bg-white text-gray-700 border border-gray-200 rounded-lg font-medium hover:border-blue-500 hover:text-blue-600 transform hover:-translate-y-0.5 transition-all duration-200 text-xs"
                        data-page="1">
                        1
                    </a>
                    @if ($startPage > 2)
                        <span class="px-1.5 py-1.5 text-gray-400 text-xs">...</span>
                    @endif
                @endif

                <!-- Page Numbers Range -->
                @for ($page = $startPage; $page <= $endPage; $page++)
                    @if ($page == $paginatedImages->currentPage())
                        <span
                            class="px-2.5 py-1.5 bg-gradient-to-r from-blue-600 to-cyan-500 text-white rounded-lg font-medium shadow-sm text-xs">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $paginatedImages->url($page) }}"
                            class="ajax-pagination-link px-2.5 py-1.5 bg-white text-gray-700 border border-gray-200 rounded-lg font-medium hover:border-blue-500 hover:text-blue-600 transform hover:-translate-y-0.5 transition-all duration-200 text-xs"
                            data-page="{{ $page }}">
                            {{ $page }}
                        </a>
                    @endif
                @endfor

                <!-- Last Page -->
                @if ($endPage < $lastPage)
                    @if ($endPage < $lastPage - 1)
                        <span class="px-1.5 py-1.5 text-gray-400 text-xs">...</span>
                    @endif
                    <a href="{{ $paginatedImages->url($lastPage) }}"
                        class="ajax-pagination-link px-2.5 py-1.5 bg-white text-gray-700 border border-gray-200 rounded-lg font-medium hover:border-blue-500 hover:text-blue-600 transform hover:-translate-y-0.5 transition-all duration-200 text-xs"
                        data-page="{{ $lastPage }}">
                        {{ $lastPage }}
                    </a>
                @endif
            </div>

            <!-- Next Button -->
            @if ($paginatedImages->hasMorePages())
                <a href="{{ $paginatedImages->nextPageUrl() }}"
                    class="ajax-pagination-link px-3 py-1.5 bg-white text-blue-600 border border-gray-200 rounded-lg font-medium shadow-sm transform hover:-translate-y-0.5 transition-all duration-200 flex items-center hover:shadow text-xs"
                    data-page="{{ $paginatedImages->currentPage() + 1 }}">
                    Next<i class="bi bi-chevron-right ml-1 text-xs"></i>
                </a>
            @else
                <span class="px-3 py-1.5 bg-gray-100 text-gray-400 rounded-lg font-medium cursor-not-allowed text-xs">
                    Next<i class="bi bi-chevron-right ml-1 text-xs"></i>
                </span>
            @endif
        </div>

        <!-- Page Info - Slimmer -->
        <div class="text-center mt-3 text-gray-500 text-xs">
            <span class="font-medium">{{ $paginatedImages->firstItem() }}-{{ $paginatedImages->lastItem() }}</span> dari 
            <span class="font-medium">{{ $paginatedImages->total() }}</span>
        </div>
    </div>
@endif