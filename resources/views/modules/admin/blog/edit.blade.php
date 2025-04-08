<?php
$post = (object)[
  'title' => 'Mastering UI Design: Creating Intuitive User Experiences',
  'slug' => 'mastering-ui-design-creating-intuitive-user-experiences',
  'excerpt' => 'Learn the principles of effective UI design and how to create interfaces that users love and understand intuitively.',
  'content' => '<p>Good user interface (UI) design is essential for creating digital products that are not only visually appealing but also easy to use and understand. In this article, we\'ll explore the fundamental principles of UI design and how you can apply them to create intuitive user experiences.</p>

<h2>Understanding User Needs</h2>
<p>Before diving into the design process, it\'s crucial to understand who your users are and what they need. This involves conducting user research, creating personas, and mapping out user journeys. By understanding your users\' goals, pain points, and preferences, you can design interfaces that cater specifically to their needs.</p>

<h2>Key Principles of Effective UI Design</h2>

<h3>1. Clarity</h3>
<p>Your interface should be clear and straightforward. Users should be able to quickly understand what your product does and how to use it. Use simple language, clear labels, and intuitive icons to guide users through your interface.</p>

<h3>2. Consistency</h3>
<p>Consistency in design elements, such as buttons, colors, and typography, helps users learn and navigate your interface more easily. When elements look and behave consistently, users can apply what they\'ve learned from one part of your interface to another.</p>

<h3>3. Hierarchy</h3>
<p>Visual hierarchy helps guide users\' attention to the most important elements first. Use size, color, contrast, and spacing to create a clear hierarchy of information on your screen.</p>

<h3>4. Feedback</h3>
<p>Provide clear feedback for user actions. This could be as simple as changing the color of a button when it\'s clicked or showing a loading indicator when a process is running. Feedback helps users understand that their actions have been registered and that the system is responding.</p>

<h2>Creating Intuitive Navigation</h2>
<p>Navigation is a critical aspect of UI design. Users should be able to easily find what they\'re looking for and understand where they are in your product. Here are some tips for creating intuitive navigation:</p>

<ul>
<li>Use clear, descriptive labels for navigation items</li>
<li>Implement consistent navigation patterns across your product</li>
<li>Provide breadcrumbs or other indicators to show users where they are</li>
<li>Limit the number of navigation options to avoid overwhelming users</li>
</ul>

<h2>Designing for Accessibility</h2>
<p>Inclusive design ensures that your product is usable by people with diverse abilities and needs. Consider factors such as color contrast, text size, and keyboard navigation when designing your interface. Making your product accessible not only helps users with disabilities but often improves the experience for all users.</p>

<h2>Testing and Iteration</h2>
<p>The best way to ensure your UI design is intuitive is to test it with real users. Conduct usability testing to identify any pain points or areas of confusion in your interface. Use the feedback you gather to iterate on your design and make improvements.</p>

<p>Remember, creating intuitive user experiences is an ongoing process. As you gather more user feedback and as user needs evolve, continue to refine and improve your design to ensure it remains intuitive and effective.</p>',
  'featured_image' => 'blog (1).jpg',
  'category' => 'Technology',
  'author_name' => "Alex Doe",
  'published' => true,
  'created_at' => \Carbon\Carbon::parse('2025-05-10 10:00:00'),
  'updated_at' => \Carbon\Carbon::parse('2025-05-10 10:00:00'),
];
?>
@extends('layouts.admin')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div class="flex items-center mb-6">
            <a href="" class="mr-3 text-gray-500 hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <h2 class="text-2xl font-semibold text-gray-800">
                Edit Blog Post
            </h2>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            
            <!-- Basic Information -->
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mt-6">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Blog Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="col-span-1 md:col-span-2">
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Blog Title <span class="text-red-600">*</span></label>
                        <input type="text" id="title" name="title" required value="{{ old('title', $post->title) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-span-1 md:col-span-2">
                        <label for="caption" class="block text-sm font-medium text-gray-700 mb-1">Caption/Excerpt <span class="text-red-600">*</span></label>
                        <textarea id="caption" name="caption" rows="3" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('caption', $post->excerpt) }}</textarea>
                        @error('caption')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category <span class="text-red-600">*</span></label>
                        <select id="category" name="category" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select Category</option>
                            <option value="Technology" {{ old('category', $post->category) == 'Technology' ? 'selected' : '' }}>Technology</option>
                            <option value="Design" {{ old('category', $post->category) == 'Design' ? 'selected' : '' }}>Design</option>
                            <option value="Business" {{ old('category', $post->category) == 'Business' ? 'selected' : '' }}>Business</option>
                            <option value="Education" {{ old('category', $post->category) == 'Education' ? 'selected' : '' }}>Education</option>
                        </select>
                        @error('category')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status <span class="text-red-600">*</span></label>
                        <select id="status" name="status" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="Draft" {{ old('status', $post->published ? 'Published' : 'Draft') == 'Draft' ? 'selected' : '' }}>Draft</option>
                            <option value="Published" {{ old('status', $post->published ? 'Published' : 'Draft') == 'Published' ? 'selected' : '' }}>Published</option>
                        </select>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="author_name" class="block text-sm font-medium text-gray-700 mb-1">Author Name <span class="text-red-600">*</span></label>
                        <input type="text" id="author_name" name="author_name" required value="{{ old('author_name', $post->author_name) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('author_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="author_dept" class="block text-sm font-medium text-gray-700 mb-1">Author Department/Role <span class="text-red-600">*</span></label>
                        <input type="text" id="author_dept" name="author_dept" required value="{{ old('author_dept', 'Lead Developer') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('author_dept')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-1">Featured Image</label>
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0 h-24 w-36 bg-gray-100 rounded-md overflow-hidden border border-gray-200">
                                <img id="thumbnail-preview" src="{{ asset('images/' . $post->featured_image) }}" alt="Thumbnail preview" class="h-full w-full object-cover">
                            </div>
                            <div class="flex-grow">
                                <input type="file" id="thumbnail" name="thumbnail" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                <p class="mt-1 text-xs text-gray-500">Recommended: 16:9 ratio, 1200x675px or larger</p>
                                <p class="mt-1 text-xs text-gray-500">Current image: {{ $post->featured_image }}</p>
                            </div>
                        </div>
                        @error('thumbnail')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="link" class="block text-sm font-medium text-gray-700 mb-1">External Link</label>
                        <input type="url" id="link" name="link" value="{{ old('link', 'https://test') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Optional - link to external content</p>
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
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Content <span class="text-red-600">*</span></label>
                    <textarea id="content" name="content" rows="15" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('content', $post->content) }}</textarea>
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
                        <label for="publish_date" class="block text-sm font-medium text-gray-700 mb-1">Publish Date</label>
                        <input type="date" id="publish_date" name="publish_date" value="{{ old('publish_date', $post->created_at->format('Y-m-d')) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('publish_date')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">URL Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <p class="mt-1 text-xs text-gray-500">Leave empty to auto-generate from title</p>
                        @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-3 pt-6">
                <button type="button" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update Blog Post
                </button>
            </div>
        </form>
    </div>
</div>

<!-- JavaScript for image preview -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Thumbnail preview
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
    
    // Auto generate slug from title
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