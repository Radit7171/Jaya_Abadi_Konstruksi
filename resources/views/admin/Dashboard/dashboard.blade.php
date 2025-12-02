@extends('admin.appAdmin')

@section('title', 'Dashboard Admin - Jaya Abadi Konstruksi')
@section('page-title', 'Dashboard')

@section('content')
<!-- Stats Overview - Compact -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
    <div class="stats-card border-l-blue-500">
        <div class="flex items-center">
            <div class="p-2 rounded bg-blue-50 text-blue-600 mr-3">
                <i class="bi bi-images text-sm"></i>
            </div>
            <div>
                <p class="text-xs text-slate-500">Total Photos</p>
                <h3 class="text-lg font-semibold text-slate-800" id="totalPhotos">Loading...</h3>
            </div>
        </div>
    </div>

    <div class="stats-card border-l-green-500">
        <div class="flex items-center">
            <div class="p-2 rounded bg-green-50 text-green-600 mr-3">
                <i class="bi bi-collection-play text-sm"></i>
            </div>
            <div>
                <p class="text-xs text-slate-500">Projects</p>
                <h3 class="text-lg font-semibold text-slate-800" id="totalProjects">Loading...</h3>
            </div>
        </div>
    </div>

    <div class="stats-card border-l-purple-500">
        <div class="flex items-center">
            <div class="p-2 rounded bg-purple-50 text-purple-600 mr-3">
                <i class="bi bi-eye text-sm"></i>
            </div>
            <div>
                <p class="text-xs text-slate-500">Views This Month</p>
                <h3 class="text-lg font-semibold text-slate-800" id="viewsThisMonth">Loading...</h3>
            </div>
        </div>
    </div>

    <div class="stats-card border-l-orange-500">
        <div class="flex items-center">
            <div class="p-2 rounded bg-orange-50 text-orange-600 mr-3">
                <i class="bi bi-upload text-sm"></i>
            </div>
            <div>
                <p class="text-xs text-slate-500">Uploads Today</p>
                <h3 class="text-lg font-semibold text-slate-800" id="uploadsToday">Loading...</h3>
            </div>
        </div>
    </div>
</div>

<!-- Upload Section - Compact -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <!-- Upload Form -->
    <div class="card p-4">
        <h2 class="text-base font-semibold text-slate-800 mb-3">Upload New Photos</h2>

        <form id="uploadForm" class="space-y-3" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="photoTitle" class="block text-xs font-medium text-slate-700 mb-1">Photo
                    Title</label>
                <input type="text" id="photoTitle" name="title"
                    class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter photo title">
            </div>

            <div>
                <label for="photoCategory"
                    class="block text-xs font-medium text-slate-700 mb-1">Category</label>
                <select id="photoCategory" name="category"
                    class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Select Category</option>
                    <option value="construction">Construction Projects</option>
                    <option value="design">Design Concepts</option>
                    <option value="completed">Completed Works</option>
                    <option value="process">Work in Progress</option>
                </select>
            </div>

            <div>
                <label for="photoDescription"
                    class="block text-xs font-medium text-slate-700 mb-1">Description</label>
                <textarea id="photoDescription" name="description" rows="2"
                    class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Enter photo description"></textarea>
            </div>

            <div>
                <label class="block text-xs font-medium text-slate-700 mb-1">Upload Photos</label>
                <div id="uploadArea"
                    class="upload-area border-1.5 border-dashed rounded p-4 text-center cursor-pointer">
                    <i class="bi bi-cloud-arrow-up text-2xl text-slate-400 mb-1"></i>
                    <p class="text-slate-600 text-xs mb-1">Drag & drop your photos here</p>
                    <p class="text-slate-500 text-xs">or</p>
                    <button type="button" id="browseButton"
                        class="btn-primary text-white px-3 py-1.5 rounded text-xs mt-1 inline-flex items-center">
                        <i class="bi bi-folder2-open mr-1"></i> Browse Files
                    </button>
                    <input type="file" id="fileInput" name="photos[]" multiple accept="image/*"
                        class="hidden">
                    <p class="text-slate-500 text-xs mt-1">Supports: JPG, PNG, GIF</p>
                </div>

                <!-- Image Previews -->
                <div id="imagePreviews" class="preview-container mt-3 hidden"></div>

                <div id="fileList" class="mt-3 space-y-1 hidden">
                    <h4 class="text-xs font-medium text-slate-700">Selected Files:</h4>
                    <ul id="fileNames" class="text-xs text-slate-600 space-y-0.5"></ul>
                </div>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="featured" name="featured"
                    class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-slate-300 rounded">
                <label for="featured" class="ml-2 text-xs text-slate-700">
                    Mark as featured photo
                </label>
            </div>

            <button type="submit" id="uploadButton"
                class="btn-primary text-white w-full py-2 rounded text-sm flex items-center justify-center">
                <i class="bi bi-cloud-upload mr-1.5"></i> Upload Photos
            </button>
        </form>
    </div>

    <!-- Recent Uploads - Compact -->
    <div class="card p-4">
        <div class="flex justify-between items-center mb-3">
            <h2 class="text-base font-semibold text-slate-800">Recent Uploads</h2>
            <a href="#" class="text-blue-600 hover:text-blue-800 text-xs font-medium">
                View All
            </a>
        </div>

        <div id="recentUploads" class="space-y-2">
            <!-- Recent uploads will be populated dynamically -->
            <div class="text-center py-4 text-slate-500">
                <div class="loading-spinner inline-block mr-2"></div>
                Loading recent uploads...
            </div>
        </div>
    </div>
</div>

<!-- Photo Gallery with Edit & Delete Features -->
<!-- Photo Gallery with Edit & Delete Features -->
<div class="card p-4">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 gap-2">
        <h2 class="text-base font-semibold text-slate-800">Photo Gallery</h2>
        <div class="flex space-x-2">
            <select id="categoryFilter" class="px-2 py-1.5 border border-slate-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500">
                <option value="">All Categories</option>
                <option value="construction">Construction Projects</option>
                <option value="design">Design Concepts</option>
                <option value="completed">Completed Works</option>
                <option value="process">Work in Progress</option>
            </select>
            <input type="text" id="searchInput" placeholder="Search photos..."
                class="px-2 py-1.5 border border-slate-300 rounded text-xs focus:outline-none focus:ring-1 focus:ring-blue-500 w-32">
        </div>
    </div>

    <div id="photoGallery"
        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        <!-- Gallery items will be populated dynamically -->
        <div class="text-center col-span-full py-8 text-slate-500">
            <div class="loading-spinner inline-block mr-2"></div>
            Loading gallery...
        </div>
    </div>

    <!-- Pagination -->
    <div id="pagination" class="mt-6 flex justify-center items-center space-x-2 hidden">
        <!-- Pagination will be inserted here by JavaScript -->
    </div>
</div>

<!-- Edit Photo Modal -->
<div id="editPhotoModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg p-6 w-full max-w-md mx-4">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-semibold text-slate-800">Edit Photo</h3>
            <button type="button" id="closeEditModal" class="text-slate-400 hover:text-slate-600">
                <i class="bi bi-x-lg text-lg"></i>
            </button>
        </div>

        <form id="editPhotoForm" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="editPhotoId" name="id">

            <div class="space-y-4">
                <!-- Current Image Preview -->
                <div id="currentImagePreview" class="text-center">
                    <img id="currentImage" src="" alt="Current Photo" class="mx-auto max-h-48 rounded-lg">
                </div>

                <div>
                    <label for="editPhotoTitle" class="block text-xs font-medium text-slate-700 mb-1">Photo Title</label>
                    <input type="text" id="editPhotoTitle" name="title"
                        class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter photo title">
                </div>

                <div>
                    <label for="editPhotoCategory" class="block text-xs font-medium text-slate-700 mb-1">Category</label>
                    <select id="editPhotoCategory" name="category"
                        class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select Category</option>
                        <option value="construction">Construction Projects</option>
                        <option value="design">Design Concepts</option>
                        <option value="completed">Completed Works</option>
                        <option value="process">Work in Progress</option>
                    </select>
                </div>

                <div>
                    <label for="editPhotoDescription" class="block text-xs font-medium text-slate-700 mb-1">Description</label>
                    <textarea id="editPhotoDescription" name="description" rows="3"
                        class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter photo description"></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="editPhotoFeatured" name="featured"
                        class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-slate-300 rounded">
                    <label for="editPhotoFeatured" class="ml-2 text-xs text-slate-700">
                        Mark as featured photo
                    </label>
                </div>

                <div>
                    <label class="block text-xs font-medium text-slate-700 mb-1">Update Photo (Optional)</label>
                    <input type="file" id="editPhotoFile" name="photo" accept="image/*"
                        class="w-full px-3 py-2 border border-slate-300 rounded text-sm focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                    <p class="text-slate-500 text-xs mt-1">Leave empty to keep current photo</p>
                </div>
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button" id="cancelEdit" class="px-4 py-2 border border-slate-300 rounded text-slate-700 hover:bg-slate-50 text-sm font-medium">
                    Cancel
                </button>
                <button type="submit" id="updatePhotoButton" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm font-medium flex items-center">
                    <i class="bi bi-check-lg mr-1.5"></i> Update Photo
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // File upload functionality
        const uploadArea = document.getElementById('uploadArea');
        const browseButton = document.getElementById('browseButton');
        const fileInput = document.getElementById('fileInput');
        const fileList = document.getElementById('fileList');
        const fileNames = document.getElementById('fileNames');
        const imagePreviews = document.getElementById('imagePreviews');
        const uploadForm = document.getElementById('uploadForm');
        const uploadButton = document.getElementById('uploadButton');

        // Store selected files for preview
        let selectedFiles = [];

        // Gallery state
        let currentPage = 1;
        let totalPages = 1;
        let currentCategory = '';
        let currentSearch = '';

        // File upload functionality
        if (uploadArea && browseButton && fileInput) {
            // ... (keep your existing file upload code)
            // Click on upload area or browse button to trigger file input
            uploadArea.addEventListener('click', function() {
                fileInput.click();
            });

            browseButton.addEventListener('click', function(e) {
                e.stopPropagation();
                fileInput.click();
            });

            // Drag and drop functionality
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                uploadArea.classList.add('dragover');
            });

            uploadArea.addEventListener('dragleave', function() {
                uploadArea.classList.remove('dragover');
            });

            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                uploadArea.classList.remove('dragover');

                if (e.dataTransfer.files.length) {
                    handleFiles(e.dataTransfer.files);
                }
            });

            // File input change
            fileInput.addEventListener('change', function() {
                if (fileInput.files.length) {
                    handleFiles(fileInput.files);
                }
            });

            // Handle selected files
            function handleFiles(files) {
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];

                    // Check if file is an image
                    if (!file.type.match('image.*')) {
                        showNotification('Please select only image files', 'error');
                        continue;
                    }

                    // Add to selected files if not already there
                    if (!selectedFiles.some(f => f.name === file.name && f.size === file.size)) {
                        selectedFiles.push(file);
                    }
                }

                // Update previews and file list
                updatePreviews();
                updateFileList();
            }

            // Update image previews
            function updatePreviews() {
                imagePreviews.innerHTML = '';

                if (selectedFiles.length > 0) {
                    imagePreviews.classList.remove('hidden');

                    selectedFiles.forEach((file, index) => {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            const previewItem = document.createElement('div');
                            previewItem.className = 'preview-item';
                            previewItem.innerHTML = `
                                <img src="${e.target.result}" alt="${file.name}" class="preview-image">
                                <div class="preview-remove" data-index="${index}">
                                    <i class="bi bi-x"></i>
                                </div>
                                <div class="preview-info">${file.name}</div>
                            `;

                            imagePreviews.appendChild(previewItem);

                            // Add remove functionality
                            const removeBtn = previewItem.querySelector('.preview-remove');
                            removeBtn.addEventListener('click', function() {
                                const removeIndex = parseInt(this.getAttribute('data-index'));
                                selectedFiles.splice(removeIndex, 1);
                                updatePreviews();
                                updateFileList();
                            });
                        };

                        reader.readAsDataURL(file);
                    });
                } else {
                    imagePreviews.classList.add('hidden');
                }
            }

            // Update file list display
            function updateFileList() {
                if (selectedFiles.length > 0) {
                    fileNames.innerHTML = '';

                    selectedFiles.forEach((file, index) => {
                        const listItem = document.createElement('li');
                        listItem.className = 'flex items-center justify-between';
                        listItem.innerHTML = `
                            <span class="truncate flex-1">${file.name}</span>
                            <span class="text-slate-500 text-xs ml-2">${formatFileSize(file.size)}</span>
                        `;
                        fileNames.appendChild(listItem);
                    });

                    fileList.classList.remove('hidden');
                } else {
                    fileList.classList.add('hidden');
                }
            }

            // Format file size
            function formatFileSize(bytes) {
                if (bytes === 0) return '0 Bytes';

                const k = 1024;
                const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                const i = Math.floor(Math.log(bytes) / Math.log(k));

                return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
            }
        }

        // Form submission with loading state and SweetAlert
        if (uploadForm && uploadButton) {
            uploadForm.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Basic validation
                const title = document.getElementById('photoTitle').value;
                const category = document.getElementById('photoCategory').value;

                if (!title) {
                    showNotification('Please enter a photo title', 'error');
                    return;
                }

                if (!category) {
                    showNotification('Please select a category', 'error');
                    return;
                }

                if (selectedFiles.length === 0) {
                    showNotification('Please select at least one photo', 'error');
                    return;
                }

                // Show loading state
                const originalText = uploadButton.innerHTML;
                uploadButton.innerHTML = '<span class="loading-spinner mr-1.5"></span> Uploading...';
                uploadButton.disabled = true;

                try {
                    // Prepare form data
                    const formData = new FormData();

                    // Add form fields
                    formData.append('title', title);
                    formData.append('category', category);
                    formData.append('description', document.getElementById('photoDescription').value);
                    formData.append('featured', document.getElementById('featured').checked ? '1' : '0');

                    // Add files
                    for (let i = 0; i < selectedFiles.length; i++) {
                        formData.append('photos[]', selectedFiles[i]);
                    }

                    // Send request to PhotoController
                    const response = await fetch("{{ route('admin.upload.photo') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: formData
                    });

                    const result = await response.json();

                    if (result.success) {
                        // Show success message with SweetAlert
                        await Swal.fire({
                            title: 'Success!',
                            text: result.message,
                            icon: 'success',
                            confirmButtonText: 'OK',
                            confirmButtonColor: '#3b82f6'
                        });

                        // Reset form
                        uploadForm.reset();
                        selectedFiles = [];
                        updatePreviews();
                        updateFileList();

                        // Refresh dashboard data and gallery
                        await loadDashboardData();
                        await loadGallery(currentPage, currentCategory, currentSearch);
                    } else {
                        throw new Error(result.message || 'Upload failed');
                    }

                } catch (error) {
                    console.error('Upload error:', error);

                    // Show error message with SweetAlert
                    await Swal.fire({
                        title: 'Upload Failed',
                        text: error.message || 'An error occurred during upload. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        confirmButtonColor: '#ef4444'
                    });
                } finally {
                    // Reset button state
                    uploadButton.innerHTML = originalText;
                    uploadButton.disabled = false;
                }
            });
        }

        // Load dashboard data
        async function loadDashboardData() {
            try {
                showLoadingStates();
                const response = await fetch("{{ route('admin.dashboard.data') }}");
                const result = await response.json();

                if (result.success) {
                    updateDashboardUI(result.data);
                } else {
                    throw new Error(result.message || 'Failed to load dashboard data');
                }
            } catch (error) {
                console.error('Error loading dashboard data:', error);
                showErrorStates();
                showNotification('Failed to load dashboard data', 'error');
            }
        }

        // Load gallery with pagination
        async function loadGallery(page = 1, category = '', search = '') {
            try {
                const photoGalleryContainer = document.getElementById('photoGallery');
                photoGalleryContainer.innerHTML = `
                    <div class="text-center col-span-full py-8 text-slate-500">
                        <div class="loading-spinner inline-block mr-2"></div>
                        Loading gallery...
                    </div>
                `;

                const params = new URLSearchParams({
                    page: page,
                    category: category,
                    search: search,
                    per_page: 12
                });

                const response = await fetch(`/admin/photos?${params}`);
                const result = await response.json();

                if (result.success) {
                    updateGalleryUI(result.data);
                    updatePaginationUI(result.meta);
                    currentPage = result.meta.current_page;
                    totalPages = result.meta.last_page;
                    currentCategory = category;
                    currentSearch = search;
                } else {
                    throw new Error(result.message);
                }
            } catch (error) {
                console.error('Error loading gallery:', error);
                const photoGalleryContainer = document.getElementById('photoGallery');
                photoGalleryContainer.innerHTML = `
                    <div class="text-center col-span-full py-8 text-slate-500">
                        <i class="bi bi-exclamation-triangle text-2xl mb-2"></i>
                        <p class="text-sm">Failed to load gallery</p>
                    </div>
                `;
            }
        }

        // Update gallery UI
        function updateGalleryUI(photos) {
            const photoGalleryContainer = document.getElementById('photoGallery');
            photoGalleryContainer.innerHTML = '';

            if (photos.length > 0) {
                photos.forEach(photo => {
                    const galleryItem = document.createElement('div');
                    galleryItem.className = 'image-preview bg-slate-200 rounded-lg aspect-square flex items-center justify-center relative overflow-hidden group';
                    galleryItem.innerHTML = `
                        ${photo.file_path ?
                            `<img src="/storage/${photo.file_path}" alt="${photo.title}" class="w-full h-full object-cover">` :
                            `<i class="bi bi-image text-slate-400 text-lg"></i>`
                        }
                        <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-xs p-2">
                            <div class="truncate font-medium">${photo.title}</div>
                            <div class="flex justify-between items-center mt-1">
                                <span class="text-xs bg-blue-500 px-2 py-0.5 rounded">${photo.category}</span>
                                ${photo.featured ? '<span class="text-xs bg-yellow-500 px-2 py-0.5 rounded">Featured</span>' : ''}
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-200 flex items-center justify-center space-x-2 opacity-0 group-hover:opacity-100">
                            <button class="edit-photo-btn p-2 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors" data-id="${photo.id}">
                                <i class="bi bi-pencil text-xs"></i>
                            </button>
                            <button class="delete-photo-btn p-2 bg-red-600 text-white rounded-full hover:bg-red-700 transition-colors" data-id="${photo.id}">
                                <i class="bi bi-trash text-xs"></i>
                            </button>
                        </div>
                    `;
                    photoGalleryContainer.appendChild(galleryItem);
                });

                // Add event listeners for edit and delete buttons
                document.querySelectorAll('.edit-photo-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const photoId = this.getAttribute('data-id');
                        openEditModal(photoId);
                    });
                });

                document.querySelectorAll('.delete-photo-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const photoId = this.getAttribute('data-id');
                        deletePhoto(photoId);
                    });
                });
            } else {
                photoGalleryContainer.innerHTML = `
                    <div class="text-center col-span-full py-8 text-slate-500">
                        <i class="bi bi-images text-2xl mb-2"></i>
                        <p class="text-sm">No photos found</p>
                    </div>
                `;
            }
        }

        // Update pagination UI
        function updatePaginationUI(meta) {
            const paginationContainer = document.getElementById('pagination');

            if (meta.last_page <= 1) {
                paginationContainer.classList.add('hidden');
                return;
            }

            paginationContainer.classList.remove('hidden');

            let paginationHTML = '';

            // Previous button
            if (meta.current_page > 1) {
                paginationHTML += `
                    <button onclick="loadGalleryPage(${meta.current_page - 1})" class="px-3 py-2 border border-slate-300 rounded text-slate-700 hover:bg-slate-50 text-sm font-medium flex items-center">
                        <i class="bi bi-chevron-left mr-1"></i> Previous
                    </button>
                `;
            }

            // Page numbers
            for (let i = 1; i <= meta.last_page; i++) {
                if (i === meta.current_page) {
                    paginationHTML += `
                        <button class="px-3 py-2 border border-blue-600 bg-blue-600 text-white rounded text-sm font-medium">
                            ${i}
                        </button>
                    `;
                } else {
                    paginationHTML += `
                        <button onclick="loadGalleryPage(${i})" class="px-3 py-2 border border-slate-300 rounded text-slate-700 hover:bg-slate-50 text-sm font-medium">
                            ${i}
                        </button>
                    `;
                }
            }

            // Next button
            if (meta.current_page < meta.last_page) {
                paginationHTML += `
                    <button onclick="loadGalleryPage(${meta.current_page + 1})" class="px-3 py-2 border border-slate-300 rounded text-slate-700 hover:bg-slate-50 text-sm font-medium flex items-center">
                        Next <i class="bi bi-chevron-right ml-1"></i>
                    </button>
                `;
            }

            paginationContainer.innerHTML = paginationHTML;
        }

        // Global function for pagination
        window.loadGalleryPage = function(page) {
            loadGallery(page, currentCategory, currentSearch);
        }

        // Open edit modal
        async function openEditModal(photoId) {
            try {
                const response = await fetch(`/admin/photos/${photoId}/edit`);
                const result = await response.json();

                if (result.success) {
                    const photo = result.data;

                    // Fill form with photo data
                    document.getElementById('editPhotoId').value = photo.id;
                    document.getElementById('editPhotoTitle').value = photo.title;
                    document.getElementById('editPhotoCategory').value = photo.category;
                    document.getElementById('editPhotoDescription').value = photo.description || '';
                    document.getElementById('editPhotoFeatured').checked = photo.featured;

                    // Set current image preview
                    const currentImage = document.getElementById('currentImage');
                    if (photo.file_path) {
                        currentImage.src = `/storage/${photo.file_path}`;
                        document.getElementById('currentImagePreview').classList.remove('hidden');
                    }

                    // Show modal
                    document.getElementById('editPhotoModal').classList.remove('hidden');
                } else {
                    throw new Error(result.message);
                }
            } catch (error) {
                console.error('Error loading photo data:', error);
                showNotification('Failed to load photo data', 'error');
            }
        }

        // Close edit modal
        function closeEditModal() {
            document.getElementById('editPhotoModal').classList.add('hidden');
            document.getElementById('editPhotoForm').reset();
            document.getElementById('currentImagePreview').classList.add('hidden');
        }

        // Event listeners for modal
        document.getElementById('closeEditModal').addEventListener('click', closeEditModal);
        document.getElementById('cancelEdit').addEventListener('click', closeEditModal);

        // Edit form submission
        document.getElementById('editPhotoForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const photoId = document.getElementById('editPhotoId').value;
            const formData = new FormData(this);
            const updateButton = document.getElementById('updatePhotoButton');

            // Show loading state
            const originalText = updateButton.innerHTML;
            updateButton.innerHTML = '<span class="loading-spinner mr-1.5"></span> Updating...';
            updateButton.disabled = true;

            try {
                const response = await fetch(`/admin/photos/${photoId}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'X-HTTP-Method-Override': 'PUT'
                    },
                    body: formData
                });

                const result = await response.json();

                if (result.success) {
                    showNotification('Photo updated successfully', 'success');
                    closeEditModal();
                    // Reload gallery and dashboard data
                    await loadGallery(currentPage, currentCategory, currentSearch);
                    await loadDashboardData();
                } else {
                    throw new Error(result.message);
                }
            } catch (error) {
                console.error('Error updating photo:', error);
                showNotification('Failed to update photo: ' + error.message, 'error');
            } finally {
                // Reset button state
                updateButton.innerHTML = originalText;
                updateButton.disabled = false;
            }
        });

        // Delete photo function
        window.deletePhoto = async function(photoId) {
            const result = await Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Yes, delete it!'
            });

            if (result.isConfirmed) {
                try {
                    const response = await fetch(`/admin/photos/${photoId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    });

                    const data = await response.json();

                    if (data.success) {
                        await Swal.fire({
                            title: 'Deleted!',
                            text: 'Photo has been deleted.',
                            icon: 'success',
                            confirmButtonColor: '#3b82f6'
                        });

                        // Reload gallery and dashboard data
                        await loadGallery(currentPage, currentCategory, currentSearch);
                        await loadDashboardData();
                    } else {
                        throw new Error(data.message);
                    }
                } catch (error) {
                    await Swal.fire({
                        title: 'Error!',
                        text: 'Failed to delete photo: ' + error.message,
                        icon: 'error',
                        confirmButtonColor: '#ef4444'
                    });
                }
            }
        };

        // Filter and search functionality
        document.getElementById('categoryFilter').addEventListener('change', function() {
            currentCategory = this.value;
            loadGallery(1, currentCategory, currentSearch);
        });

        document.getElementById('searchInput').addEventListener('input', function() {
            currentSearch = this.value;
            // Debounce search to avoid too many requests
            clearTimeout(window.searchTimeout);
            window.searchTimeout = setTimeout(() => {
                loadGallery(1, currentCategory, currentSearch);
            }, 500);
        });

        // Show loading states
        function showLoadingStates() {
            document.getElementById('totalPhotos').textContent = 'Loading...';
            document.getElementById('totalProjects').textContent = 'Loading...';
            document.getElementById('viewsThisMonth').textContent = 'Loading...';
            document.getElementById('uploadsToday').textContent = 'Loading...';

            const recentUploadsContainer = document.getElementById('recentUploads');
            recentUploadsContainer.innerHTML = `
                <div class="text-center py-4 text-slate-500">
                    <div class="loading-spinner inline-block mr-2"></div>
                    Loading recent uploads...
                </div>
            `;
        }

        // Show error states
        function showErrorStates() {
            document.getElementById('totalPhotos').textContent = 'Error';
            document.getElementById('totalProjects').textContent = 'Error';
            document.getElementById('viewsThisMonth').textContent = 'Error';
            document.getElementById('uploadsToday').textContent = 'Error';

            const recentUploadsContainer = document.getElementById('recentUploads');
            recentUploadsContainer.innerHTML = `
                <div class="text-center py-4 text-slate-500">
                    <i class="bi bi-exclamation-triangle text-2xl mb-2"></i>
                    <p class="text-sm">Failed to load recent uploads</p>
                </div>
            `;
        }

        // Update dashboard UI with data
        function updateDashboardUI(data) {
            // Update user profile data
            document.getElementById('sidebarUserName').textContent = data.user.name;
            document.getElementById('sidebarUserEmail').textContent = data.user.email;
            document.getElementById('headerUserName').textContent = data.user.name;

            // Update stats data
            document.getElementById('totalPhotos').textContent = formatNumber(data.stats.totalPhotos);
            document.getElementById('totalProjects').textContent = formatNumber(data.stats.totalProjects);
            document.getElementById('viewsThisMonth').textContent = formatNumber(data.stats.viewsThisMonth);
            document.getElementById('uploadsToday').textContent = formatNumber(data.stats.uploadsToday);

            // Update recent uploads
            updateRecentUploads(data.recentUploads);
        }

        // Update recent uploads section
        function updateRecentUploads(uploads) {
            const recentUploadsContainer = document.getElementById('recentUploads');
            recentUploadsContainer.innerHTML = '';

            if (uploads.length > 0) {
                uploads.forEach(upload => {
                    const uploadElement = document.createElement('div');
                    uploadElement.className = 'flex items-center space-x-3 p-2 border border-slate-200 rounded';
                    uploadElement.innerHTML = `
                        <div class="w-12 h-12 bg-slate-200 rounded flex items-center justify-center flex-shrink-0 overflow-hidden">
                            ${upload.thumbnail ?
                                `<img src="/storage/${upload.thumbnail}" alt="${upload.title}" class="w-full h-full object-cover">` :
                                `<i class="bi bi-image text-slate-400 text-sm"></i>`
                            }
                        </div>
                        <div class="flex-1 min-w-0">
                            <h4 class="text-sm font-medium text-slate-800 truncate">${upload.title}</h4>
                            <p class="text-xs text-slate-500">${upload.timeAgo}</p>
                            <span class="inline-block px-2 py-1 text-xs bg-blue-100 text-blue-800 rounded mt-1">${upload.category}</span>
                            ${upload.featured ? '<span class="inline-block px-2 py-1 text-xs bg-yellow-100 text-yellow-800 rounded ml-1">Featured</span>' : ''}
                        </div>
                        <div class="flex space-x-1">
                            <button class="edit-photo-btn text-blue-600 hover:text-blue-800 text-sm" data-id="${upload.id}">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <button class="text-red-600 hover:text-red-800 text-sm" onclick="deletePhoto(${upload.id})">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>
                    `;
                    recentUploadsContainer.appendChild(uploadElement);
                });

                // Add event listeners for edit buttons in recent uploads
                document.querySelectorAll('#recentUploads .edit-photo-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const photoId = this.getAttribute('data-id');
                        openEditModal(photoId);
                    });
                });
            } else {
                recentUploadsContainer.innerHTML = `
                    <div class="text-center py-4 text-slate-500">
                        <i class="bi bi-inbox text-2xl mb-2"></i>
                        <p class="text-sm">No recent uploads</p>
                    </div>
                `;
            }
        }

        // Format numbers with commas
        window.formatNumber = function(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        };

        // Initialize
        loadDashboardData();
        loadGallery();
    });
</script>
@endsection
