<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show_news()
    {
        return view('news.news');
    }

    public function detail_news()
    {
        return view('news.news_detail');
    }
}
