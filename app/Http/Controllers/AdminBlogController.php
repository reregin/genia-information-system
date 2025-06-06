<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Exception;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the blogs in admin panel.
     */
    public function index()
    {
        $blogs = Blog::with(['category', 'author'])
            ->latest('publish_date')
            ->paginate(10);

        return view('modules.admin.blog.manage', compact('blogs'));
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
        // Determine if we're creating a new author
        $isCreatingNewAuthor = $request->creating_new_author == '1';
        
        // Base validation rules
        $rules = [
            'title' => 'required|max:255',
            'caption' => 'required',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'thumbnail' => 'required|image|max:2048',
            'is_featured' => 'boolean',
            'link' => 'nullable|url',
        ];
        
        // Add validation rules based on author selection
        if ($isCreatingNewAuthor) {
            $rules['new_author_name'] = 'required|max:255';
            $rules['new_author_department'] = 'required|max:255';
            $rules['new_author_avatar'] = 'nullable|image|max:1024';
        } else {
            $rules['author_id'] = 'required|exists:authors,id';
        }
        
        $validated = $request->validate($rules);
        
        // Handle author creation if needed
        if ($isCreatingNewAuthor) {
            $authorData = [
                'name' => $validated['new_author_name'],
                'department' => $validated['new_author_department'],
            ];
            
            // Handle author avatar upload
            if ($request->hasFile('new_author_avatar')) {
                $avatarPath = $request->file('new_author_avatar')->store('avatars', 'public');
                $authorData['avatar'] = $avatarPath;
            }
            
            $author = Author::create($authorData);
            $validated['author_id'] = $author->id;
        }
        
        // Handle the thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('images', 'public');
            $validated['thumbnail'] = $path;
        }
        
        // Generate unique slug from title
        $slug = $this->generateUniqueSlug($validated['title']);
        
        // Auto-generate publish_date (current timestamp)
        $publishDate = now();
        
        // Prepare data for blog creation
        $blogData = [
            'title' => $validated['title'],
            'slug' => $slug,
            'caption' => $validated['caption'],
            'content' => $validated['content'],
            'category_id' => $validated['category_id'],
            'author_id' => $validated['author_id'],
            'publish_date' => $publishDate,
            'thumbnail' => $validated['thumbnail'],
            'is_featured' => $validated['is_featured'] ?? false,
            'link' => $validated['link'] ?? null,
        ];
        
        // Create the blog post
        $blog = Blog::create($blogData);
        
        return redirect()->route('admin.blog')
            ->with('success', 'Blog post saved successfully!');
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
            return redirect()->route('admin.blog.create')
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
            'thumbnail' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
            'link' => 'nullable|url',
        ]);

        // Generate new slug if title changed
        if ($validated['title'] !== $blog->title) {
            $validated['slug'] = $this->generateUniqueSlug($validated['title'], $blog->id);
        }

        // Keep the original publish_date (don't allow manual changes)
        // The publish_date should remain the same as when first created

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
        try {
            // Store blog title for success message
            $blogTitle = $blog->title;
            
            // Array to track what was deleted for logging
            $deletedFiles = [];
            
            // Delete associated thumbnail if it exists
            if ($blog->thumbnail) {
                $thumbnailPath = $blog->thumbnail;
                
                // Check if file exists and delete it
                if (Storage::disk('public')->exists($thumbnailPath)) {
                    Storage::disk('public')->delete($thumbnailPath);
                    $deletedFiles[] = "Thumbnail: {$thumbnailPath}";
                    Log::info("Deleted thumbnail file: {$thumbnailPath}");
                } else {
                    Log::warning("Thumbnail file not found: {$thumbnailPath}");
                }
            }
            
            // If the blog has an author avatar that was created specifically for this blog,
            // you might want to check if this is the only blog using that author
            // and delete the author avatar as well (optional - be careful with this)
            
            // Delete the blog record from database
            $blog->delete();
            
            // Log the deletion
            Log::info("Blog post deleted successfully", [
                'blog_id' => $blog->id,
                'blog_title' => $blogTitle,
                'deleted_files' => $deletedFiles,
                'deleted_by' => auth()->user()->id ?? 'system'
            ]);
            
            return redirect()->route('admin.blog')
                ->with('success', "Blog post '{$blogTitle}' has been deleted successfully!");
                
        } catch (Exception $e) {
            // Log the error
            Log::error("Failed to delete blog post", [
                'blog_id' => $blog->id,
                'blog_title' => $blog->title,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect()->route('admin.blog')
                ->with('error', 'Failed to delete the blog post. Please try again or contact support.');
        }
    }

    /**
     * Generate a unique slug from the given title
     */
    private function generateUniqueSlug($title, $excludeId = null)
    {
        // Create base slug from title
        $baseSlug = Str::slug($title);
        
        // If base slug is empty, use a default
        if (empty($baseSlug)) {
            $baseSlug = 'blog-post';
        }
        
        $slug = $baseSlug;
        $counter = 1;
        
        // Check if slug exists and increment until we find a unique one
        while ($this->slugExists($slug, $excludeId)) {
            $slug = $baseSlug . '-' . $counter;
            $counter++;
        }
        
        return $slug;
    }

    /**
     * Check if a slug already exists in the database
     */
    private function slugExists($slug, $excludeId = null)
    {
        $query = Blog::where('slug', $slug);
        
        // Exclude current blog when updating
        if ($excludeId) {
            $query->where('id', '!=', $excludeId);
        }
        
        return $query->exists();
    }
}