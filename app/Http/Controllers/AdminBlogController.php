<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the blogs in admin panel.
     */
    public function index()
    {
        $blogs = Blog::with(['category', 'author'])
            ->latest('publish_date')
            ->paginate(10); // <--- Change get() to paginate(itemsPerPage)

        return view('modules.admin.blog.manage', compact('blogs')); //
    }

    /**
     * Show the form for creating a new blog.
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Author::all();
        return view('modules.admin.blog.add', compact('categories', 'authors'));
    }

    /**
     * Store a newly created blog in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'caption' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
            'publish_date' => 'required|date',
            'thumbnail' => 'required|image|max:2048',
            'is_featured' => 'boolean',
        ]);

        // Handle the thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('images', 'public');
            $validated['thumbnail'] = $path;
        }

        Blog::create($validated);

        return redirect()->route('admin.blog')
            ->with('success', 'Blog created successfully!');
    }

    /**
     * Show the form for editing the specified blog.
     */
    public function edit(Blog $blog = null)
    {
        // If no blog is specified, get the most recent one
        if (!$blog) {
            $blog = Blog::latest()->first();
        }

        if (!$blog) {
            return redirect()->route('admin.blog.add')
                ->with('info', 'No blogs found. Create your first blog post.');
        }

        $categories = Category::all();
        $authors = Author::all();
        return view('modules.admin.blog.edit', compact('blog', 'categories', 'authors'));
    }

    /**
     * Update the specified blog in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'caption' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'author_id' => 'required|exists:authors,id',
            'publish_date' => 'required|date',
            'thumbnail' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
        ]);

        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if it exists
            if ($blog->thumbnail && Storage::disk('public')->exists($blog->thumbnail)) {
                Storage::disk('public')->delete($blog->thumbnail);
            }

            $path = $request->file('thumbnail')->store('images', 'public');
            $validated['thumbnail'] = $path;
        }

        $blog->update($validated);

        return redirect()->route('admin.blog')
            ->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified blog from storage.
     */
    public function destroy(Blog $blog)
    {
        // Delete associated thumbnail if it exists
        if ($blog->thumbnail && Storage::disk('public')->exists($blog->thumbnail)) {
            Storage::disk('public')->delete($blog->thumbnail);
        }

        $blog->delete();

        return redirect()->route('admin.blog')
            ->with('success', 'Blog deleted successfully!');
    }
}