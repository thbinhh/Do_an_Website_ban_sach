<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show_news()
    {
        $detail_news = DB::table('news')->get();
        return view('news.news')->with('news',$detail_news);
    }

    public function detail_news($newsid)
    {
        $detail_news = DB::table('news')->where('NewsID',$newsid)->get();
        return view('news.news_detail')->with('news',$detail_news);
    }
}
