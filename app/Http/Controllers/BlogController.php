<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display the blog listing page.
     */
    public function index(Request $request)
    {
        $categorySlug = $request->get('category');
        $categories = Category::all();

        $blogsQuery = Blog::with(['category', 'author'])->latest('publish_date');

        // Filter by category if provided
        if ($categorySlug) {
            $blogsQuery->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            });
        }

        $blogs = $blogsQuery->paginate(9);

        $featuredBlog = Blog::where('is_featured', true)->with(['category', 'author'])->first();

        if (!$featuredBlog && $blogs->isNotEmpty()) {
            $featuredBlog = $blogs->first();
        }

        return view('modules.blog.blog', compact('blogs', 'categories', 'featuredBlog'));
    }

    /**
     * Display the blog details page.
     * 
     * Note: Currently using a fixed route, but can be modified to accept a blog ID parameter
     */
    public function show(Request $request, $slug = null)
    {
        if ($slug) {
            $blog = Blog::with(['category', 'author'])->where('slug', $slug)->firstOrFail();
        } else {
            // Fallback to ID parameter for backward compatibility
            $blogId = $request->input('id');

            if ($blogId) {
                $blog = Blog::with(['category', 'author'])->findOrFail($blogId);
            } else {
                // Without parameters, show the latest blog
                $blog = Blog::with(['category', 'author'])->latest('publish_date')->first();
            }
        }

        $relatedBlogs = Blog::where('category_id', $blog->category_id)
            ->where('id', '!=', $blog->id)
            ->latest('publish_date')
            ->limit(3)
            ->get();

        return view('modules.blog.details_blog', compact('blog', 'relatedBlogs'));
    }

    /**
     * Display the blog submission form.
     */
    public function submitForm()
    {
        $categories = Category::all();
        return view('modules.blog.send_blog', compact('categories'));
    }

    /**
     * Store a submitted blog from the public form.
     */
    public function storeSubmission(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'caption' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email|max:255',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        // Handle submission (store pending, send notification, etc.)
        // This could create a pending blog entry that admins need to approve

        return redirect()->route('blog')
            ->with('success', 'Thank you for your submission! It will be reviewed by our team.');
    }
}