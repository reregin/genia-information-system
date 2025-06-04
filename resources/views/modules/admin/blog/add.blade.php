@extends('layouts.admin')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.blog') }}" class="mr-3 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <h2 class="text-2xl font-semibold text-gray-800">
                Add New Blog Post
            </h2>
        </div>

        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <!-- Basic Information -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Blog Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Title -->
                    <div class="col-span-1 md:col-span-2">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">
                            Blog Title <span class="text-red-600">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            required 
                            value="{{ old('title') }}" 
                            placeholder="Enter your blog title..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Caption/Excerpt -->
                    <div class="col-span-1 md:col-span-2">
                        <label for="caption" class="block text-sm font-medium text-gray-700 mb-1">
                            Caption/Excerpt <span class="text-red-600">*</span>
                        </label>
                        <textarea 
                            id="caption" 
                            name="caption" 
                            rows="3" 
                            required 
                            placeholder="Write a brief description or excerpt for your blog post..."
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >{{ old('caption') }}</textarea>
                        @error('caption')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1">
                            Category <span class="text-red-600">*</span>
                        </label>
                        <select 
                            id="category_id" 
                            name="category_id" 
                            required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option 
                                    value="{{ $category->id }}" 
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}
                                >
                                    {{ ucfirst($category->name) }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Author Selection -->
                    <div>
                        <label for="author_id" class="block text-sm font-medium text-gray-700 mb-1">
                            Author <span class="text-red-600">*</span>
                        </label>
                        <div class="flex space-x-2">
                            <select 
                                id="author_id" 
                                name="author_id" 
                                required 
                                class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            >
                                <option value="">Select Author</option>
                                @foreach ($authors as $author)
                                    <option 
                                        value="{{ $author->id }}" 
                                        {{ old('author_id') == $author->id ? 'selected' : '' }}
                                    >
                                        {{ $author->name }} - {{ $author->department }}
                                    </option>
                                @endforeach
                            </select>
                            <button 
                                type="button" 
                                id="add_new_author_btn"
                                class="px-3 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition-colors whitespace-nowrap"
                            >
                                + New Author
                            </button>
                        </div>
                        @error('author_id')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- New Author Form (Hidden by default) -->
                    <div id="new_author_form" class="col-span-1 md:col-span-2 hidden">
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <div class="flex items-center justify-between mb-3">
                                <h4 class="text-md font-medium text-blue-900 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    New Author Information
                                </h4>
                                <button 
                                    type="button" 
                                    id="cancel_new_author_btn"
                                    class="text-blue-600 hover:text-blue-800 focus:outline-none"
                                >
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <!-- New Author Name -->
                                <div>
                                    <label for="new_author_name" class="block text-sm font-medium text-gray-700 mb-1">
                                        Author Name <span class="text-red-600">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="new_author_name" 
                                        name="new_author_name" 
                                        value="{{ old('new_author_name') }}" 
                                        placeholder="Enter author's full name"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    >
                                    @error('new_author_name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- New Author Department -->
                                <div>
                                    <label for="new_author_department" class="block text-sm font-medium text-gray-700 mb-1">
                                        Department <span class="text-red-600">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="new_author_department" 
                                        name="new_author_department" 
                                        value="{{ old('new_author_department') }}" 
                                        placeholder="e.g., Marketing, IT, HR"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    >
                                    @error('new_author_department')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <!-- New Author Avatar -->
                                <div class="md:col-span-2">
                                    <label for="new_author_avatar" class="block text-sm font-medium text-gray-700 mb-1">
                                        Author Avatar
                                    </label>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0 h-16 w-16 bg-gray-100 rounded-full overflow-hidden border border-gray-200">
                                            <div id="author_avatar_preview" class="h-full w-full flex items-center justify-center text-gray-400">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex-grow">
                                            <input 
                                                type="file" 
                                                id="new_author_avatar" 
                                                name="new_author_avatar" 
                                                accept="image/*"
                                                class="w-full text-sm text-gray-500 
                                                       file:mr-4 file:py-1 file:px-3 
                                                       file:rounded-md file:border-0 
                                                       file:text-sm file:font-medium 
                                                       file:bg-blue-50 file:text-blue-700 
                                                       hover:file:bg-blue-100"
                                            >
                                            <p class="mt-1 text-xs text-gray-500">
                                                Optional. Recommended: Square image, 200×200px or larger
                                            </p>
                                        </div>
                                    </div>
                                    @error('new_author_avatar')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Toggle -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Featured Post
                        </label>
                        <div class="flex items-center">
                            <input
                                type="hidden"
                                name="is_featured"
                                value="0"
                            >
                            <input 
                                type="checkbox" 
                                id="is_featured" 
                                name="is_featured" 
                                value="1"
                                {{ old('is_featured') ? 'checked' : '' }}
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                            >
                            <label for="is_featured" class="ml-2 text-sm text-gray-700">
                                Mark as featured post
                            </label>
                        </div>
                        @error('is_featured')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Slug Preview -->
                    <div>
                        <label for="slug_preview" class="block text-sm font-medium text-gray-700 mb-1">
                            URL Slug (Auto-generated)
                        </label>
                        <input 
                            type="text" 
                            id="slug_preview" 
                            readonly
                            placeholder="Will be generated from title"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-50 text-gray-600 cursor-not-allowed"
                        >
                        <p class="mt-1 text-xs text-gray-500">
                            Automatically generated from the title. Will be unique if duplicates exist.
                        </p>
                    </div>

                    <!-- Featured Image / Thumbnail -->
                    <div class="md:col-span-2">
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-1">
                            Featured Image <span class="text-red-600">*</span>
                        </label>
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 h-24 w-36 bg-gray-100 rounded-md overflow-hidden border border-gray-200">
                                <div id="thumbnail-preview" class="h-full w-full flex items-center justify-center text-gray-400">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow">
                                <input 
                                    type="file" 
                                    id="thumbnail" 
                                    name="thumbnail" 
                                    accept="image/*" 
                                    required
                                    class="w-full text-sm text-gray-500 
                                           file:mr-4 file:py-2 file:px-4 
                                           file:rounded-md file:border-0 
                                           file:text-sm file:font-medium 
                                           file:bg-blue-50 file:text-blue-700 
                                           hover:file:bg-blue-100"
                                >
                                <p class="mt-1 text-xs text-gray-500">
                                    Recommended: 16:9 ratio, 1200×675px or larger. Max size: 2MB
                                </p>
                            </div>
                        </div>
                        @error('thumbnail')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- External Link -->
                    <div class="md:col-span-2">
                        <label for="link" class="block text-sm font-medium text-gray-700 mb-1">
                            External Link
                        </label>
                        <input 
                            type="url" 
                            id="link" 
                            name="link" 
                            value="{{ old('link') }}" 
                            placeholder="https://example.com"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                        >
                        <p class="mt-1 text-xs text-gray-500">
                            Optional – link to external content or source
                        </p>
                        @error('link')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Blog Content -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Blog Content</h3>
                
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
                        Content <span class="text-red-600">*</span>
                    </label>
                    <textarea 
                        id="content" 
                        name="content" 
                        rows="15" 
                        required 
                        placeholder="Write your blog content here..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 font-mono text-sm"
                    >{{ old('content') }}</textarea>
                    <p class="mt-1 text-xs text-gray-500">HTML formatting is supported</p>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Hidden field to track if creating new author -->
            <input type="hidden" id="creating_new_author" name="creating_new_author" value="0">

            <!-- Form Actions -->
            <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                <div class="text-sm text-gray-500">
                    <span class="inline-flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Fields marked with <span class="text-red-600">*</span> are required
                    </span>
                </div>
                <div class="flex items-center space-x-3">
                    <a 
                        href="{{ route('admin.blog') }}"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors"
                    >
                        Cancel
                    </a>
                    <button 
                        type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors"
                    >
                        Save Blog Post
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- JavaScript for enhanced functionality --}}
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Author form handling
    const addNewAuthorBtn = document.getElementById('add_new_author_btn');
    const cancelNewAuthorBtn = document.getElementById('cancel_new_author_btn');
    const newAuthorForm = document.getElementById('new_author_form');
    const authorSelect = document.getElementById('author_id');
    const creatingNewAuthorField = document.getElementById('creating_new_author');
    const newAuthorFields = ['new_author_name', 'new_author_department'];
    
    // Show new author form
    addNewAuthorBtn.addEventListener('click', function() {
        newAuthorForm.classList.remove('hidden');
        authorSelect.removeAttribute('required');
        authorSelect.value = '';
        creatingNewAuthorField.value = '1';
        
        // Make new author fields required
        newAuthorFields.forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field) {
                field.setAttribute('required', 'required');
            }
        });
    });
    
    // Hide new author form
    cancelNewAuthorBtn.addEventListener('click', function() {
        newAuthorForm.classList.add('hidden');
        authorSelect.setAttribute('required', 'required');
        creatingNewAuthorField.value = '0';
        
        // Remove required from new author fields and clear values
        newAuthorFields.forEach(fieldName => {
            const field = document.getElementById(fieldName);
            if (field) {
                field.removeAttribute('required');
                field.value = '';
                field.classList.remove('border-red-500', 'ring-red-500');
            }
        });
        
        // Clear avatar preview
        const avatarPreview = document.getElementById('author_avatar_preview');
        if (avatarPreview) {
            avatarPreview.innerHTML = `
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            `;
        }
    });
    
    // Author avatar preview
    const authorAvatarInput = document.getElementById('new_author_avatar');
    const authorAvatarPreview = document.getElementById('author_avatar_preview');
    
    if (authorAvatarInput && authorAvatarPreview) {
        authorAvatarInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    authorAvatarPreview.innerHTML = `<img src="${e.target.result}" alt="Author avatar preview" class="h-full w-full object-cover rounded-full">`;
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    }
    
    // Thumbnail preview functionality
    const thumbnailInput = document.getElementById('thumbnail');
    const thumbnailPreview = document.getElementById('thumbnail-preview');
    
    if (thumbnailInput && thumbnailPreview) {
        thumbnailInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    thumbnailPreview.innerHTML = `<img src="${e.target.result}" alt="Thumbnail preview" class="h-full w-full object-cover">`;
                };
                reader.readAsDataURL(this.files[0]);
            }
        });
    }
    
    // Form validation
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        let isValid = true;
        let firstInvalidField = null;
        
        // Check if creating new author
        const isCreatingNewAuthor = creatingNewAuthorField.value === '1';
        
        // Validate required fields
        const requiredFields = form.querySelectorAll('[required]');
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                field.classList.add('border-red-500', 'ring-red-500');
                if (!firstInvalidField) {
                    firstInvalidField = field;
                }
            } else {
                field.classList.remove('border-red-500', 'ring-red-500');
            }
        });
        
        // Additional validation for new author
        if (isCreatingNewAuthor) {
            newAuthorFields.forEach(fieldName => {
                const field = document.getElementById(fieldName);
                if (field && !field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500', 'ring-red-500');
                    if (!firstInvalidField) {
                        firstInvalidField = field;
                    }
                }
            });
        }
        
        if (!isValid) {
            e.preventDefault();
            if (firstInvalidField) {
                firstInvalidField.focus();
                firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
            showErrorToast('Please fill in all required fields');
        }
    });
    
    // Helper function to show error toast
    function showErrorToast(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded z-50';
        errorDiv.innerHTML = `
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                ${message}
            </div>
        `;
        document.body.appendChild(errorDiv);
        
        setTimeout(() => {
            errorDiv.remove();
        }, 5000);
    }

    // Auto generate slug preview from title
    const titleInput = document.getElementById('title');
    const slugPreview = document.getElementById('slug_preview');

    if (titleInput && slugPreview) {
        function updateSlugPreview() {
            const title = titleInput.value;
            if (title.trim()) {
                const slug = title
                    .toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/[\s_-]+/g, '-')
                    .replace(/^-+|-+$/g, '');
                slugPreview.value = slug || 'blog-post';
            } else {
                slugPreview.value = '';
            }
        }
        
        titleInput.addEventListener('input', updateSlugPreview);
        updateSlugPreview(); // Initial call
    }
});
</script>
@endpush
@endsection