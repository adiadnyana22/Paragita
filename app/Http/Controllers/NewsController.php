<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsList() {
        $news = News::all();
        $otherNews = News::limit(3)->get();

        return view('pages.news-list')->with('news', $news)->with('otherNews', $otherNews);
    }

    public function newsDetail(News $news, Request $request) {
        $otherNews = News::limit(3)->get();

        return view('pages.news-detail')->with('news', $news)->with('otherNews', $otherNews);
    }
}
