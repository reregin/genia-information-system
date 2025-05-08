<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        // Create Categories
        $categories = [
            'Technology',
            'Design',
            'Development',
            'Business'
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'slug' => Str::slug($categoryName)
            ]);
        }

        // Create Authors
        $authors = [
            [
                'name' => 'Sarah Johnson',
                'department' => 'Lead Developer',
            ],
            [
                'name' => 'Alex Chen',
                'department' => 'Developer',
            ],
            [
                'name' => 'Michael Wong',
                'department' => 'Developer',
            ],
            [
                'name' => 'Emily Rodriguez',
                'department' => 'Business Analyst',
            ],
            [
                'name' => 'David Kim',
                'department' => 'AI Engineer',
            ],
            [
                'name' => 'Sophia Lee',
                'department' => 'Developer',
            ],
            [
                'name' => 'Jason Torres',
                'department' => 'UI/UX Designer',
            ],
        ];

        foreach ($authors as $authorData) {
            Author::create($authorData);
        }

        // Create Blog Posts
        $blogs = [
            [
                'title' => 'The Future of Web Development: Trends to Watch in 2025',
                'caption' => 'The web development landscape is constantly evolving. In this comprehensive guide, we explore the emerging technologies and methodologies that are shaping the future of how we build and interact with websites.',
                'publish_date' => '2025-05-20',
                'category_id' => Category::where('name', 'Technology')->first()->id,
                'author_id' => Author::where('name', 'Sarah Johnson')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/pkm1.jpg',
                'is_featured' => true,
                'content' => 'As technology continues to evolve rapidly, the field of web development is no exception. In 2025, developers can expect to see major changes driven by artificial intelligence, WebAssembly, and deeper integration of serverless architectures.

Progressive Web Apps (PWAs) will become more powerful, blurring the lines between web and native apps. Server-side rendering will continue to be popular for performance and SEO benefits, while tools like Vite and TurboPack may revolutionize bundling.

Keeping up with these trends is not just optional — it’s essential for developers who want to stay competitive and build scalable, modern applications.'
            ],
            [
                'title' => 'Mastering UI Design: Creating Intuitive User Experiences',
                'caption' => 'Learn the principles of effective UI design and how to create interfaces that users love and understand intuitively.',
                'publish_date' => '2025-05-10',
                'category_id' => Category::where('name', 'Design')->first()->id,
                'author_id' => Author::where('name', 'Alex Chen')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (2).jpg',
                'content' => 'Great UI design goes beyond aesthetics — it’s about crafting experiences that users understand instinctively. In this post, we explore core principles like hierarchy, consistency, and feedback.

We also dive into practical techniques such as wireframing, prototyping with tools like Figma, and A/B testing user interfaces to refine them based on data.

If you want users to love your app, start with design that respects their time and intentions.'
            ],
            [
                'title' => "Laravel 12: What's New and Exciting",
                'caption' => 'Explore the latest features and improvements in Laravel 12 and how they can enhance your web development workflow.',
                'publish_date' => '2025-05-05',
                'category_id' => Category::where('name', 'Development')->first()->id,
                'author_id' => Author::where('name', 'Michael Wong')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (1).jpg',
                'content' => 'Laravel 12 introduces several improvements that make PHP development even more enjoyable. With enhanced routing capabilities, improved queue handling, and better performance tuning out of the box, this release is a step forward for developer productivity.

Features like automatic route caching and native support for typed enums help reduce boilerplate and improve maintainability.

Whether you’re building APIs or full-stack apps, Laravel 12 continues to be a robust framework choice.'
            ],
            [
                'title' => "5 Ways to Improve Your Team's Productivity",
                'caption' => 'Discover practical strategies to boost your development team\'s efficiency and output without sacrificing quality.',
                'publish_date' => '2025-04-28',
                'category_id' => Category::where('name', 'Business')->first()->id,
                'author_id' => Author::where('name', 'Emily Rodriguez')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (3).jpg',
                'content' => 'Effective teamwork is critical to successful software projects. In this post, we explore five actionable strategies: defining clear goals, adopting Agile methodologies, automating routine tasks, encouraging code reviews, and minimizing context switching.

We also highlight the importance of psychological safety in fostering collaboration.

A productive team isn’t just fast — it’s efficient, happy, and aligned with the project vision.'
            ],
            [
                'title' => "The Rise of AI in Web Applications",
                'caption' => 'How artificial intelligence is transforming web applications and what developers need to know to stay ahead.',
                'publish_date' => '2025-04-22',
                'category_id' => Category::where('name', 'Technology')->first()->id,
                'author_id' => Author::where('name', 'David Kim')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (5).jpg',
                'content' => 'AI is no longer just a buzzword — it’s transforming how we build and interact with web apps. From chatbots and recommendation engines to image recognition and predictive analytics, AI is driving personalization and efficiency.

We also examine how frameworks like TensorFlow.js and ONNX.js make it easier to embed models directly into front-end apps.

Staying ahead means not only using AI but understanding how to use it responsibly and effectively.'
            ],
            [
                'title' => "Building Secure REST APIs with Laravel",
                'caption' => 'Learn best practices for creating secure, scalable, and maintainable RESTful APIs using Laravel.',
                'publish_date' => '2025-04-15',
                'category_id' => Category::where('name', 'Development')->first()->id,
                'author_id' => Author::where('name', 'Sophia Lee')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (4).jpg',
                'content' => 'Security is non-negotiable when building REST APIs. Laravel provides tools like Sanctum, throttling, validation, and built-in CSRF protection to help you ship secure endpoints.

In this guide, we walk through best practices like token-based authentication, HTTPS enforcement, input validation, and rate limiting.

Security should never be an afterthought. A strong API foundation ensures trust and scalability.'
            ],
            [
                'title' => "Color Theory for Web Designers",
                'caption' => 'Understanding color theory and how to apply it effectively in your web design projects for maximum impact.',
                'publish_date' => '2025-04-08',
                'category_id' => Category::where('name', 'Design')->first()->id,
                'author_id' => Author::where('name', 'Jason Torres')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (6).jpg',
                'content' => 'Color theory is a foundational element of web design. This post covers how to choose color palettes that enhance usability, evoke emotion, and improve brand recognition.

We discuss complementary, analogous, and triadic color schemes, and tools like Coolors and Adobe Color.

Whether you’re designing for dark mode or light mode, a good grasp of color principles will elevate your UI from good to great.'
            ],
        ];

        foreach ($blogs as $blogData) {
            $blogData['slug'] = Str::slug($blogData['title']);
            Blog::create($blogData);
        }
    }
}