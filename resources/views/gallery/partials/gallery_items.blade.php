@foreach ($paginatedImages as $image)
    <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-lg border border-gray-100 transform transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
        data-category="{{ $image['category'] }}">
        <div class="aspect-[4/3] overflow-hidden">
            <img src="{{ asset($image['path']) }}" alt="{{ $image['title'] }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy"
                onerror="this.src='https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80'">
        </div>
        <div
            class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-4">
            <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                <div
                    class="inline-flex items-center px-2 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-xs font-medium mb-2">
                    <i class="bi bi-tag mr-1 text-xs"></i>
                    <span class="category-text">
                        {{ $image['category_text'] }}
                    </span>
                </div>
                <h3 class="text-base font-bold text-white mb-1">{{ $image['title'] }}</h3>
                <p class="text-gray-200 text-xs mb-3 line-clamp-2">
                    {{ $image['description'] }}
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-cyan-300 font-semibold text-xs">
                        {{ $image['duration'] }}
                    </span>
                </div>
            </div>
        </div>  
    </div>
@endforeach