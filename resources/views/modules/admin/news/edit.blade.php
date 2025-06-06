@extends('layouts.admin')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div class="flex items-center mb-6">
            <a href="{{ route('admin.news') }}" class="mr-3 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <h2 class="text-2xl font-semibold text-gray-800">
                Edit News
            </h2>
        </div>

        <form action="{{ route('admin.news.update', $news->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <!-- Basic Information -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">News Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1 md:col-span-2">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">News Title <span class="text-red-600">*</span></label>
                        <input type="text" id="title" name="title" required value="{{ old('title', $news->title) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Competition Level <span class="text-red-600">*</span></label>
                        <select id="level" name="level" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select Level</option>
                            <option value="International" {{ old('level', $news->level) == 'International' ? 'selected' : '' }}>International</option>
                            <option value="Regional" {{ old('level', $news->level) == 'Regional' ? 'selected' : '' }}>Regional</option>
                            <option value="National" {{ old('level', $news->level) == 'National' ? 'selected' : '' }}>National</option>
                        </select>
                        @error('level')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="competition" class="block text-sm font-medium text-gray-700 mb-1">Competition <span class="text-red-600">*</span></label>
                        <select id="competition" name="competition" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select Competition</option>
                            <option value="PKM" {{ old('competition', $news->competition) == 'PKM' ? 'selected' : '' }}>PKM</option>
                            <option value="GELATIK" {{ old('competition', $news->competition) == 'GELATIK' ? 'selected' : '' }}>GELATIK</option>
                            <option value="ON MIPA PT" {{ old('competition', $news->competition) == 'ON MIPA PT' ? 'selected' : '' }}>ON MIPA PT</option>
                            <option value="COMPFEST" {{ old('competition', $news->competition) == 'COMPFEST' ? 'selected' : '' }}>COMPFEST</option>
                        </select>
                        @error('competition')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 h-24 w-36 bg-gray-100 rounded-md overflow-hidden border border-gray-200">
                                <img id="thumbnail-preview" src="{{ asset($news->thumbnail ?? 'images/thumbnail_placeholder.png') }}" alt="Thumbnail preview" class="h-full w-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="mt-1 text-xs text-gray-500">Leave empty to keep current image</p>
                            </div>
                        </div>
                        @error('thumbnail')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- News Content -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-medium text-gray-900 mb-4">News Content</h3>
                
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content <span class="text-red-600">*</span></label>
                    <textarea id="content" name="content" rows="15" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('content', $news->content) }}</textarea>
                    <p class="mt-1 text-xs text-gray-500">HTML formatting is supported</p>
                    @error('content')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Publish Settings -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Publish Settings</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="publish_date" class="block text-sm font-medium text-gray-700 mb-1">Publish Date <span class="text-red-600">*</span></label>
                        <input type="date" id="publish_date" name="publish_date" value="{{ old('publish_date', $news->publish_date->format('Y-m-d')) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
                        @error('publish_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $news->slug) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Leave empty to auto-generate from title</p>
                        @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-3 pt-6">
                <button type="button" onclick="window.location='{{ route('admin.news') }}'" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update News
                </button>
            </div>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const thumbnailInput = document.getElementById('thumbnail');
    const thumbnailPreview = document.getElementById('thumbnail-preview');
    
    thumbnailInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                thumbnailPreview.src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
    
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    
    titleInput.addEventListener('blur', function() {
        if (slugInput.value === '') {
            slugInput.value = titleInput.value
                .toLowerCase()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        }
    });
});
</script>
@endsection