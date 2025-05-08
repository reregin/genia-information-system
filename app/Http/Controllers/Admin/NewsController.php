<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    // Show all news (Manage page)
    public function index()
    {
        try {
            $news = News::latest()->paginate(10);
            Log::info('News retrieved successfully', ['count' => $news->count()]);
            return view('modules.admin.news.manage', compact('news'));
        } catch (\Exception $e) {
            Log::error('Error retrieving news: ' . $e->getMessage());
            return back()->with('error', 'Error retrieving news: ' . $e->getMessage());
        }
    }

    // Show add form
    public function create()
    {
        return view('modules.admin.news.add');
    }

    // Store new news
    public function store(Request $request)
    {
        try {
            Log::info('Attempting to store news', ['request_data' => $request->all()]);

            $validated = $request->validate([
                'title' => 'required|max:255',
                'caption' => 'required',
                'content' => 'required',
                'level' => 'required|in:International,Regional,National',
                'competition' => 'required|in:PKM,GELATIK,ON MIPA PT,COMPFEST',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'publish_date' => 'required|date',
                'link' => 'nullable|url'
            ]);

            // Handle thumbnail upload
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move(public_path('uploads/news'), $thumbnailName);
                $validated['thumbnail'] = 'uploads/news/' . $thumbnailName;
            }

            // Generate slug
            $validated['slug'] = Str::slug($validated['title']);
            
            // Create news
            $news = News::create($validated);
            
            Log::info('News created successfully', ['news_id' => $news->id]);
            return redirect()->route('admin.news.index')->with('success', 'News created successfully');
        } catch (\Exception $e) {
            Log::error('Error creating news: ' . $e->getMessage());
            return back()->with('error', 'Error creating news: ' . $e->getMessage())->withInput();
        }
    }

    // Show edit form
    public function edit(News $news)
    {
        try {
            Log::info('Loading news for edit', ['news_id' => $news->id]);
            return view('modules.admin.news.edit', compact('news'));
        } catch (\Exception $e) {
            Log::error('Error loading news for edit: ' . $e->getMessage());
            return back()->with('error', 'Error loading news: ' . $e->getMessage());
        }
    }

    // Update news
    public function update(Request $request, News $news)
    {
        try {
            Log::info('Attempting to update news', ['news_id' => $news->id, 'request_data' => $request->all()]);

            $validated = $request->validate([
                'title' => 'required|max:255',
                'caption' => 'required',
                'content' => 'required',
                'level' => 'required|in:International,Regional,National',
                'competition' => 'required|in:PKM,GELATIK,ON MIPA PT,COMPFEST',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'publish_date' => 'required|date',
                'link' => 'nullable|url'
            ]);

            // Handle thumbnail upload if new one is provided
            if ($request->hasFile('thumbnail')) {
                // Delete old thumbnail
                if ($news->thumbnail && file_exists(public_path($news->thumbnail))) {
                    unlink(public_path($news->thumbnail));
                }
                
                $thumbnail = $request->file('thumbnail');
                $thumbnailName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move(public_path('uploads/news'), $thumbnailName);
                $validated['thumbnail'] = 'uploads/news/' . $thumbnailName;
            }

            // Update slug if title changed
            if ($news->title !== $validated['title']) {
                $validated['slug'] = Str::slug($validated['title']);
            }

            $news->update($validated);
            
            Log::info('News updated successfully', ['news_id' => $news->id]);
            return redirect()->route('admin.news.index')->with('success', 'News updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating news: ' . $e->getMessage());
            return back()->with('error', 'Error updating news: ' . $e->getMessage())->withInput();
        }
    }

    // Delete news
    public function destroy(News $news)
    {
        try {
            Log::info('Attempting to delete news', ['news_id' => $news->id]);
            
            // Delete thumbnail if exists
            if ($news->thumbnail && file_exists(public_path($news->thumbnail))) {
                unlink(public_path($news->thumbnail));
            }
            
            $news->delete();
            
            Log::info('News deleted successfully', ['news_id' => $news->id]);
            
            if (request()->expectsJson()) {
                return response()->json(['success' => true, 'message' => 'News deleted successfully']);
            }
            
            return redirect()->route('admin.news')->with('success', 'News deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting news: ' . $e->getMessage());
            
            if (request()->expectsJson()) {
                return response()->json(['success' => false, 'message' => 'Error deleting news: ' . $e->getMessage()], 500);
            }
            
            return back()->with('error', 'Error deleting news: ' . $e->getMessage());
        }
    }
} 