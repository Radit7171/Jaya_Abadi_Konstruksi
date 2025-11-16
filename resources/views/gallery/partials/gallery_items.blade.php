@foreach ($paginatedImages as $image)
    <div class="gallery-item group relative overflow-hidden rounded-3xl shadow-xl border border-gray-100 transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl"
        data-category="{{ $image['category'] }}">
        <div class="aspect-[4/3] overflow-hidden">
            <img src="{{ asset($image['path']) }}" alt="{{ $image['title'] }}"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" loading="lazy"
                onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'">
        </div>
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-6">
            <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                <div
                    class="inline-flex items-center px-3 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm font-medium mb-3">
                    <i class="bi bi-tag mr-2"></i>
                    <span class="category-text">
                        {{ $image['category_text'] }}
                    </span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">{{ $image['title'] }}</h3>
                <p class="text-gray-200 text-sm mb-4 line-clamp-2">
                    {{ $image['description'] }}
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-cyan-300 font-semibold text-sm">
                        {{ $image['duration'] }}
                    </span>
                </div>
            </div>
        </div>
    </div>
@endforeach
