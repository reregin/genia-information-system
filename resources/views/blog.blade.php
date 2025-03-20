<?php
$blogs = [
  (object)[
    'title' => 'The Future of Web Development: Trends to Watch in 2025',
    'caption' => 'The web development landscape is constantly evolving. In this comprehensive guide, we explore the emerging technologies and methodologies that are shaping the future of how we build and interact with websites.',
    'date' => 'May 20, 2025',
    'category' => 'Technology',
    'author_name' => 'Sarah Johnson',
    'author_dept' => 'Lead Developer',
    'link' => 'https://test',
    'thumbnail' => asset('images/pkm1.jpg')
  ],
  (object)[
    'title' => 'Mastering UI Design: Creating Intuitive User Experiences',
    'caption' => 'Learn the principles of effective UI design and how to create interfaces that users love and understand intuitively.',
    'date' => 'May 10, 2025',
    'category' => 'Design',
    'author_name' => 'Alex Chen',
    'author_dept' => 'Developer',
    'link' => 'https://test',
    'thumbnail' => asset('images/blog (2).jpg')
  ],
  (object)[
    'title' => "Laravel 12: What's New and Exciting",
    'caption' => 'Explore the latest features and improvements in Laravel 12 and how they can enhance your web development workflow.',
    'date' => 'May 5, 2025',
    'category' => 'Development',
    'author_name' => 'Michael Wong',
    'author_dept' => 'Developer',
    'link' => 'https://test',
    'thumbnail' => asset('images/blog (1).jpg')
  ],
  (object)[
    'title' => "5 Ways to Improve Your Team's Productivity",
    'caption' => 'Discover practical strategies to boost your development team\'s efficiency and output without sacrificing quality.',
    'date' => 'April 28, 2025',
    'category' => 'Business',
    'author_name' => 'Emily Rodriguez',
    'author_dept' => 'Business Analyst',
    'link' => 'https://test',
    'thumbnail' => asset('images/blog (3).jpg')
  ],
  (object)[
      'title' => "The Rise of AI in Web Applications",
      'caption' => 'How artificial intelligence is transforming web applications and what developers need to know to stay ahead.',
      'date' => 'April 22, 2025',
      'category' => 'Technology',
      'author_name' => 'David Kim',
      'author_dept' => 'AI Engineer',
      'link' => 'https://test',
      'thumbnail' => asset('images/blog (5).jpg')
  ],
  (object)[
      'title' => "Building Secure REST APIs with Laravel",
      'caption' => 'Learn best practices for creating secure, scalable, and maintainable RESTful APIs using Laravel.',
      'date' => 'April 15, 2025',
      'category' => 'Development',
      'author_name' => 'Sophia Lee',
      'author_dept' => 'Developer',
      'link' => 'https://test',
      'thumbnail' => asset('images/blog (4).jpg')
  ],
  (object)[
      'title' => "Color Theory for Web Designers",
      'caption' => 'Understanding color theory and how to apply it effectively in your web design projects for maximum impact.',
      'date' => 'April 8, 2025',
      'category' => 'Design',
      'author_name' => 'Jason Torres',
      'author_dept' => 'UI/UX Designer',
      'link' => 'https://test',
      'thumbnail' => asset('images/blog (6).jpg')
  ],
]
?>

@extends('layouts.app', [ 'path' => ['Beranda', 'Blog'] ])

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Page Title -->
        <div class="mb-8 w-screen flex items-center flex-col">
            <h1 class="text-3xl font-bold text-gray-800">Explore Our Blog</h1>
            <p class="text-gray-600 mt-2">Discover the latest insights, tips, and news from our team</p>
        </div>

        <!-- Featured/Highlighted Blog Post -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-12">
            <div class="md:flex">
                <div class="md:w-1/2">
                    <img src="{{ $blogs[0]->thumbnail }}" alt="Featured blog post" class="w-full h-full object-cover">
                </div>
                <div class="md:w-1/2 p-8">
                    <div class="flex items-center mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-3 py-1 rounded-full">NEW</span>
                        <span class="ml-2 text-sm text-gray-500">{{ $blogs[0]->date }}</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $blogs[0]->title }}</h2>
                    <p class="text-gray-600 mb-6">{{ $blogs[0]->caption }}</p>
                    <div class="flex items-center mb-6">
                        <img src="{{ asset("images/avatar1.png") }}" alt="Author" class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <p class="text-gray-800 font-medium">{{ $blogs[0]->author_name }}</p>
                            <p class="text-gray-500 text-sm">{{ $blogs[0]->author_dept }}</p>
                        </div>
                    </div>
                    <a href="{{ route('details_blog') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Read More</a>
                </div>
            </div>
        </div>

        <!-- Blog Post Categories -->
        <div class="flex flex-wrap gap-2 mb-8">
            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium">All</button>
            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg font-medium transition">Development</button>
            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg font-medium transition">Design</button>
            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg font-medium transition">Business</button>
            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg font-medium transition">Technology</button>
        </div>

        <!-- Blog Post Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($blogs as $index => $blog)
              <!-- @if ($index == 0)
                  @continue
              @endif -->
              <div class="bg-white rounded-lg shadow-md overflow-hidden transition transform hover:-translate-y-1 hover:shadow-lg">
                  <img src="{{ $blog->thumbnail }}" alt="Blog post" class="w-full h-48 object-cover">
                  <div class="p-6">
                      <div class="flex items-center mb-2">
                          <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">{{ $blog->category }}</span>
                          <span class="ml-2 text-sm text-gray-500">{{ $blog->date }}</span>
                      </div>
                      <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $blog->title }}</h3>
                      <p class="text-gray-600 mb-4">{{ $blog->caption }}</p>
                      <div class="flex items-center justify-between">
                          <div class="flex items-center">
                              <img src="{{ asset("images/avatar1.png") }}" alt="Author" class="w-8 h-8 rounded-full mr-2">
                              <span class="text-gray-700 text-sm">{{ $blog->author_name }}</span>
                          </div>
                          <a href="{{ route('details_blog') }}" class="text-blue-600 hover:text-blue-800 font-medium">Read More →</a>
                      </div>
                  </div>
              </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="inline-flex">
                <a href="#" class="px-4 py-2 rounded-l-lg border border-gray-300 bg-white text-gray-500 hover:bg-gray-50">Previous</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-blue-600 text-white">1</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">2</a>
                <a href="#" class="px-4 py-2 border-t border-b border-gray-300 bg-white text-gray-700 hover:bg-gray-50">3</a>
                <a href="#" class="px-4 py-2 rounded-r-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">Next</a>
            </nav>
        </div>

        <!-- Newsletter Signup -->
        <div class="mt-16 bg-gray-100 rounded-lg p-8">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Stay Updated</h3>
                <p class="text-gray-600 mb-6">Subscribe to our newsletter to receive the latest blog posts and updates</p>
                <div class="flex flex-col sm:flex-row gap-2 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" class="flex-grow px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <button class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-300">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
@endsection