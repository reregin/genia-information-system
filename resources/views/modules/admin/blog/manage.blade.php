<?php

// Blog data
$blogs = [
  (object)[
    'id' => 1,
    'title' => 'The Future of Web Development: Trends to Watch in 2025',
    'caption' => 'The web development landscape is constantly evolving. In this comprehensive guide, we explore the emerging technologies and methodologies that are shaping the future of how we build and interact with websites.',
    'date' => \Carbon\Carbon::parse('2025-05-20'),
    'category' => 'Technology',
    'author_name' => 'Sarah Johnson',
    'author_dept' => 'Lead Developer',
    'link' => 'https://test',
    'thumbnail' => 'images/pkm1.jpg',
    'status' => 'Published'
  ],
  (object)[
    'id' => 2,
    'title' => 'Mastering UI Design: Creating Intuitive User Experiences',
    'caption' => 'Learn the principles of effective UI design and how to create interfaces that users love and understand intuitively.',
    'date' => \Carbon\Carbon::parse('2025-05-10'),
    'category' => 'Design',
    'author_name' => 'Alex Chen',
    'author_dept' => 'Developer',
    'link' => 'https://test',
    'thumbnail' => 'images/blog (2).jpg',
    'status' => 'Published'
  ],
  (object)[
    'id' => 3,
    'title' => "Laravel 12: What's New and Exciting",
    'caption' => 'Explore the latest features and improvements in Laravel 12 and how they can enhance your web development workflow.',
    'date' => \Carbon\Carbon::parse('2025-05-05'),
    'category' => 'Development',
    'author_name' => 'Michael Wong',
    'author_dept' => 'Developer',
    'link' => 'https://test',
    'thumbnail' => 'images/blog (1).jpg',
    'status' => 'Published'
  ],
  (object)[
    'id' => 4,
    'title' => "5 Ways to Improve Your Team's Productivity",
    'caption' => 'Discover practical strategies to boost your development team\'s efficiency and output without sacrificing quality.',
    'date' => \Carbon\Carbon::parse('2025-04-28'),
    'category' => 'Business',
    'author_name' => 'Emily Rodriguez',
    'author_dept' => 'Business Analyst',
    'link' => 'https://test',
    'thumbnail' => 'images/blog (3).jpg',
    'status' => 'Hidden'
  ],
  (object)[
    'id' => 5,
    'title' => "The Rise of AI in Web Applications",
    'caption' => 'How artificial intelligence is transforming web applications and what developers need to know to stay ahead.',
    'date' => \Carbon\Carbon::parse('2025-04-22'),
    'category' => 'Technology',
    'author_name' => 'David Kim',
    'author_dept' => 'AI Engineer',
    'link' => 'https://test',
    'thumbnail' => 'images/blog (5).jpg',
    'status' => 'Published'
  ]
];

?>
@extends('layouts.admin')

@section('admin-content')
<div class="container mx-auto px-4 py-6">
    <div class="bg-white rounded-lg shadow-sm p-4 sm:p-6">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4 md:mb-0">
                Manage Blog Posts
            </h2>
            <a href="{{ route('admin.blog.add') }}" class="w-full md:w-auto px-4 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition-colors flex items-center justify-center md:justify-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Create New Post
            </a>
        </div>

        <!-- Search and Filter -->
        <div class="mb-6">
            <form method="GET" action="" class="flex flex-col sm:flex-row gap-3 sm:gap-4 items-stretch">
                <div class="flex-grow">
                    <input type="text" name="search" placeholder="Search blog posts..." value="{{ request('search') }}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                <div class="w-full sm:w-auto">
                     <select name="category" class="w-full h-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">All Categories</option>
                        <option value="Technology" {{ request('category') == 'Technology' ? 'selected' : '' }}>Technology</option>
                        <option value="Design" {{ request('category') == 'Design' ? 'selected' : '' }}>Design</option>
                        <option value="Development" {{ request('category') == 'Development' ? 'selected' : '' }}>Development</option>
                        <option value="Business" {{ request('category') == 'Business' ? 'selected' : '' }}>Business</option>
                    </select>
                </div>
                <div class="w-full sm:w-auto">
                     <select name="status" class="w-full h-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">All Status</option>
                        <option value="Published" {{ request('status') == 'Published' ? 'selected' : '' }}>Published</option>
                        <option value="Hidden" {{ request('status') == 'Hidden' ? 'selected' : '' }}>Hidden</option>
                    </select>
                </div>
                <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-gray-600 text-white font-medium rounded-lg hover:bg-gray-700 transition-colors">
                    Filter
                </button>
            </form>
        </div>

        <!-- Blog Posts Table -->
        <div class="overflow-x-auto border border-gray-200 rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <!-- Always visible -->
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Blog Post
                        </th>
                        <!-- Hidden on smaller screens -->
                        <th scope="col" class="hidden lg:table-cell px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Author
                        </th>
                        <!-- Hidden on sm screens -->
                        <th scope="col" class="hidden md:table-cell px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Category
                        </th>
                        <!-- Hidden on smaller screens -->
                        <th scope="col" class="hidden lg:table-cell px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                        </th>
                        <!-- Hidden on smaller screens -->
                        <th scope="col" class="hidden lg:table-cell px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status
                        </th>
                        <!-- Always visible -->
                        <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($blogs as $blog)
                    <tr>
                        <td class="px-4 py-4 whitespace-normal">
                            <div class="flex items-center">
                                <!-- Thumbnail visible only on md screens and up -->
                                <div class="hidden md:block flex-shrink-0 h-12 w-16">
                                    <img class="h-12 w-16 rounded-md object-cover" src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->title }} thumbnail">
                                </div>
                                <div class="md:ml-3">
                                    <div class="text-sm font-medium text-gray-900 break-words">
                                        <!-- Truncated title on small screens -->
                                        <span class="md:hidden">
                                            {{ \Illuminate\Support\Str::limit($blog->title, 20, '...') }}
                                        </span>
                                        <!-- Full title on md screens and up -->
                                        <span class="hidden md:inline">
                                            {{ \Illuminate\Support\Str::limit($blog->title, 50, '...') }}
                                        </span>
                                    </div>
                                    <!-- Caption visible only on lg screens and up -->
                                    <div class="hidden lg:block text-xs text-gray-500 mt-1">
                                        {{ \Illuminate\Support\Str::limit($blog->caption, 60, '...') }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <!-- Author visible only on md screens and up -->
                        <td class="hidden lg:table-cell px-4 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $blog->author_name }}</div>
                            <div class="text-xs text-gray-500">{{ $blog->author_dept }}</div>
                        </td>
                        <!-- Category visible only on sm screens and up -->
                        <td class="hidden sm:table-cell px-4 py-4 whitespace-nowrap">
                            @php
                                $categoryColor = match(strtolower($blog->category)) {
                                    'technology' => 'bg-purple-100 text-purple-800',
                                    'design' => 'bg-blue-100 text-blue-800',
                                    'development' => 'bg-green-100 text-green-800',
                                    'business' => 'bg-yellow-100 text-yellow-800',
                                    default => 'bg-gray-100 text-gray-800',
                                };
                            @endphp
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $categoryColor }}">
                                {{ $blog->category }}
                            </span>
                        </td>
                        <!-- Date visible only on lg screens and up -->
                        <td class="hidden lg:table-cell px-4 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $blog->date->format('M d, Y') }}</div>
                        </td>
                        <!-- Status visible only on md screens and up -->
                        <td class="hidden lg:table-cell px-4 py-4 whitespace-nowrap">
                            @php
                                $statusColor = match($blog->status) {
                                    'Published' => 'bg-green-100 text-green-800',
                                    'Hidden' => 'bg-gray-100 text-gray-800',
                                    default => 'bg-gray-100 text-gray-800',
                                };
                            @endphp
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusColor }}">
                                {{ $blog->status }}
                            </span>
                        </td>
                        <!-- Actions always visible -->
                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex items-center space-x-3">
                                <a href="{{ $blog->link }}" target="_blank" class="text-gray-600 hover:text-gray-900" title="View Post">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </a>
                                <a href="{{ route('admin.blog.edit') }}" class="text-green-600 hover:text-green-900" title="Edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <button type="button" class="text-red-600 hover:text-red-900" onclick="confirmDelete({{ $blog->id }})" title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                            No blog posts found matching your criteria.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
           <nav class="flex items-center justify-between">
                <div class="flex-1 flex justify-between sm:hidden">
                    <a href="#" class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                        Next
                    </a>
                </div>
                <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">5</span>
                            of
                            <span class="font-medium">5</span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" aria-current="page" class="z-10 bg-green-50 border-green-500 text-green-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 1 </a>
                            <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"> 2 </a>
                            <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
           </nav>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center z-50 p-4">
    <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
        <div class="flex justify-between items-center mb-4">
             <h3 class="text-lg font-medium text-gray-900">Confirm Deletion</h3>
             <button onclick="closeDeleteModal()" class="text-gray-400 hover:text-gray-600">
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                 </svg>
             </button>
        </div>
        <p class="text-sm text-gray-600 mb-6">Are you sure you want to delete this blog post? This action cannot be undone and will remove the post from your website.</p>
        <div class="flex justify-end space-x-3">
            <button type="button" onclick="closeDeleteModal()" class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition-colors text-sm font-medium">
                Cancel
            </button>
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors text-sm font-medium">
                    Delete Post
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        const url = `{{ url('admin/blogs') }}/${id}`;
        document.getElementById('deleteForm').action = url;
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.add('hidden');
    }

    window.addEventListener('click', function(event) {
        var modal = document.getElementById('deleteModal');
        if (event.target == modal && !modal.classList.contains('hidden')) {
            closeDeleteModal();
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === "Escape") {
            closeDeleteModal();
        }
    });
</script>
@endsection