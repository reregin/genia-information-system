<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('publish_date', 'desc')->paginate(6);
        return view('modules.news.news', compact('news'));
    }

    public function show($slug)
    {
        $newsItem = News::where('slug', $slug)->firstOrFail();
        return view('modules.news.details_news', compact('newsItem'));
    }
}