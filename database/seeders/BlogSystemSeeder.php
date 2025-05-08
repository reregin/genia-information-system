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
                'content' => 'Full blog content would go here...'
            ],
            [
                'title' => 'Mastering UI Design: Creating Intuitive User Experiences',
                'caption' => 'Learn the principles of effective UI design and how to create interfaces that users love and understand intuitively.',
                'publish_date' => '2025-05-10',
                'category_id' => Category::where('name', 'Design')->first()->id,
                'author_id' => Author::where('name', 'Alex Chen')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (2).jpg',
                'content' => 'Full blog content would go here...'
            ],
            [
                'title' => "Laravel 12: What's New and Exciting",
                'caption' => 'Explore the latest features and improvements in Laravel 12 and how they can enhance your web development workflow.',
                'publish_date' => '2025-05-05',
                'category_id' => Category::where('name', 'Development')->first()->id,
                'author_id' => Author::where('name', 'Michael Wong')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (1).jpg',
                'content' => 'Full blog content would go here...'
            ],
            [
                'title' => "5 Ways to Improve Your Team's Productivity",
                'caption' => 'Discover practical strategies to boost your development team\'s efficiency and output without sacrificing quality.',
                'publish_date' => '2025-04-28',
                'category_id' => Category::where('name', 'Business')->first()->id,
                'author_id' => Author::where('name', 'Emily Rodriguez')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (3).jpg',
                'content' => 'Full blog content would go here...'
            ],
            [
                'title' => "The Rise of AI in Web Applications",
                'caption' => 'How artificial intelligence is transforming web applications and what developers need to know to stay ahead.',
                'publish_date' => '2025-04-22',
                'category_id' => Category::where('name', 'Technology')->first()->id,
                'author_id' => Author::where('name', 'David Kim')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (5).jpg',
                'content' => 'Full blog content would go here...'
            ],
            [
                'title' => "Building Secure REST APIs with Laravel",
                'caption' => 'Learn best practices for creating secure, scalable, and maintainable RESTful APIs using Laravel.',
                'publish_date' => '2025-04-15',
                'category_id' => Category::where('name', 'Development')->first()->id,
                'author_id' => Author::where('name', 'Sophia Lee')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (4).jpg',
                'content' => 'Full blog content would go here...'
            ],
            [
                'title' => "Color Theory for Web Designers",
                'caption' => 'Understanding color theory and how to apply it effectively in your web design projects for maximum impact.',
                'publish_date' => '2025-04-08',
                'category_id' => Category::where('name', 'Design')->first()->id,
                'author_id' => Author::where('name', 'Jason Torres')->first()->id,
                'link' => 'https://test',
                'thumbnail' => 'images/blog (6).jpg',
                'content' => 'Full blog content would go here...'
            ],
        ];

        foreach ($blogs as $blogData) {
            Blog::create($blogData);
        }
    }
}