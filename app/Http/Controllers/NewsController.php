<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function getNews(News $news) {
        $news = News::get();
        return $news;
    }
}