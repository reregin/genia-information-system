<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the news.
     */
    public function index()
    {
        $news = News::orderBy('publish_date', 'desc')->paginate(10);
        return view('Modules.Admin.News.Manage', compact('news'));
    }

    /**
     * Show the form for creating a new news.
     */
    public function create()
    {
        return view('Modules.Admin.News.Add');
    }

    /**
     * Store a newly created news in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'caption' => 'required',
            'level' => 'required|in:International,Regional,National',
            'competition' => 'required|in:PKM,GELATIK,ON MIPA PT,COMPFEST',
            'status' => 'required|in:Draft,Published',
            'content' => 'required',
            'publish_date' => 'required|date',
            'slug' => 'nullable|unique:news,slug',
            'thumbnail' => 'required|image|max:2048',
            'link' => 'nullable|url'
        ]);

        // Handle file upload
        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('news/thumbnails', 'public');
            $validated['thumbnail'] = 'storage/' . $path;
        }

        // Generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Create news
        News::create($validated);

        return redirect()->route('admin.news')->with('success', 'News created successfully');
    }

    /**
     * Show the form for editing the specified news.
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('Modules.Admin.News.Edit', compact('news'));
    }

    /**
     * Update the specified news in storage.
     */
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        // Validate input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'caption' => 'required',
            'level' => 'required|in:International,Regional,National',
            'competition' => 'required|in:PKM,GELATIK,ON MIPA PT,COMPFEST',
            'status' => 'required|in:Draft,Published',
            'content' => 'required',
            'publish_date' => 'required|date',
            'slug' => 'nullable|unique:news,slug,' . $id,
            'thumbnail' => 'nullable|image|max:2048',
            'link' => 'nullable|url'
        ]);

        // Handle file upload
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if exists
            if ($news->thumbnail && Storage::disk('public')->exists(str_replace('storage/', '', $news->thumbnail))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $news->thumbnail));
            }
            
            $path = $request->file('thumbnail')->store('news/thumbnails', 'public');
            $validated['thumbnail'] = 'storage/' . $path;
        }

        // Generate slug if not provided
        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['title']);
        }

        // Update news
        $news->update($validated);

        return redirect()->route('admin.news')->with('success', 'News updated successfully');
    }

    /**
     * Remove the specified news from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        
        // Delete thumbnail if exists
        if ($news->thumbnail && Storage::disk('public')->exists(str_replace('storage/', '', $news->thumbnail))) {
            Storage::disk('public')->delete(str_replace('storage/', '', $news->thumbnail));
        }
        
        $news->delete();

        // Flash success message
        return response()->json([
            'success' => true,
            'message' => 'News deleted successfully'
        ]);
    }
}