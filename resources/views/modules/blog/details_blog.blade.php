@extends('layouts.app', [ 'path' => [] ])
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

@section('content')
<div class="container mx-auto px-4 py-8 max-w-4xl">
    <!-- Article Header -->
    <div class="mb-8">
        <div class="flex items-center mb-4">
            <span class="inline-block bg-green-100 text-green-600 px-2 py-1 text-xs font-medium rounded">{{ $post->category }}</span>
            <span class="ml-2 text-gray-500 text-sm">{{ $post->created_at->format('F j, Y') }}</span>
        </div>
        <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ $post->title }}</h1>
        
        <!-- Author info -->
        <div class="flex items-center mb-6">
            <div class="h-10 w-10 rounded-full bg-gray-300 overflow-hidden">
                <img src="{{ asset('images/avatar1.png') }}" alt="" class="w-full h-full object-cover">
            </div>
            <div class="ml-3">
                <p class="text-gray-800 font-medium">{{ $post->author_name }}</p>
                <p class="text-gray-500 text-sm">Pengurus</p>
            </div>
        </div>
    </div>
    
    <!-- Featured Image -->
    @if($post->featured_image)
    <div class="mb-8">
        <img src="{{ asset('images/'.$post->featured_image) }}" 
             alt="{{ $post->title }}" 
             class="w-full h-auto rounded-lg shadow-md">
    </div>
    @endif
    
    <!-- Article Content -->
    <div class="prose prose-lg max-w-none">
        {!! html_entity_decode($post->content) !!}
    </div>
    
    
    <!-- Comment Section (if you want to implement) -->
    @if(isset($enableComments) && $enableComments)
    <div class="mt-12">
        <h3 class="text-xl font-bold mb-6">Comments</h3>
        <!-- Comments implementation goes here -->
    </div>
    @endif
    
    <!-- Back to Blog Link -->
    <div class="mt-12">
        <a href="" class="inline-flex items-center text-blue-600 hover:text-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to All Articles
        </a>
    </div>
</div>
@endsection